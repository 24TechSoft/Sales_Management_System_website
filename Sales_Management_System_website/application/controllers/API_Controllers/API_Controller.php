<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class API_Controller extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('ItemMaster_Model');
		$this->load->model('Login_Model');
		$this->load->model('Shopping_Model');
		$this->load->model('CustomerMaster_Model');
		$this->load->model('Order_Model');
		$this->load->model('Consignment_Model');
		$this->load->helper('url');
		$this->load->helper('cookie');
   	}
	
	public function index(){
		$customerID=$this->input->cookie('CustomerID',true);
		if($customerID=="")
		{
			$customerID=0;
		}
		$data["CustomerID"]=$customerID;
		$where="1";
		$data["Items"]=$this->Shopping_Model->GetItems($where);
		$this->load->view('Main/shop_items',$data);/*change the view */
	}
	
	public function addcart(){
		$itemID=$this->uri->segment(3);
		$itemName=$this->uri->segment(4);
		//$packages=$this->uri->segment(5);
		$quantity=$this->input->get('PackageQuantity');
		$packages=$this->input->get('Packages');
		echo "<script type='text/javascript'>alert('".$packages."');</script>'";
		$x=json_decode($packages);
		$PackageID=$x->{"PackageID"};
		$PackageName=$x->{"PackageName"};
		$Price=$x->{"Price"};
		$PQuantity=$x->{"PackageQuantity"};
		$TotalQuantity=$PQuantity * $quantity;
		$totalPrice=$Price * $quantity;
		
		$ipaddress = '';
        if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
		$data= array(
			'ItemID'=>$itemID,
			'ItemName'=>$itemName,
			'PackageQuantity'=>$quantity,
			'QuantityValue'=>$PQuantity,
			'PackagePrice'=>$Price,
			'TotalPrice'=>$totalPrice,
			'IPAddress'=>$ipaddress,
			'PackageID'=>$PackageID,
			'PackageName'=>$PackageName,
			'TotalQuantity'=>$TotalQuantity,
			'DateOfOrder'=>date('Y-m-d'),
		);
		$this->Shopping_Model->addcart($data);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode("Added succesfully");
		}else{
			echo $callback ."(".json_encode("Added succesfully") .")";
		}
	}
	
	
	public function cart(){
		$customerID=$this->input->cookie('CustomerID',true);
		if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
		
		if($customerID=="")
		{
			$customerID=0;
			$where="IPAddress='$ipaddress'";
		}
		else{
			$where="CustomerID=$customerID";
		}
		$data["CustomerID"]=$customerID;
		
		$items=$this->Shopping_Model->GetOrderItems($where);
		
		$orderprice=$this->Shopping_Model->GetPrice($where);
		$totprice=0;
		foreach($orderprice as $row){
			$totprice=$row["Price"];
		}
		$data["OrderPrice"]=$totprice;
		if($totprice >= 500){
			$charge=0;
		}
		else{
			$charge=50;
		}
		$data["Delivery"]=$charge;
		$data["GrandTotal"]=$totprice+$charge;
		$data["Ordered_Items"]=$items;
		$this->load->view('Main/cart',$data);/* change the view */
	}
	
	public function updatecart(){
		$id=$this->uri->segment(3);
		$quantity=$this->uri->segment(4);
		$data="PackageQuantity=$quantity,TotalQuantity=PackageQuantity*QuantityValue,TotalPrice=PackagePrice*PackageQuantity";
		$where="ID=$id";
		$result=$this->Shopping_Model->updatecart($data,$where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
		
	}
	
	public function removecart(){
		$id=$this->uri->segment(3);
		$where="ID=$id";
		$this->Shopping_Model->removecart($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode("Removed succesfully");
		}else{
			echo $callback ."(".json_encode("Removed succesfully") .")";
		}
	}
	//Customers
	public function login(){
		$name=$this->input->get("Name");
		$password=md5($this->input->get("Password"));
		$where="userID='$name' and password='$password'";
		$checkuser=$this->Login_Model->checkuser($where);
		if(sizeof($checkuser)==0){
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode("Sorry you need to sign up");
		}else{
			echo $callback ."(".json_encode("Sorry you need to sign up") .")";
		}
			
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
				$callback = $this->input->get("callback",true);
				if($callback==""){
				echo json_encode("You can Proceed");
				}else{
					echo $callback ."(".json_encode("You can Proceed") .")";
				}
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
		
		redirect('/API_Controller');/*Change the redirect address */
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
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode("Your password is sent to your mail");
		}else{
			echo $callback ."(".json_encode("Your password is sent to your mail") .")";
		}
		
	}
	//load orders by customer
	public function orders(){
		$CustomerID=$this->input->cookie('CustomerID',true);
		$where="a.CusrtomerID=$CustomerID";
		$result=$this->Order_Model->ShowOrder($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	//load orderitems by orders
	public function orderitems(){
		$OrderID=$this->input->get('orderID',true);
		$where="OrderID=$OrderID";
		$result=$this->Order_Model->SelectItem($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	/* Customer end */
	
	
	/*Displays */
	//display Categories
	
	public function displayitemCategories(){
		$where=1;
		$result=$this->ItemMaster_Model->displayitemCategories($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	//displayProducts
	public function displayMenu(){
		$where=1;
		$result=$this->ItemMaster_Model->ShowItemMaster($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	//display Menu by categories
	public function menuByCategory(){
		$category=$this->input->get('category');
		$where="CategoryID=$category";
		$result=$this->ItemMaster_Model->menuByCategory($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	/* end display */
	/* menu search */
	
	public function item_search(){
		$ItemName=$this->input->post('itemname',true);
		$Category=$this->input->post('category',true);
		$itemwhere="";
		$categorywhere="";
		$where="";
		if($ItemName!=""){
			$itemwhere="a.Name like "%.$ItemName.%"";
		}
			
		if($Category!=""){
			$categorywhere="c.Category like"%.$Category.%" ";
		}
		if($itemwhere!="")
			{
				if($where!="")
				{
					$where=$where." and ";
				}
				$where=$where.$itemwhere;
			}
		if($categorywhere!="")
			{
				if($where!="")
				{
					$where=$where." and ";
				}
				$where=$where.$categorywhere;
			}
		if($where=="")
		{
			$where="1";
		}
		$result=$this->Shopping_Model->SearchItems($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	
	/*consignment */
	//available statuses
	public function AvailableStatus(){
		$where=1;
		$result=$this->Consignment_Model->ShowConStatus($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	
	//assigned consignments
	public function AssignedConsignments(){
		$where=1;
		$result=$this->Consignment_Model->ShowConsignment($where);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode($result);
		}else{
			echo $callback ."(".json_encode($result) .")";
		}
	}
	
	//addtracking detail
	public function AddTracking(){
		$ConsignmnetNo=$this->input->post('consignment_no');
		$Deliveryboy=$this->input->post('deliveryboy');
		$Status=$this->input->post('Status');
		$Remarks=$this->input->post('remarks');
		$data=array(
			'ConsignmentNo'=>$ConsignmnetNo,
			'AssignedDeliveryboy'=>$Deliveryboy,
			'Status'=>$Status,
			'Remarks'=>$Remarks,
			'Photo'=>"",
			'Signature'=>"",
		);
		$this->Consignment_Model->AddTracking($data);
		$callback = $this->input->get("callback",true);
		if($callback==""){
		echo json_encode("Tracking Status added");
		}else{
			echo $callback ."(".json_encode("Tracking Status added") .")";
		}
	}
	/*Consignment */
	

   }
   ?>