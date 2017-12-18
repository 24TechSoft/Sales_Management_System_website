<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class Shopping_Controller extends  CI_Controller{

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
		$data["CustomerID"]=$customerID;
		$where=1;
		$data["Items"]=$this->Shopping_Model->GetItems($where);
		$data["Categories"]=$this->Shopping_Model->GetCategories();
		$this->load->view('Main/shop_items',$data);
	}

	

	public function addcart(){

		$itemID=$this->uri->segment(3);

		$itemName=$this->uri->segment(4);

		$CustomerID=$this->input->cookie('CustomerID',true);

		//$packages=$this->uri->segment(5);

		$quantity=$this->input->post('PackageQuantity');

		$packages=$this->input->post('Packages');

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

			'CustomerID'=>$CustomerID,

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

		$where="ItemID=$itemID and PackageName='$PackageName' and IPAddress='$ipaddress'";

		$result=$this->Shopping_Model->cartcount($where);

		if(sizeof($result)>0){

			$updateData="PackageQuantity=PackageQuantity+$quantity,TotalQuantity=QuantityValue*PackageQuantity,TotalPrice=PackageQuantity*PackagePrice";

			//echo ($updateData);

			$this->Shopping_Model->updateShopCart($updateData,$where);

		}

		else{

		$this->Shopping_Model->addcart($data);

		}

		echo json_encode($PackageName);

		

	}

	

	

	public function cart(){

		$customerID=$this->input->cookie('CustomerID',true);

		if(getenv('REMOTE_ADDR'))

		$ipaddress = getenv('REMOTE_ADDR');
		if(($customerID!=0)||($customerID!="")||($customerID!=null)){
			$where="a.CustomerID=$customerID and a.IPAddress='$ipaddress'";
			$wheres="CustomerID=$customerID and IPAddress='$ipaddress'";
		}else{
		$where="a.IPAddress='$ipaddress'";
		$wheres="IPAddress='$ipaddress'";
		}
		$data["CustomerID"]=$customerID;
		$items=$this->Shopping_Model->GetOrderItems($where);
		$orderprice=$this->Shopping_Model->GetPrice($wheres);
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

		$GrandTotal=$totprice+$charge;

		//$tax=($totprice*(15.5/100));

		//$data['TaxAmount']=$tax;

		//$data["GrandTotal"]=$GrandTotal+$tax;

		$data["GrandTotal"]=$GrandTotal;

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

		redirect('shopping_controller/cart/');

	}

	public function about(){

		$this->load->view('Main/about-us');

	}

	

	/* load category */

	public function loadcat(){

		$CatID=$this->uri->segment(3);

		$ID=$this->input->post('category'.$CatID);

		$customerID=$this->input->cookie('CustomerID',true);

		if($customerID=="")

		{

			$customerID=0;

		}

		$data["CustomerID"]=$customerID;

		$where="c.ID=$ID";

		$Items=$this->Shopping_Model->LoadCatItems($where);

		$data["Items"]=$Items;

		$data["Categories"]=$this->Shopping_Model->GetCategories();

		$this->load->view('Main/shop_items',$data);

	}

	

	

	/*cart_count*/

	function cartcount(){

		$customerID=$this->input->cookie('CustomerID',true);

		if(getenv('REMOTE_ADDR'))

		$ipaddress = getenv('REMOTE_ADDR');
		if(($customerID!="")||($customerID!=0)||($customerID!=null)){
			$where="CustomerID=$customerID and IPAddress='$ipaddress'";
		}else{
			$where="IPAddress='$ipaddress'";
		}
		$result=$this->Shopping_Model->cartCount($where);

		echo json_encode($result);

		}



   }

   ?>