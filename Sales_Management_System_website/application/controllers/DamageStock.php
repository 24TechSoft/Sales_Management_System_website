<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class DamageStock extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('DamageStock_Model');
		$this->load->model('CurrentStock_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Login_Model');
		$this->load->model('Order_Model');
		$this->load->helper('url');
   	}
	
	public function index(){
		$UserType=$this->input->cookie('UserType',true);
		$WarehouseID=$this->input->cookie('WarehouseID',true);
		if($UserType==1){
			$where=1;
		}
		else if($UserType==2){
			$where="ID=$WarehouseID";
		}
		else if($UserType==3){
			$where=0;
		}
		$data["type"]=$UserType;
		$data["warehouse"]=$this->InStock_Model->SelectWarehouses($where);
		$data["item"]=$this->InStock_Model->SelectItem();
		$UserID=$this->input->cookie('UserID',true);
		$whereuser="ID=$UserID and UserType=$UserType";
		$UserName="";
		$user=$this->Login_Model->selectuser($whereuser);
		foreach($user as $rowuser){
			$UserName=$rowuser["FullName"];
		}
		$head['UserName']=$UserName;
		$head['type']=$UserType;
		
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Admin/damage-stock',$data);
		
	}
	public function AddInStock(){			
		$WarehouseNot=$this->input->cookie('WarehouseID',true);
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		
		$Warehouse=$this->input->post('warehouse');
		$Item=$this->input->post('item');
		$Damagedate=$this->input->post('date');
		$Quatity=$this->input->post('quantity');
		$Description=$this->input->post('description');
		$where="WarehouseID=$Warehouse and ItemID=$Item";
		$data = array(
					 'WarehouseID'=>$Warehouse,
					 'ItemID'=>$Item,
					 'Date'=>$Damagedate,
					 'Quantity'=>$Quatity,
					 'Remarks'=>$Description,
					);
		$datac="Quantity=Quantity-$Quatity";
		$availability=$this->InStock_Model->itemInstock($where);
		$quantity="";
		foreach($availability as $row){
			$quantity=$row["Quantity"];
		}
		if($quantity > 0){
			$this->DamageStock_Model->AddInStock($data);
			/*notification*/
		
		/*order item updated */
		$data_noti=array(
			'SourceUserID'=>$UserID,
			'SourceUserType'=>$UserType,
			'WarehouseID'=>$WarehouseNot,
			'Detail'=>"Stock damaged at WarehouseID ".$WarehouseNot,
			'Type'=>7,
			'Date'=>date('Y-m-d'),
		);
		$this->Order_Model->addNotification($data_noti);
		/*notification*/
			$availability=$this->InStock_Model->updateCurrent_Stock($datac,$where);
			
		}
		
		
		
	}



	public function ShowInStock()
			{
				$UserType=$this->input->cookie('UserType',true);
				$WarehouseID=$this->input->cookie("WarehouseID",true);
				if($UserType==1){
					$where=1;
				}
				else if($UserType==2){
					$where="a.WarehouseID=$WarehouseID";
				}
				else if($UserType==3){
					$where=1;
				}
				$result = $this->DamageStock_Model->ShowInStock($where);
				echo json_encode($result);
			}
	public function DeleteInStock()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$wheredamage="a.ID=$ID";
				$Quantity=0.00;
				$ItemID=0;
				$WarehouseID=0;
				$result=$this->DamageStock_Model->ShowInStock($wheredamage);
				foreach($result as $row){
					$ItemID=$row["ItemID"];
					$WarehouseID=$row["WarehouseID"];
					$Quantity=$row["Quantity"];
				}
				$data="Quantity=Quantity+$Quantity";
				$wherestock="ItemID=$ItemID and WarehouseID=$WarehouseID";
				$this->DamageStock_Model->DeleteInStock($where);
				$this->CurrentStock_Model->UpdateQuantity($data,$wherestock);
				redirect('DamageStock');
			}
	
	

   }
   ?>