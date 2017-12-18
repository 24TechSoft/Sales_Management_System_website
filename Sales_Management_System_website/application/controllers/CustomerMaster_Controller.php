<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class CustomerMaster_Controller extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('CustomerMaster_Model');
		$this->load->model('Login_Model');
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
		$head['type']=$UserType;
		
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Admin/customer_master');
		
	}
	public function Addcustomermaster(){
		$FullName=$this->input->post('name');
		$PhoneNo=$this->input->post('phone');
		$Email=$this->input->post('email');
		$Address=$this->input->post('address');
		$PinCode=$this->input->post('pinCode');
		$Vat=$this->input->post('vat');
		$UserID=$this->input->post('userid');
		$Password=$this->input->post('password');
		$data = array(
					  'Name'=>$FullName,
					 'PhoneNo'=>$PhoneNo,
					 'Email'=>$Email,
					 'Address'=>$Address,
					 'PinCode'=>$PinCode,
					 'Vat'=>$Vat,
					 'UserID'=>$UserID,
					 'Password'=>md5($Password),
					);
		$this->CustomerMaster_Model->Addcustomermaster($data);
	}



	public function ShowCustomerMaster()
			{
				$where=1;
				$result = $this->CustomerMaster_Model->ShowCustomerMaster($where);
				echo json_encode($result);
			}
	public function DeleteCustomerMaster()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$this->CustomerMaster_Model->DeleteCustomerMaster($where);
				redirect('CustomerMaster_Controller');
			}
			
	public function vendorMaster(){
		$UserType=$this->input->cookie('UserType',true);
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
		$this->load->view('Admin/vendor_master');
	}
	
	public function Addvendormaster(){
		$FullName=$this->input->post('name');
		$PhoneNo=$this->input->post('phone');
		$Email=$this->input->post('email');
		$Address1=$this->input->post('address1');
		$Address2=$this->input->post('address2');
		$State=$this->input->post('state');
		$City=$this->input->post('city');
		$Landmark=$this->input->post('landmark');
		$PinCode=$this->input->post('pinCode');
		$Vat=$this->input->post('vat');
		$UserID=$this->input->post('userid');
		$Password=$this->input->post('password');
		$data = array(
					  'Name'=>$FullName,
					 'Phone'=>$PhoneNo,
					 'Email'=>$Email,
					 'Address1'=>$Address1,
					 'Address2'=>$Address2,
					 'State'=>$State,
					 'City'=>$City,
					 'Landmark'=>$Landmark,
					 'PinCode'=>$PinCode,
					 'Vat'=>$Vat,
					 'UserID'=>$UserID,
					 'Password'=>md5($Password),
					);
		$this->CustomerMaster_Model->Addvendormaster($data);
	}
	
	public function ShowvendorMaster()
			{
				$where=1;
				$result = $this->CustomerMaster_Model->ShowvendorMaster($where);
				echo json_encode($result);
			}
	public function DeleteVendorMaster()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$this->CustomerMaster_Model->DeleteVendorMaster($where);
				redirect('CustomerMaster_Controller/vendorMaster');
			}
	
	
   }
   ?>