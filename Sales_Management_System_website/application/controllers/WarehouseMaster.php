<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class WarehouseMaster extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('WarehouseMaster_Model');
		$this->load->model('Login_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Order_Model');
		$this->load->helper('url');
   	}
	
	public function index(){
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		$whereuser="ID=$UserID and UserType=$UserType";
		$UserName="";
		$user=$this->Login_Model->selectuser($whereuser);
		foreach($user as $rowuser){
			$UserName=$rowuser["FullName"];
		}
		$head['UserName']=$UserName;
		$head["type"]=$UserType;
		
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Admin/warehouse-master');
		
	}
	public function AddWarehouse(){
		$Name=$this->input->post('name');
		$Code=$this->input->post('code');
		$Address=$this->input->post('address1');
		$Address1=$this->input->post('address2');
		$State=$this->input->post('state');
		$City=$this->input->post('city');
		$Landmark=$this->input->post('landmark');
		$PhoneNo=$this->input->post('phone');
		$EmailID=$this->input->post('email');
		$PinCode=$this->input->post('pinCode');
		//$GeoLocation=$this->input->post('geoLocation');
		$data = array(
					'Name'=>$Name,
					 'Code'=>$Code,
					 'Address'=>$Address, 
					 'Address1'=>$Address1,
					 'State'=>$State,
					 'City'=>$City,
					 'Landmark'=>$Landmark,
					 'PhoneNo'=>$PhoneNo,
					 'EmailID'=>$EmailID,
					 'PinCode'=>$PinCode,
					// 'GeoLocation'=>$GeoLocation
					);
		$this->WarehouseMaster_Model->AddWarehouse($data);
	}



	public function ShowWarehouse()
			{
				$where="1 order by ID desc";
				$result = $this->WarehouseMaster_Model->ShowWarehouse($where);
				echo json_encode($result);
			}
	public function DeleteWarehouse()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$this->WarehouseMaster_Model->DeleteWarehouse($where);
				redirect('WarehouseMaster');
			}
			
	public function warehouseCode(){
		$ID=$this->uri->segment(3);
		$where="ID=$ID";
		$result=$this->WarehouseMaster_Model->ShowWarehouse($where);
		echo json_encode($result);
	}
	
	/*itemrequest*/
	public function itemRequest(){
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		$WarehouseID=$this->input->cookie('WarehouseID',true);
		
		$whererequest="";
		if($UserType==2){
			
			$whererequest="a.FWarehouseID=$WarehouseID and Status!=0";
			$whererequest1="a.TWarehouseID=$WarehouseID and Status=0";
		}
		
		$whereuser="ID=$UserID and UserType=$UserType";
		$UserName="";
		$user=$this->Login_Model->selectuser($whereuser);
		
		foreach($user as $rowuser){
			$UserName=$rowuser["FullName"];
		}
		$head['UserName']=$UserName;
		$head['type']=$UserType;
		$this->load->view('Admin/admin_header',$head);
		
		$updatedata="Checked=1";
		$whereupdate="TWarehouseID=$WarehouseID and Status=0";
		$this->WarehouseMaster_Model->approveRequest($updatedata,$whereupdate);
		
		$whereupdate="FWarehouseID=$WarehouseID and Status!=0";
		$this->WarehouseMaster_Model->approveRequest($updatedata,$whereupdate);
		
		$Requests=$this->WarehouseMaster_Model->showItemRequest($whererequest,$whererequest1);
		$data["Requests"]=$Requests;
		$this->load->view('Admin/itemRequest',$data);
		
	}
	
	public function showallrequests(){
		$UserType=$this->input->cookie('UserType',true);
		$WarehouseID=$this->input->cookie('WarehouseID',true);
		$where="";
		$where1="";
		if($UserType==2){
			$where="FWarehouseID=$WarehouseID and Status!=0 and Checked=0";
			$where1="TWarehouseID=$WarehouseID and Status=0 and Checked=0";
			
		}
		$result=$this->WarehouseMaster_Model->showallrequests($where,$where1);
		echo json_encode($result);
	}
	public function approveRequest(){
		$ID=$this->uri->segment(3);
		$Quantity=$this->uri->segment(4);
		$WarehouseID=$this->uri->segment(5);
		$ItemID=$this->uri->segment(6);
		$where="ID=$ID";
		$data="Status=1, Checked=0";
		$this->WarehouseMaster_Model->approveRequest($data,$where);
		$updatedata="Quantity = Quantity + $Quantity";
		$whereqty="ItemID=$ItemID and WarehouseID=$WarehouseID";
		$this->InStock_Model->updateCurrent_Stock($updatedata,$whereqty);
		/*notification*/
		$WarehouseNot=$this->input->cookie('WarehouseID',true);
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		
		/*order item updated */
		$data_noti=array(
			'SourceUserID'=>$UserID,
			'SourceUserType'=>$UserType,
			'WarehouseID'=>$WarehouseID,
			'Detail'=>"Item approved by ".$WarehouseNot."to ".$WarehouseID,
			'Type'=>9,
			'Date'=>date('Y-m-d'),
		);
		//echo json_encode($data_noti);
		$this->Order_Model->addNotification($data_noti);
		/*notification*/
		redirect('InStock');
		
	}
	public function declineRequest(){
		$ID=$this->uri->segment(3);
		$WarehouseID=$this->uri->segment(4);
		$where="ID=$ID";
		$data="Status=2,Checked=0";
		
		$wheredata="FWarehouseID=$WarehouseID";
		$this->WarehouseMaster_Model->approveRequest($data,$where);
		/*notification*/
		$WarehouseNot=$this->input->cookie('WarehouseID',true);
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		
		/*order item updated */
		$data_noti=array(
			'SourceUserID'=>$UserID,
			'SourceUserType'=>$UserType,
			'WarehouseID'=>$WarehouseID,
			'Detail'=>"Item declined by ".$WarehouseNot."to ".$WarehouseID,
			'Type'=>9,
			'Date'=>date('Y-m-d'),
		);
		//echo json_encode($data_noti);
		$this->Order_Model->addNotification($data_noti);
		/*notification*/
		redirect('InStock');
		
	}

   }
   ?>