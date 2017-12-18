<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class AddCart extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('CurrentStock_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Shopping_Model');
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
		$this->load->view('Main/shop_items',$data);
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
		////$where="IPAddress='$ipaddress'";
		//$result=$this->Shopping_Model->getprice($where);
		//echo json_encode($result);
		
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
		$this->load->view('Main/cart',$data);
	}
	
	public function updatecart(){
		$id=$this->uri->segment(3);
		$quantity=$this->uri->segment(4);
		//$OrderID = $this->input->cookie('OrderID',TRUE);
		$data="PackageQuantity=$quantity,TotalQuantity=PackageQuantity*QuantityValue,TotalPrice=PackagePrice*PackageQuantity";
		$where="ID=$id";
		/*$whereS="Status=1 and ID=$OrderID";
		$checkstatus=$this->Shopping_Model->Status($whereS);
		if(sizeof($checkstatus)==0){*/
		$result=$this->Shopping_Model->updatecart($data,$where);
	/*	}else{
			$result="order has been already placed";
		}*/
		echo json_encode($result);
	}
	
	public function removecart(){
		$id=$this->uri->segment(3);
		$where="ID=$id";
		$this->Shopping_Model->removecart($where);
		redirect('API_Controllers/AddCart/cart/');
	}
	
	
	

   }
   ?>