<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class OrderMaster_Controller extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();

		$this->load->model('InStock_Model');

		$this->load->model('Order_Model');

		$this->load->model('OutStock_Model');

		$this->load->model('CustomerMaster_Model');

		$this->load->model('Shopping_Model');

		$this->load->model('Login_Model');

		$this->load->model('Consignment_Model');

		$this->load->helper('cookie');

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
		$whereOrderID="";
		$ID=$this->uri->segment(3);
		$Warehouse=$this->uri->segment(4);
		$whereAddress="";
		if(($ID!="")||($ID!=0)||($ID!=null)){
			$whereID="a.ID=$ID";
			$whereOrderID="a.OrderID=$ID and b.AssignedWarehouse=$Warehouse and a.Status=0";
			$whereorderitem="a.OrderID=$ID and b.AssignedWarehouse=$Warehouse";
		} else{
			$whereID=0;
			$whereOrderID=0;
			$whereorderitem=0;
		}
		$Orders=$this->Order_Model->ShowOrder($whereID);
		$data["Orders"]=$Orders;
		$delID=0;
		$CustomerID=0;
		foreach($Orders as $address){
			$delID=$address["CusAddID"];
			$CustomerID=$address["CustomerID"];
		}
		$whereAddress="a.ID=$delID";
		$data["DeliveryAddress"]=$this->Order_Model->showDeliveryAddress($whereAddress);
		/*$wherevendor="";
		if($CustomerID==0){
			$wherevendor=1;
		}else{*/
			$whereVendor="ID=$CustomerID";
		/*}*/
		$data["VAddress"]=$this->CustomerMaster_Model->ShowvendorMaster($whereVendor);
		/*$Available="";
		$itemavailable=$this->Order_Model->ItemAvailable($whereID);
		foreach($itemavailable as $row){
			if(($row["PackageQuantity"])>($row["Quantity"])){
				$Available="Notavailable";
			}
			else{
				$Available="";
			}
		}
		$data["Availability"]=$Available;*/
		//$data["Statuses"]=$this->Order_Model->SelectStatus();

		$data["type"]=$UserType;
		$data["warehouse"]=$this->InStock_Model->SelectWarehouses($where);
		$item=$this->Order_Model->SelectOrderItems($whereOrderID);
		$itemsize=$this->Order_Model->SelectOrderItems($whereorderitem);
		$data["item"]=$item;
		$data["ItemNo"]=sizeof($itemsize);
		$head['type']=$UserType;
		$UserID=$this->input->cookie('UserID',true);
		$whereuser="ID=$UserID and UserType=$UserType";
		$UserName="";
		$user=$this->Login_Model->selectuser($whereuser);
		foreach($user as $rowuser){
			$UserName=$rowuser["FullName"];
		}
		$head['UserName']=$UserName;
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Admin/order_item',$data);
	}

	

	

	

	public function AddOrder(){	

		$OrderDate=$this->input->post('orderdate');

		$CustomerID=$this->input->post('customerID');

		$OrderCode=$this->input->post('ordercode');

		$TotalOrderValue=$this->input->post('ordervalue');

		$TaxDescription=$this->input->post('description');

		$TaxAmount=$this->input->post('taxAmount');

		$DiscountAmount=$this->input->post('disAmount');

		$GrandTotal=$this->input->post('grandAmount');

		$AmountInText=$this->input->post('AmountText');

		$AssignedWarehouse=$this->input->post('warehouse');

		$Status=$this->input->post('status');

		$PaymentStatus=$this->input->post('paymentstatus');

		 $ipaddress = '';

        if(getenv('REMOTE_ADDR'))

        $ipaddress = getenv('REMOTE_ADDR');

		$data = array(

					 'OrderDate'=>$OrderDate,

					 'CustomerID'=>$CustomerID,

					 'OrderCode'=>$OrderCode,

					 'TotalOrderValue'=>$TotalOrderValue,

					 'TaxDescription'=>$TaxDescription,

					 'DeliveryCharge'=>$TaxAmount,

					 'TaxAmount'=>15.5,

					 'DiscountAmount'=>$DiscountAmount,

					 'GrandTotal'=>$GrandTotal,

					 'AmountInText'=>$AmountInText,

					 'AssignedWarehouse'=>$AssignedWarehouse,

					 'Status'=>$Status,

					 'PaymentStatus'=>$PaymentStatus,

					 'IPAddress'=>$ipaddress

					 );

		$this->Order_Model->AddOrder($data);

	}



	public function UpdateOrder(){	

		$ID=$this->uri->segment(3);
		
		$BillAmount=$this->uri->segment(4);

		$OrderDate=$this->input->post('orderdate');

		$CustomerID=$this->input->post('customerID');
		
		$CusAddID=$this->input->post('cusAddId');

		$OrderCode=$this->input->post('ordercode');

		$TotalOrderValue=$this->input->post('ordervalue');

		$TaxDescription=$this->input->post('description');

		$TaxAmount=$this->input->post('taxAmount');

		$DeliveryCharge=$this->input->post('delivery');

		$DiscountAmount=$this->input->post('disAmount');

		$GrandTotal=$this->input->post('grandAmount');

		$AmountInText=$this->input->post('AmountText');

		$AssignedWarehouse=$this->input->post('warehouse');

		$Status=$this->input->post('status');

		$PaymentStatus=$this->input->post('paymentstatus');

		$where="ID=$ID";

		$data="AssignedWarehouse=$AssignedWarehouse, Status=$Status, PaymentStatus=$PaymentStatus";

		$this->Order_Model->UpdateOrders($data,$where);
		
		
		/*bill */
		
		 $ipaddress = '';

        if(getenv('REMOTE_ADDR'))

        $ipaddress = getenv('REMOTE_ADDR');

		$billdata=array(

			'BillDate'=>date('y-m-d'),

			'OrderID'=>$ID, 

			'CustomerID'=>$CustomerID, 
			
			'CusAddID'=>$CusAddID,

			'TotalOrderValue'=>$TotalOrderValue,  

			'TaxDescription'=>$TaxDescription, 

			'TaxAmount'=>$TaxAmount, 

			'DeliveryCharge'=>$DeliveryCharge,  

			'DiscountAmount'=>$DiscountAmount, 

			'GrandTotal'=>$BillAmount, 

			'AmountInText '=>$AmountInText, 

			'Warehouse '=>$AssignedWarehouse, 

			'IPAddress'=>$ipaddress, 

			

		);
		
		if($Status==1){ 

			$this->Order_Model->AddBill($billdata);

		}


		/*notification*/

		$where_order="ID=$ID";

		$Order_Code="";

		$Ordercode=$this->Order_Model->SelectOrderCode($where_order);

		foreach($Ordercode as $row_order){

			$Order_Code=$row_order["OrderCode"];

		}

		$Warehouse=$this->input->cookie('WarehouseID',true);

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		$data_noti=array(

			'SourceUserID'=>$UserID,

			'SourceUserType'=>$UserType,

			'WarehouseID'=>$Warehouse,

			'Detail'=>"Order status has been updated for Order Code: ".$Order_Code,

			'Type'=>3,

			'Date'=>date('Y-m-d'),

		);

		$this->Order_Model->addNotification($data_noti);


	}



	public function ShowOrder()

			{

				$UserType=$this->input->cookie('UserType',true);

				$WarehouseID=$this->input->cookie("WarehouseID",true);

				if($UserType==1){

					$where=1;

				}

				else if($UserType==2){

					$where="a.AssignedWarehouse=$WarehouseID";

				}

				else if($UserType==3){

					$where=1;

				}

				$orders = $this->Order_Model->ShowOrder($where);

				$OrderID=0;

				$whereorder="";

				$whereitem="";

				$whereqty="";

				$itemID=0;

				$PackageQuantity=0.00;

				$AvailableQty=0;

				for($i=0;$i<sizeof($orders);$i++){

					$OrderID=$orders[$i]["ID"];

					$Warehouse=$orders[$i]["AssignedWarehouse"];

					$AvailableQty=$orders[$i]["AvailableQty"];

					$whereorder="OrderID=$OrderID";

					$items=$this->Order_Model->SelectItem($whereorder);

					$current_quantity=0;

					foreach($items as $row){

						$itemID=$row["ItemID"];

						$PackageQuantity=$row["PackageQuantity"];

						$whereqty="ItemID=$itemID and WarehouseID=$Warehouse";

						$qty=$this->Order_Model->Quantity($whereqty);

						foreach($qty as $quant){

							$current_quantity=intval($quant["Quantity"]);

						}

						if($current_quantity < $PackageQuantity){

							$AvailableQty=0;

							break;

						 

						}

					}

					$orders[$i]["AvailableQty"]=$AvailableQty;

				}

				echo json_encode($orders);

			}

	public function DeleteOrder()

			{

				$ID=$this->uri->segment(3);

				$where="ID=$ID";

				$this->Order_Model->DeleteOrder($where);

				redirect('OrderMaster_Controller');

			}

			

	public function UpdateOrderItem(){

		$ID=$this->uri->segment(3);

		$quantity=$this->uri->segment(4);

		//$quantity=$this->input->post('PackageQuantity');

		//echo $quantity;

		$data="TotalQuantity=(TotalQuantity/PackageQuantity)* $quantity,PackageQuantity = $quantity, TotalPrice= PackagePrice * $quantity";

		$where="ID=$ID";

		$this->Order_Model->UpdateOrderItem($data,$where);

		$result=$this->Order_Model->SelectItem($where);

		echo json_encode($result);

	}

	

	public function DeleteItemOrder(){

		$ID=$this->uri->segment(3);

		$where="OrderID=$ID";

		$this->Order_Model->DeleteItemOrder($where);

	}

	

	public function addaddress(){

		$customerID=$this->input->cookie('CustomerID',true);

		$newaddress=$this->uri->segment(3);
		
		$addCusID=$this->uri->segment(4);

		$Address=$this->input->post('address');

		$Locality=$this->input->post('locality');

		$State=$this->input->post('state');

		$Village=$this->input->post('city');

		$PinCode=$this->input->post('pin');

		$Landmark=$this->input->post('landmark');

		$data=array(

			'CustomerID'=>$customerID,

			'Address'=>$Address,

			'Locality'=>$Locality,

			'State'=>$State,

			'Village'=>$Village,

			'PinCode'=>$PinCode,

			'Landmark'=>$Landmark,

			

		);

		if($newaddress==1){

			$this->CustomerMaster_Model->AddAddress($data);

		}
		$cusdelID=0;
		$cusAdd="";
		if(($addCusID=="")||($addCusID==0)||($addCusID==null)){
			$whereaddress="CustomerID=$customerID order by ID desc limit 1";
			$cusAdd=$this->CustomerMaster_Model->SelectDeliveryAddress($whereaddress);
			foreach($cusAdd as $deladd){
				$cusdelID=$deladd["ID"];
			}
		}else{
			$cusdelID=$addCusID;
		}
		

		if(getenv('REMOTE_ADDR'))

		$ipaddress = getenv('REMOTE_ADDR');

		$where="IPAddress='$ipaddress'";

		$totprice=0;

		$charge=0;

		$orderprice=$this->Shopping_Model->GetPrice($where);

		foreach($orderprice as $rows){

			$totprice=$rows["Price"];

		}

		if($totprice >= 500){

			$charge=0;

		}

		else{

			$charge=50;

		}

		$grandtotal=$totprice+$charge;

		//$tax=($totprice*(15.5/100));

		$tax=0;

		$GrandTotal=$grandtotal + $tax;

		$code=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

		$ordercode="ABAD-".$code;

		$itemNo=$this->Shopping_Model->GetItemNo($where);

		$item=sizeof($itemNo);
		/*assign warehouse and get shop cart items */

		$whereshop="a.CustomerID=$customerID and a.IPAddress='$ipaddress'";

		$items=$this->Shopping_Model->GetOrderItems($whereshop);//from shop_cart		

		$avail_item="";

		$whereavail="";

		$itemid=0;

		$quantity=0.00;

		$AssignedWarehouse=0;

		$query="select a.WarehouseID from current_stock a";

		$count=0;

		foreach ($items as $ware){

			if(sizeof($items)==1)

			{

				$query=$query." where a.ItemID=".$ware["ItemID"]." and a.Quantity>".$ware["TotalQuantity"]." ";

			}

			else

			{

				if($count!=0)
				{
					$query=$query." inner join current_stock a".$count." on a.WarehouseID=a".$count.".WarehouseID";
					$whereavail=$whereavail." and a".$count.".ItemID=".$ware["ItemID"]." and a".$count.".Quantity>".$ware["TotalQuantity"] ;
				}

				else

				{

					$whereavail="where a.ItemID=".$ware["ItemID"]." and a.Quantity>".$ware["TotalQuantity"];

				}

			}

			$count++;

		}

		$query= $query." ".$whereavail." limit 1";

		$Warehouses=$this->Order_Model->AssignWarehouse($query);

		foreach($Warehouses as $warehouse){

			$AssignedWarehouse=intval($warehouse["WarehouseID"]);

		}

		$data1=array(

			'CustomerID'=>$customerID,
			
			'CusAddID'=>$cusdelID,

			'OrderCode'=>$ordercode,

			'AssignedWarehouse'=>$AssignedWarehouse,

			'Items'=>$item,

			'OrderDate'=>date('Y-m-d'),

			'TotalOrderValue'=>$totprice,

			'GrandTotal'=>$GrandTotal,

			'DeliveryCharge'=>$charge,

			'TaxAmount'=>$tax,

			'Status'=>0,

			'PaymentStatus'=>0,

			'IPAddress'=>$ipaddress,

		);

		$this->Order_Model->AddOrder($data1);

		/*notification*/

		$wherenot="WarehouseID=$AssignedWarehouse and UserType=2";

		$Sourseid=$this->Order_Model->SelectSource($wherenot);

		$SourceID=0;

		foreach($Sourseid as $sourceID){

			$SourceID=intval($sourceID["ID"]);

		}

		$data_noti=array(

			'SourceUserID'=>$SourceID,

			'SourceUserType'=>2,

			'WarehouseID'=>$AssignedWarehouse,

			'Detail'=>"New Order has been placed.Order Code: ".$ordercode." Total Amount:".$GrandTotal,

			'Type'=>1,

			'Date'=>date('Y-m-d'),

			

		);

		$this->Order_Model->addNotification($data_noti);

		/*add order items*/

		$whereS="CustomerID=$customerID and IPAddress='$ipaddress' limit 1";

		$orderid=$this->Order_Model->ShowOrdersID($whereS);//getting order id

		foreach($orderid as $rowid){

			$OrderID=$rowid["ID"];
			
		}

		/* get each item from shop cart and add to order item */

		$whereordershop="a.IPAddress='$ipaddress'";

		//echo $whereshop;

		$orderitems=$this->Shopping_Model->GetOrderItems($whereordershop);//from shop_cart

		//echo json_encode($orderitems);

		foreach($orderitems as $row){

			$ItemID=$row["ItemID"];

			$ItemName=$row["ItemName"];

			$PackageQuantity=$row["PackageQuantity"];

			$PackagePrice=$row["PackagePrice"];

			$TotalPrice=$row["TotalPrice"];

			$PackageName=$row["PackageName"];

			$PackageQuantity=$row["PackageQuantity"];

			$DateOfOrder=$row["DateOfOrder"];

			$CustomerID=$row["CustomerID"];

			$ItemDescription=$row["ItemDescription"];

			$PackageID=$row["PackageID"];

			$TotalQuantity=$row["TotalQuantity"];

		//echo $ItemID;

			$data2=array(

				'OrderID'=>$OrderID,

				'ItemName'=>$ItemName,

				'ItemID'=>$ItemID,

				'PackageQuantity'=>$PackageQuantity,

				'PackagePrice'=>$PackagePrice,

				'TotalPrice'=>$TotalPrice,

				'PackageID'=>$PackageID,

				'PackageName'=>$PackageName,

				'TotalQuantity'=>$TotalQuantity,

			);

			$this->Order_Model->AddOrderItem($data2);
			$this->Shopping_Model->removecart($where);
		}

		$ordercodes="";

		$whereorderS="CustomerID=$customerID and IPAddress='$ipaddress' order by ID Desc limit 1";

		$results=$this->Shopping_Model->getOrderCodes($whereorderS);

		echo json_encode($results);

	}

	

	/*order passing */

	public function order_passing(){

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

		$this->load->view('Admin/order_passing',$data);

		

		

	}

	

	public function checkorder(){

		$OrderCode=$this->input->post('ordernames',true);

		$AssignedWarehouse=$this->input->post('warehouse',true);

		$FOrderDate=$this->input->post('forderdate',true);

		$TOrderDate=$this->input->post('torderdate',true);

		$namewhere="";

		$housewhere="";

		$datewhere="";

		$where="";

		if($OrderCode!=""){

				$namewhere="a.OrderCode like '%".$OrderCode."%'";

				

			}

			

		if($AssignedWarehouse!=""){

			if($AssignedWarehouse==0){

				//housewhere=1;

			}

			else{
				$housewhere="a.AssignedWarehouse = ".$AssignedWarehouse." ";

			}

			}

			

		if(($FOrderDate!="")and ($TOrderDate!="")){

				$datewhere="a.OrderDate between '".$FOrderDate."' and '".$TOrderDate."'";

			}

		if($namewhere!="")

			{

				if($where!="")

				{

					$where=$where." and ";

				}

				$where=$where.$namewhere;

			}

		if($housewhere!="")

			{

				if($where!="")

				{

					$where=$where." and ";

				}

				$where=$where.$housewhere;

			}

		if($datewhere!="")

			{

				if($where!="")

				{

					$where=$where+" and ";

				}

				$where=$where.$datewhere;

			}

		if($where=="")

		{

			$where="1";

		}

		$result=$this->Order_Model->checkorder($where);

		echo json_encode($result);

	}

	

	public function passingorder(){

		$data["warehouse"]=$this->InStock_Model->SelectWarehouse();

		$id=$this->uri->segment(3);

		$where="a.ID=$id";

		$data["result"]=$this->Order_Model->orderdetail($where);

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

		$this->load->view('Admin/orderUpdateWarehouse',$data);

	}

	

	public function checkwarehouse(){

		$warehouse=$this->uri->segment(3);

		$itemid=$this->uri->segment(4);

		$orderid=$this->uri->segment(5);

		$where="WarehouseID=$warehouse and ItemID=$itemid";

		$availability=$this->Order_Model->quantityWarehouse($where);

		$quantity="";

		foreach($availability as $row){

			$quantity=$row["Quantity"];

		}

		if($quantity!=0){

			$data="AssignedWarehouse=$warehouse";

			$whereo="ID=$orderid";

			$this->Order_Model->updatewarehouse($data,$whereo);

			echo json_encode("successfully assigned warehouse");

		}

		else{

			echo json_encode("Sorry items quantity over");

		}

	}

	

	/*order history */

	public function order_history(){

		$customerID=$this->input->cookie('CustomerID',true);

		$where="a.CustomerID=$customerID order by a.ID Desc";

		//$data['Orders']=$this->Order_Model->ordercus($where);

		//$data['OrderItem']=$this->Order_Model->ordercusitem($where);

		$data['CusOrders']=$this->Order_Model->CustomerOrders($where);

		

		$data['CustomerID']=$customerID;

		$this->load->view('Main/order_history',$data);

	}



	public function findWarehouse(){

		$ItemID=$this->uri->segment(3);

		$Quantity=$this->uri->segment(4);

		$where="a.ItemID=$ItemID and a.Quantity>$Quantity";

		$result=$this->Order_Model->findWarehouse($where);

		echo json_encode($result);

	}

	

	public function sendItem(){

		$TWarehouseID=$this->uri->segment(3);

		$FWarehouseID=$this->uri->segment(4);

		$OrderID=$this->uri->segment(5);
		
		$whereorder="a.ID=$OrderID";

		$order=$this->Order_Model->ShowOrder($whereorder);
		
		foreach($order as $row){
			$OrderCode=$row["OrderCode"];
		}

		$data=array(

			'Date'=>date('Y-m-d'),

			'FWarehouseID'=>$FWarehouseID,

			'TWarehouseID'=>$TWarehouseID,

			'OrderID'=>$OrderID,

			'Status'=>0,
			
			'Checked' =>0,


		);

		$this->Order_Model->sendItem($data);

		/*notification*/

		//$WarehouseNot=$this->input->cookie('WarehouseID',true);

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);
		
		$WarehouseID=$this->input->cookie('WarehouseID',true);

		

		/*order item updated */

		$data_noti=array(

			'SourceUserID'=>$UserID,

			'SourceUserType'=>$UserType,

			'WarehouseID'=>$WarehouseID,

			'Detail'=>"Item to be sent of OrderCode:".$OrderCode." from".$FWarehouseID."to ".$TWarehouseID."by super admin",

			'Type'=>9,

			'Date'=>date('Y-m-d'),

		);

		//echo json_encode($data_noti);

		$this->Order_Model->addNotification($data_noti);

		/*notification*/

	}

	

	/*public function DeleteOrderLimit(){

		$OrderCount=$this->Order_Model->OrderCount();

		$oCount=0;

		foreach($OrderCount as $row){

			$oCount=$row["OrderCount"];

		}

		if($oCount>100){

			

		}

	}*/

	

	public function checkordercount(){

		$OrderCount=$this->Order_Model->OrderCount();

		$oCount=0;

		foreach($OrderCount as $row){

			$oCount=$row["OrderCount"];

		}

		if($oCount>100){

			$result="Orders are above 100";

		}else{

			$result="Orders are less than 100";

		}

		echo json_encode($result);

	}
	
	/*orders from vendors*/
	public function ordersFvendors(){
		$ID=$this->uri->segment(3);
		
		if(getenv('REMOTE_ADDR'))

		$ipaddress = getenv('REMOTE_ADDR');

		$where="IPAddress='$ipaddress' and CustomerID=$ID";

		$totprice=0;

		$charge=0;

		$orderprice=$this->Shopping_Model->GetPrice($where);

		foreach($orderprice as $rows){

			$totprice=$rows["Price"];

		}

		if($totprice >= 500){

			$charge=0;

		}

		else{

			$charge=50;

		}

		$grandtotal=$totprice+$charge;

		//$tax=($totprice*(15.5/100));

		$tax=0;

		$GrandTotal=$grandtotal + $tax;

		$code=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

		$ordercode="ABAD-".$code;

		$itemNo=$this->Shopping_Model->GetItemNo($where);

		$item=sizeof($itemNo);
		/*assign warehouse and get shop cart items */

		$whereshop="a.CustomerID=$ID and a.IPAddress='$ipaddress'";

		$items=$this->Shopping_Model->GetOrderItems($whereshop);//from shop_cart		

		$avail_item="";

		$whereavail="";

		$itemid=0;

		$quantity=0.00;

		$AssignedWarehouse=0;

		$query="select a.WarehouseID from current_stock a";

		$count=0;

		foreach ($items as $ware){

			if(sizeof($items)==1)

			{

				$query=$query." where a.ItemID=".$ware["ItemID"]." and a.Quantity>".$ware["TotalQuantity"]." ";

			}

			else

			{

				if($count!=0)
				{
					$query=$query." inner join current_stock a".$count." on a.WarehouseID=a".$count.".WarehouseID";
					$whereavail=$whereavail." and a".$count.".ItemID=".$ware["ItemID"]." and a".$count.".Quantity>".$ware["TotalQuantity"] ;
				}

				else

				{

					$whereavail="where a.ItemID=".$ware["ItemID"]." and a.Quantity>".$ware["TotalQuantity"];

				}

			}

			$count++;

		}

		$query= $query." ".$whereavail." limit 1";

		$Warehouses=$this->Order_Model->AssignWarehouse($query);

		foreach($Warehouses as $warehouse){

			$AssignedWarehouse=intval($warehouse["WarehouseID"]);

		}

		$data1=array(

			'CustomerID'=>$ID,
			
			'CusAddID'=>0,

			'OrderCode'=>$ordercode,

			'AssignedWarehouse'=>$AssignedWarehouse,

			'Items'=>$item,

			'OrderDate'=>date('Y-m-d'),

			'TotalOrderValue'=>$totprice,

			'GrandTotal'=>$GrandTotal,

			'DeliveryCharge'=>$charge,

			'TaxAmount'=>$tax,

			'Status'=>0,

			'PaymentStatus'=>0,

			'IPAddress'=>$ipaddress,

		);

		$this->Order_Model->AddOrder($data1);

		/*notification*/

		$wherenot="WarehouseID=$AssignedWarehouse and UserType=2";

		$Sourseid=$this->Order_Model->SelectSource($wherenot);

		$SourceID=0;

		foreach($Sourseid as $sourceID){

			$SourceID=intval($sourceID["ID"]);

		}

		$data_noti=array(

			'SourceUserID'=>$SourceID,

			'SourceUserType'=>2,

			'WarehouseID'=>$AssignedWarehouse,

			'Detail'=>"New Order has been placed.Order Code: ".$ordercode." Total Amount:".$GrandTotal,

			'Type'=>1,

			'Date'=>date('Y-m-d'),

			

		);

		$this->Order_Model->addNotification($data_noti);

		/*add order items*/

		$whereS="CustomerID=$ID and IPAddress='$ipaddress' limit 1";

		$orderid=$this->Order_Model->ShowOrdersID($whereS);//getting order id

		foreach($orderid as $rowid){

			$OrderID=$rowid["ID"];
		}

		/* get each item from shop cart and add to order item */

		$whereordershop="a.IPAddress='$ipaddress' and a.CustomerID=$ID";

		//echo $whereshop;

		$orderitems=$this->Shopping_Model->GetOrderItems($whereordershop);//from shop_cart

		//echo json_encode($orderitems);

		foreach($orderitems as $row){

			$ItemID=$row["ItemID"];

			$ItemName=$row["ItemName"];

			$PackageQuantity=$row["PackageQuantity"];

			$PackagePrice=$row["PackagePrice"];

			$TotalPrice=$row["TotalPrice"];

			$PackageName=$row["PackageName"];

			$PackageQuantity=$row["PackageQuantity"];

			$DateOfOrder=$row["DateOfOrder"];

			$CustomerID=$row["CustomerID"];

			$ItemDescription=$row["ItemDescription"];

			$PackageID=$row["PackageID"];

			$TotalQuantity=$row["TotalQuantity"];

		//echo $ItemID;

			$data2=array(

				'OrderID'=>$OrderID,

				'ItemName'=>$ItemName,

				'ItemID'=>$ItemID,

				'PackageQuantity'=>$PackageQuantity,

				'PackagePrice'=>$PackagePrice,

				'TotalPrice'=>$TotalPrice,

				'PackageID'=>$PackageID,

				'PackageName'=>$PackageName,

				'TotalQuantity'=>$TotalQuantity,

			);

			$this->Order_Model->AddOrderItem($data2);
			$this->Shopping_Model->removecart($where);
		}

		$ordercodes="";

		$whereorderS="CustomerID=$ID and IPAddress='$ipaddress' order by ID Desc limit 1";

		$results=$this->Shopping_Model->getOrderCodes($whereorderS);

		echo json_encode($results);
		
	}
	

   }

   ?>