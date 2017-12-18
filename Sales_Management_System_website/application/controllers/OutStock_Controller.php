<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class OutStock_Controller extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('InStock_Model');
		$this->load->model('OutStock_Model');
		$this->load->model('CurrentStock_Model');
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
			$where=1;
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
		$this->load->view('Admin/out_stock',$data);
		
	}
	public function AddOutStock(){			
//ID		WarehouseID	ItemID		
		$WarehouseNot=$this->input->cookie('WarehouseID',true);
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		
		$DateOfSale=$this->input->post('date');
		$Warehouse=$this->input->post('warehouse');
		$Item=$this->input->post('item');
		$OrderID=$this->input->post('orderID');
		$BillID=$this->input->post('billID');
		$PackageQuantity=$this->input->post('quantity');
		$where="WarehouseID=$Warehouse and ItemID=$Item";
		$wherep="ID=$PackageID";
		$QuantityPackage=$this->InStock_Model->PackageQuantity($wherep);
		$Quantity=0.00;
		foreach($QuantityPackage as $row){
			$Quantity = $row["Quantity"];
		}
		$data = array(
					 'Date'=>$DateOfSale,
					 'WarehouseID'=>$Warehouse,
					 'ItemID'=>$Item,
					 'OrderID'=>$OrderID,
					  'BillID'=>$BillID,
					  'PackageQuantity'=>$PackageQuantity,
					 'Quantity'=>$Quantity,
					 'Remarks'=>'sold',
					 );
		$CurrentQuantity=$PackageQuantity*$Quantity;
		$datac="Quantity=Quantity-$CurrentQuantity";
		$availability=$this->InStock_Model->itemInstock($where);
		$quantity="";
		foreach($availability as $row){
			$quantity=$row["Quantity"];
		}
		if($quantity > 0){
			$this->OutStock_Model->AddOutStock($data);
			/*notification*/
		
		/*order item updated */
		$data_noti=array(
			'SourceUserID'=>$UserID,
			'SourceUserType'=>$UserType,
			'WarehouseID'=>$WarehouseNot,
			'Detail'=>"Out Stock at WarehouseID ".$WarehouseNot,
			'Type'=>6,
			'Date'=>date('Y-m-d'),
		);
		$this->Order_Model->addNotification($data_noti);
		/*notification*/
			$availability=$this->InStock_Model->updateCurrent_Stock($datac,$where);
			
		}
		
	}



	public function ShowOutStock()
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
				$result = $this->OutStock_Model->ShowOutStock($where);
				echo json_encode($result);
			}
	public function DeleteOutStock()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$wherestock="a.ID=$ID";
				$PackageQuantity=0.00;
				$Quantity=0.00;
				$ItemID=0;
				$WarehouseID=0;
				$result=$this->OutStock_Model->ShowOutStock($wherestock);
				foreach($result as $row){
					$PackageQuantity=$row["PackageQuantity"];
					$Quantity=$row["Quantity"];
					$ItemID=$row["ItemID"];
					$WarehouseID=$row["WarehouseID"];
				}
				$ActualQuantity=$PackageQuantity * $Quantity;
				$data="Quantity=Quantity + $ActualQuantity";
				$wherecurrent="ItemID=$ItemID and WarehouseID=$WarehouseID";
				//echo $data;
				$this->OutStock_Model->DeleteOutStock($where);
				$this->CurrentStock_Model->UpdateQuantity($data,$wherecurrent);
				
				redirect('OutStock_Controller');
			}
			
	

   }
   ?>