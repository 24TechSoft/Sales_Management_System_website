<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class Cart_Controller extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('Order_Model');
		$this->load->model('CustomerMaster_Model');
		$this->load->model('Shopping_Model');
		$this->load->model('Vendor_Model');
		$this->load->helper('url');
		$this->load->helper('cookie');
   	}
	
	public function index(){
	$customerID=$this->input->cookie('CustomerID',true);
	$where="ID=$customerID";
	$whereC="CustomerID=$customerID";
	$address=$this->CustomerMaster_Model->ShowAddress($whereC);
	$data["Place"]=$address;
	$data["Customer"]=$this->CustomerMaster_Model->ShowCustomerMaster($where);
	$data["CustomerID"]=$customerID;
		$this->load->view('Main/checkout',$data);
	}
	
	public function vendorcheckout(){
	$customerID=$this->input->cookie('CustomerID',true);
	$where="ID=$customerID";
	
	$address=$this->Vendor_Model->ShowVendor($where);
	$data["Place"]=$address;
	
	$data["CustomerID"]=$customerID;
	$this->load->view('Main/vendorcheckout',$data);
	}
	
	public function DeliveryAddress(){
		$Name=$this->input->post('Name');
		$Email=$this->input->post('email');
		$Phone=$this->input->post('phone');
		$Locality=$this->input->post('locality');
		$Address=$this->input->post('address');
		$Village=$this->input->post('village');
		$State=$this->input->post('state');
		$PinCode=$this->input->post('Pin');
		$Landmark=$this->input->post('landmark');
		$OrderID=$this->input->post('orderid');
		$data=array(
			'CustomerID'=>2,
			'OrderID'=>$OrderID,
			'Name'=>$Name,
			'Email'=>$Email,
			'Phone'=>$Phone,
			'Address'=>$Address,
			'Locality'=>$Locality,
			'Village'=>$Village,
			'State'=>$State,
			'PinCode'=>$PinCode,
			'Landmark'=>$Landmark,
		);
		$whereOrder="ID=$OrderID";
		$result=$this->Order_Model->ShowOrders($whereOrder);
		if(sizeof($result)==0){
		$this->Shopping_Model->DeliveryAddress($data);
		$data1="Status=1";
		$where="CustomerID=2 and ID=$OrderID";
		$this->Order_Model->UpdateOrder($data1,$where);
		}
		
	
	}
	public function address(){
		$customerID=$this->input->cookie('CustomerID',true);
		$id=$this->uri->segment(3);
		$where="a.ID=$id and a.CustomerID=$customerID";
		
		$address=$this->CustomerMaster_Model->ShowNameAddress($where);
		echo json_encode($address);
	}
	
	/*order detail */
	public function orderdetail(){
		$customerID=$this->input->cookie('CustomerID',true);
		$ordercode=$this->uri->segment(3);
		$orderID=$this->uri->segment(4);
		if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
		$where="CustomerID=$customerID and IPAddress='$ipaddress' and OrderCode='$ordercode' order by ID desc limit 1";
		$wheres="a.CustomerID=$customerID and a.IPAddress='$ipaddress' and a.OrderCode='$ordercode'";
		$whereorder="a.OrderID='$orderID'";
		$data["CustomerID"]=$customerID;
		$data["OrderDetail"]=$this->Order_Model->order_details($where);
		$data["OrderItems"]=$this->Order_Model->orderitemDetail($whereorder);
		$this->load->view('Main/order_detail',$data);
	}
	
	/*track order */
	public function trackorder(){
		$customerID=$this->input->cookie('CustomerID',true);
		$OrderID=$this->uri->segment(3);
		$data["CustomerID"]=$customerID;
		$wherec="a.OrderID=$OrderID";
		$data["Consignment"]=$this->Shopping_Model->ConsignmentNo($wherec);
		$data["ConsignmentDetail"]=$this->Shopping_Model->ConsignmentDetail($wherec);
		//$data['Consignment']=$this->Shopping_Model->trackorder($where);
		$this->load->view('Main/trackorder',$data);
	}
	
	



   }
   ?>