<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class Shopping extends  CI_Controller{

   	public function __construct(){
   		parent::__construct();
		$this->load->model('CurrentStock_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Shopping_Model');
		$this->load->model('Login_Model');
		$this->load->model('CustomerMaster_Model');
		$this->load->model('Order_Model');
		$this->load->helper('url');
		$this->load->helper('cookie');
		//$this->load->library('dompdf_gen');
   	}

	public function index(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		$data["RecentItems"]=$this->Shopping_Model->GetItems("1 order by a.ID desc limit 12");
		if(($customerID==0)||($customerID=="")||($customerID==null)){
			$data["Vendor"]="";
		}
		else{
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		}
		//echo json_encode($data["RecentItems"]);
		$data["Categories"]=$this->Shopping_Model->GetCategories(1);
		$this->load->view('Shop/home',$data);
	}
	/*product detail*/
	public function productdetails(){
		$customerID=$this->input->cookie('CustomerID',true);
		$ItemID=$this->uri->segment(3);
		$Items=$this->Shopping_Model->GetProducts("a.ID=$ItemID");
		$ItemID=0;
		for($i=0;$i<sizeOf($Items);$i++){
			$ItemID=$Items[$i]["ID"];
			$wherep="ItemID=$ItemID";
			$packages=$this->Shopping_Model->showPackages($wherep);
			$Items[$i]["Packages"]=$packages;
			
		}
		$data["Product"]=$Items;
		$data["Categories"]=$this->Shopping_Model->GetCategories(1);
		$data["CustomerID"]=$customerID;
		if(($customerID==0)||($customerID=="")||($customerID==null)){
			$data["Vendor"]="";
		}
		else{
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		}
		//echo json_encode($data["Product"]);
		$this->load->view('Shop/product_detail',$data);
	}
	/*products*/
	public function products(){
		$customerID=$this->input->cookie('CustomerID',true);
		
		$CategoryID=$this->uri->segment(3);
		if($CategoryID==0){
			$data["Products"]=$this->Shopping_Model->GetProducts("1 order by a.ID desc");
		}else{
			$data["Products"]=$this->Shopping_Model->GetProducts("a.CategoryID=$CategoryID order by a.ID desc");
		}
		$data["Categories"]=$this->Shopping_Model->GetCategories(1);
		//echo json_encode($data["Products"]);
		$data["CustomerID"]=$customerID;
		if(($customerID==0)||($customerID=="")||($customerID==null)){
			$data["Vendor"]="";
		}
		else{
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		}
		$this->load->view('Shop/products',$data);
	}
	/*add acart*/
	public function addcart(){
		$itemID=$this->uri->segment(3);
		$itemName="";
		$CustomerID=$this->input->cookie('CustomerID',true);
		$PackageID=$this->input->post('Packages',true);
		$quantity=$this->input->post('qty',true);
		$wherePack="ID=$PackageID";
		$Package=$this->Shopping_Model->showPackages($wherePack);
		$Item=$this->Shopping_Model->GetProducts("a.ID=$itemID");
		foreach($Item as $it){
			$itemName=$it["Name"];
		}
		$PackageName="";
		$Price=0.00;
		$PQuantity=0.00;
		foreach($Package as $row){
			$PackageName=$row["PackageName"];
			$Price=$row["ProductPrice"];
			$PQuantity=$row["ProductQuantity"];
		}
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
			$this->Shopping_Model->updateShopCart($updateData,$where);
		}
		else{
		$this->Shopping_Model->addcart($data);
		}
	}
	
	/*cart*/
	public function cartcount(){
		$customerID=$this->input->cookie('CustomerID',true);
		if(getenv('REMOTE_ADDR'))
		$ipaddress = getenv('REMOTE_ADDR');
		if(($customerID!="")||($customerID!=0)||($customerID!=null)){
			$where="a.CustomerID=$customerID and a.IPAddress='$ipaddress'";
		}else{
			$where="a.IPAddress='$ipaddress'";
		}
		$result=$this->Shopping_Model->cartCount($where);
		echo json_encode($result);

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
		if(($customerID==0)||($customerID=="")||($customerID==null)){
			$data["Vendor"]="";
		}
		else{
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		}
		$items=$this->Shopping_Model->GetOrderItems($where);
		/*$orderprice=$this->Shopping_Model->GetPrice($wheres);
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
		$data["GrandTotal"]=$GrandTotal;*/
		$data["Ordered_Items"]=$items;
		//echo json_encode($data["Ordered_Items"]);
		$this->load->view('Shop/cart',$data);
	}
	public function removecart(){
		$id=$this->uri->segment(3);
		$this->Shopping_Model->removecart("ID=$id");
		redirect('Shopping/cart');

	}
	
	public function updatecart(){
		$id=$this->uri->segment(3);
		$quantity=$this->uri->segment(4);
		//$OrderID = $this->input->cookie('OrderID',TRUE);
		$data="PackageQuantity=$quantity,TotalQuantity=PackageQuantity*QuantityValue,TotalPrice=PackagePrice*PackageQuantity";
		$where="ID=$id";
		$this->Shopping_Model->updatecart($data,$where);
	}
	
	
	public function tracking(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		$OrderID=$this->uri->segment(3);
		//$wherec="a.OrderID=$OrderID order by a.ID desc";
		$data["Consignment"]=$this->Shopping_Model->ConsignmentNo("a.OrderID=$OrderID order by a.ID desc limit 1");
		$data["ConsignmentDetail"]=$this->Shopping_Model->ConsignmentNo("a.OrderID=$OrderID order by a.ID desc");
		//echo json_encode($data["ConsignmentDetail"]);
		//$data['Consignment']=$this->Shopping_Model->trackorder($where);
		//$this->load->view('Main/trackorder',$data);
		$this->load->view('Shop/tracking',$data);
	}
	
	public function changepassword(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		$this->load->view('Shop/changepassword',$data);
	}
	
	public function profile(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		$this->load->view('Shop/profile',$data);
	}
	
	public function search(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		if(($customerID==0)||($customerID=="")||($customerID==null)){
			$data["Vendor"]="";
		}
		else{
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		}
		$search=$this->input->post('search',true);
		$where="a.Name like '%$search%' order by a.ID desc";
		$data["Products"]=$this->Shopping_Model->GetProducts($where);
		$data["Categories"]=$this->Shopping_Model->GetCategories(1);
		//echo json_encode($data["Products"]);
		$this->load->view('Shop/search',$data);
	}
	
	public function updatevendor(){
		$ID=$this->uri->segment(3);
		$Phone=$this->input->post('phone',true);
		$Email=$this->input->post('email',true);
		$Vat=$this->input->post('vat',true);
		$Address1=$this->input->post('addr1',true);
		$Address2=$this->input->post('addr2',true);
		$State=$this->input->post('state',true);
		$City=$this->input->post('city',true);
		$PinCode=$this->input->post('pincode',true);
		$Landmark=$this->input->post('landmark',true);
		$data="Phone='$Phone',Email='$Email',Vat='$Vat',Address1='$Address1',Address2='$Address2',State='$State',City='$City',PinCode='$PinCode'";
		$this->Login_Model->setPassword($data,"ID=$ID");
		echo "<script type='text/javascript'>alert('Profile Updated'); location.href='".base_url()."Shopping/profile';</script>";
	}
	
	public function signup(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		$this->load->view('Shop/signup',$data);
	}
	
	public function addvendor(){
		$Name=$this->input->post('name',true);
		$Email=$this->input->post('email',true);
		$Phone=$this->input->post('phone',true);
		$UserID=$this->input->post('username',true);
		$Password=md5($this->input->post('password',true));
		$checkuser=$this->Login_Model->checkuser("Email='$Email' and Phone='$Phone' and UserID='$UserID'");
		$data=array(
			'Name'=>$Name,
			'Email'=>$Email,
			'Phone'=>$Phone,
			'UserID'=>$UserID,
			'Password'=>$Password,
		);
		if(sizeOf($checkuser)==0){
			$this->CustomerMaster_Model->Addvendormaster($data);
			$checkuser=$this->Login_Model->checkuser("Email='$Email' and Phone='$Phone' and UserID='$UserID'");
			$Name="";
			$Phone="";
			foreach($checkuser as $row){
				$this->input->set_cookie('CustomerID',$row["ID"],43200);
				$this->input->set_cookie('username',$row["UserID"],43200);
				$ID=$row["ID"];
				$Name=$row["Name"];
				$Phone=$row["Phone"];
				$ipaddress = '';
				if(getenv('REMOTE_ADDR'))
				$ipaddress = getenv('REMOTE_ADDR');
				$data=array(
					'CustomerID'=>$ID,
					'IpAddress'=>$ipaddress,
					'Status'=>1,
				);
				$this->Login_Model->addLogin($data);
				$updatedata="CustomerID=$ID";
				$where="IpAddress='$ipaddress'";
				$this->Login_Model->updateShopCart($updatedata,$where);
			}
			$url="http://book.24techsoft.com/api/sendmsg.php?user=abadagro&pass=abad123&sender=ADAD01&phone=".$Phone."&text=".str_replace(' ','%20','Dear '.$Name.', your account at ABADAGRO has been successfully created. Enjoy Shopping!')."&priority=ndnd&stype=normal";
			if(!($response  = file_get_contents($url)))
			{
				//echo "<script type='text/javascript'>alert ('Error');</script>";
				//header("location:Index.php?Error=1");
			}
			else
			{
				//echo "<script type='text/javascript'>alert ('Success');</script>";
			}
			
			redirect('Shopping');
		}else{
			echo "<script type='text/javascript'>alert('Email or phone or username already exists');location.href='".base_url()."Shopping/signup';</script>";
		}
	}
	
	public function forgotpass(){
		$customerID=$this->input->cookie('CustomerID',true);
		$data["CustomerID"]=$customerID;
		if(($customerID==0)||($customerID=="")||($customerID==null)){
			$data["Vendor"]="";
		}
		else{
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$customerID");
		}
		$this->load->view('Shop/forgotpass',$data);
	}
	
	public function invoice(){
		$VendorID=$this->input->cookie('CustomerID',true);
		$data["Vendor"]=$this->Login_Model->checkuser("ID=$VendorID");
		$OrderID=$this->uri->segment(3);
		$Bill=$this->Order_Model->ShowBill("a.OrderID=$OrderID");
		$BillID=0;
		
		if(sizeOf($Bill)>0){
			foreach($Bill as $bill){
				$BillID=$bill["ID"];
			}
			
		}
		$data["Bill"]=$Bill;
		$Item=$this->Order_Model->ShowBillItem("BillID=$BillID");
		$TotalAmount=0.00;
		foreach($Item as $row){
			$TotalAmount=$row["TotalPrice"];
		}
		$data["AmountText"]=$this->Shopping_Model->amounttext($TotalAmount);
		$data["Item"]=$Item;
		$data["TotalAmount"]=$TotalAmount;
		$this->load->view('Shop/invoice',$data);
		$html = $this->output->get_output();
		// Load library
		$this->load->library('dompdf_gen');
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Invoice.pdf");
	}
	
	/*public function DownloadPDF()

	{
		$Date=$this->input->get("Date",true);
		$data["Images"]=$this->Test_Model->GetImages("PaperDate='".$Date."'");
		$this->load->view("PDF",$data);
		$html = $this->output->get_output();
		// Load library
		$this->load->library('dompdf_gen');
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Epaper.pdf");

	}*/
	
	
   
}
   ?>