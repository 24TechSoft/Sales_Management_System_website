<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class Customers extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('CustomerMaster_Model');
		$this->load->model('Login_Model');
		$this->load->model('Order_Model');
		$this->load->helper('url');
		$this->load->helper('cookie');
   	}
	
	public function index(){
		$this->load->view('shop_items');
	}
	
	
	public function login(){
		$name=$this->input->get("Name");
		$password=md5($this->input->get("Password"));
		$where="userID='$name' and password='$password'";
		$checkuser=$this->Login_Model->checkuser($where);
		if(sizeof($checkuser)==0){
			echo json_encode(1);
			//echo json_encode("you need to sign up to login");
		}
		else{
			foreach($checkuser as $row){
				$userID=$row["ID"];
				$username=$row["UserID"];
				$this->input->set_cookie('CustomerID',$userID,43200);
				$this->input->set_cookie('username',$username,43200);
				$ipaddress = '';
				if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
				$data=array(
					'CustomerID'=>$userID,
					'IpAddress'=>$ipaddress,
					'Status'=>1,
				);
				$this->Login_Model->addLogin($data);
			}
				echo json_encode("you can proceed");
			}
		}
	
	public function logout(){
		$CustomerID=$this->input->cookie('CustomerID',true);
		$ipaddress = '';
		if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
		$where="CustomerID=$CustomerID and IpAddress='$ipaddress'";
		$this->Login_Model->deletelogin($where);
		delete_cookie('CustomerID');
		delete_cookie('username');
		
		redirect('/Shopping_Controller');
	}
	public function signup(){
		$data["CustomerID"]=0;
		$this->load->view('Main/signup',$data);
	}
	public function addcustomer(){
		$Name=$this->input->get('name');
		$Email=$this->input->get('email');
		$Phone=$this->input->get('phone');
		$Address=$this->input->get('address');
		$data=array(
			'Name'=>$Name,
			'Email'=>$Address,
			'PhoneNo'=>$Phone,
			'Address'=>$Address,
			'UserID'=>$Address,
		);
		$this->CustomerMaster_Model->Addcustomermaster($data);
		echo json_encode("Your password is sent to your mail");
	}
	//load orders by customer
	public function orders(){
		$CustomerID=$this->input->cookie('CustomerID',true);
		$where="a.CusrtomerID=$CustomerID";
		$result=$this->Order_Model->ShowOrder($where);
		echo json_encode($result);
	}
	//load orderitems by orders
	public function orderitems(){
		$OrderID=$this->input->get('orderID',true);
		$where="OrderID=$OrderID";
		$result=$this->Order_Model->SelectItem($where);
		echo json_encode($result);
	}
	
   }
   ?>