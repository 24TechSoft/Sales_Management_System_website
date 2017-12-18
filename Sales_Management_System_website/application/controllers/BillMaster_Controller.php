<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class BillMaster_Controller extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();

		$this->load->model('InStock_Model');

		$this->load->model('Order_Model');

		$this->load->model('OutStock_Model');

		$this->load->model('Consignment_Model');

		$this->load->model('CurrentStock_Model');

		$this->load->model('Login_Model');

		$this->load->helper('url');

   	}

	

	public function index(){

		$orderID=$this->uri->segment(3);

		$where="a.ID=$orderID";

		$whereorder="a.OrderID=$orderID";

		$data["Order"]=$this->Order_Model->ShowOrder($where);

		$item=$this->Order_Model->SelectOrderItems($whereorder);

		$data["item"]=$item;

		$data["ItemNo"]=sizeof($item);

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		$whereuser="ID=$UserID and UserType=$UserType";

		$user=$this->Login_Model->selectuser($whereuser);

		foreach($user as $rowuser){

			$UserName=$rowuser["FullName"];

		}

		$head['UserName']=$UserName;

		$head['type']=$UserType;

		

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/bill',$data);

		

	}

	public function AddBill(){	



		$BillDate=$this->input->post('date');

		$OrderID=$this->input->post('orderid');

		$CustomerID=$this->input->post('customerID');

		$TotalOrderValue=$this->input->post('ordervalue');

		$TaxDescription=$this->input->post('description');

		$TaxAmount=$this->input->post('taxAmount');

		$DiscountAmount=$this->input->post('disAmount');

		$GrandTotal=$this->input->post('grandAmount');

		$AmountInText=$this->input->post('AmountText');

		$Warehouse=$this->input->post('warehouse');

		$Status=$this->input->post('status');

		$DeliveryCharge=$this->input->post('delivery');

		$ipaddress = '';

        if(getenv('REMOTE_ADDR'))

        $ipaddress = getenv('REMOTE_ADDR');

		$data = array(

					 'BillDate'=>$BillDate,

					 'CustomerID'=>$CustomerID,

					 'OrderID'=>$OrderID,

					 'TotalOrderValue'=>$TotalOrderValue,

					 'TaxDescription'=>$TaxDescription,

					 'TaxAmount'=>$TaxAmount,

					 'DeliveryCharge'=>$DeliveryCharge,

					 'DiscountAmount'=>$DiscountAmount,

					 'GrandTotal'=>$GrandTotal,

					 'AmountInText'=>$AmountInText,

					 'Warehouse'=>$Warehouse,

					 'Status'=>$Status,

					 'IPAddress'=>$ipaddress

					 );

					

		 $where="a.OrderID=$OrderID and a.Warehouse=$Warehouse";

		 $result=$this->Order_Model->ShowBill($where);

		 if(sizeof($result)==0){

			$this->Order_Model->AddBill($data);

		 }

	}







	public function ShowBill()

			{

				$UserType=$this->input->cookie('UserType',true);

				$WarehouseID=$this->input->cookie("WarehouseID",true);

				if($UserType==1){

					$where=1;

				}

				else if($UserType==2){

					$where="a.Warehouse=$WarehouseID";

				}

				else if($UserType==3){

					$where=1;

				}

				$result = $this->Order_Model->ShowBill($where);

				echo json_encode($result);

			}

	public function DeleteBill()

			{

				$orderID=$this->uri->segment(4);

				$ID=$this->uri->segment(3);

				$where="ID=$ID";

				$this->Order_Model->DeleteBill($where);

				redirect('BillMaster_Controller/index/'.$orderID);

			}

	

	public function createbill(){

		$BillID=$this->uri->segment(3);

		$OrderID=$this->uri->segment(4);

		$WarehouseID=$this->uri->segment(5);

		$where="b.ID=$BillID and a.OrderID=$OrderID and a.Status=1";

		

		$data["Bill"]=$this->Order_Model->SelectBill($where);

		$data["OrderID"]=$OrderID;

		$statusdata="Status=1";

		$wherestatus="ID=$OrderID";

		

		$ConsignNo=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

		//echo $ConsignNo;

		$condata=array(

			'Date'=>date('Y-m-d'),

			'OrderID'=>$OrderID,

			'ConsignmentNo'=>$ConsignNo,

			'StatusID'=>2,

			'Remarks'=>'Order Confirmed',

			

			);

	

		$this->Consignment_Model->AddOrderConsignment($condata);

		$this->Order_Model->UpdateOrders($statusdata,$wherestatus);

		

		/*notification*/

		$where_order="ID=$OrderID";

		$Order_Code="";

		$Ordercode=$this->Order_Model->SelectOrderCode($where_order);

		foreach($Ordercode as $row_order){

			$Order_Code=$row_order["OrderCode"];

		}

		$Warehouse=$this->input->cookie('WarehouseID',true);

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		/*order item updated */

		$data_noti=array(

			'SourceUserID'=>$UserID,

			'SourceUserType'=>$UserType,

			'WarehouseID'=>$Warehouse,

			'Detail'=>"Order status has been updated for Order Code: ".$Order_Code,

			'Type'=>3,

			'Date'=>date('Y-m-d'),

		);

		$this->Order_Model->addNotification($data_noti);

		

		/*consignment status updated*/

		

		$data_notif=array(

			'SourceUserID'=>$UserID,

			'SourceUserType'=>$UserType,

			'WarehouseID'=>$Warehouse,

			'Detail'=>"Status has been updated for Consignment Number: ".$ConsignNo,

			'Type'=>4,

			'Date'=>date('Y-m-d'),

		);

		$this->Order_Model->addNotification($data_notif);

		

		/*notification*/

		

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		$whereuser="ID=$UserID and UserType=$UserType";

		$user=$this->Login_Model->selectuser($whereuser);

		$UserName="";

		foreach($user as $rowuser){

			$UserName=$rowuser["FullName"];

		}

		$head['UserName']=$UserName;

		$head['type']=$UserType;

		/*notification */

		$Notification=$this->Login_Model->ShowNotification(1);

		/*

		$dataconsign=array(

			'Date'=>date('Y-m-d'),

			'OrderID'=>$OrderID,

			'ConsignmentNo'=>$ConsignNo,

			'StatusID'=>2,

			'Remarks'=>$ConsignNo."is confirmed",

		);

		

		$this->Consignment_Model->AddOrderConsignment($dataconsign);

		*/

		/*order item updated */

		$data_notifi=array(

			'SourceUserID'=>$UserID,

			'SourceUserType'=>$UserType,

			'WarehouseID'=>$Warehouse,

			'Detail'=>"Status has been updated for Consignment Number: ".$ConsignNo,

			'Type'=>4,

			'Date'=>date('Y-m-d'),

		);

		$this->Order_Model->addNotification($data_noti);

		/*notification*/

		

		$head["NumberNot"]=sizeof($Notification);

		$head["Notification"]=$Notification;

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/bill_item',$data);

		

	}	

	

	public function AddOrderBillItem(){
		$OrderID=$this->uri->segment(4);
		$ItemID=$this->uri->segment(3);
		$WarehouseID=$this->uri->segment(5);
		
		$UserID=$this->input->cookie('UserID',true);
		$UserType=$this->input->cookie('UserType',true);
		$ipaddress = '';
        if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		
		$where="OrderID=$OrderID and IPAddress='$ipaddress'";
		
		$Bill=$this->Order_Model->SelectBillID($where);
		$BillID=0;
		foreach($Bill as $rowitem){
			$BillID=$rowitem["ID"];
		}
		
		$whereitem="OrderID=$OrderID and ItemID=$ItemID";
		
		$Items=$this->Order_Model->SelectItem($whereitem);
		foreach($Items as $row){
			$ItemName=$row["ItemName"];
			$Item=$row["ItemID"];
			$PackageQuantity=$row["PackageQuantity"];
			$PackagePrice=$row["PackagePrice"];
			$TotalPrice=$row["TotalPrice"];
			$PackageID=$row["PackageID"];
			$PackageName=$row["PackageName"];
			$TotalQuantity=$row["TotalQuantity"];
			$data = array(
					 'BillID'=>$BillID,
					 'ItemName'=>$ItemName,
					 'ItemID'=>$Item,
					 'PackageQuantity'=>$PackageQuantity,
					 'PackagePrice'=>$PackagePrice,
					 'TotalPrice'=>$TotalPrice,
					 'PackageID'=>$PackageID,
					 'PackageName'=>$PackageName,
					 'TotalQuantity'=>$TotalQuantity,
					 );
					 
			$wherebillItem="BillID=$BillID and ItemID=$Item and PackageName='$PackageName'";
			
			$BillItem=$this->Order_Model->ShowBillItem($wherebillItem);
			
			if(sizeof($BillItem)==0){
				$this->Order_Model->AddBillItem($data);
			}
			
			$whereorder="OrderID=$OrderID and ItemID=$ItemID";
			
			$updatedata="Status=1";
			
			$this->Order_Model->UpdateOrderItem($updatedata,$whereorder);
			
			$wherep="ID=$PackageID";
			
			$wherecurrent="WarehouseID=$WarehouseID and ItemID=$Item";
			$QuantityPackage=$this->InStock_Model->PackageQuantity($wherep);
			$Quantity=0.00;
			foreach($QuantityPackage as $row){

				$Quantity = $row["Quantity"];

			}
			$dataoutStock=$data = array(
						 'Date'=>date('Y-m-d'),
						 'WarehouseID'=>$WarehouseID,
						 'ItemID'=>$Item,
						 'OrderID'=>$OrderID,
						  'BillID'=>$BillID,
						  'PackageQuantity'=>$TotalQuantity,
						 'Quantity'=>$Quantity,
						 'Remarks'=>'sold',
						 );
			$CurrentQuantity=$PackageQuantity*$Quantity;
			$datac="Quantity=Quantity-$CurrentQuantity";
			$availability=$this->InStock_Model->itemInstock($wherecurrent);
			$quantity="";
			foreach($availability as $row){
				$quantity=$row["Quantity"];
			}
			if($quantity > 0){
				$whereoutstock="WarehouseID=$WarehouseID and ItemID=$Item and OrderID=$OrderID and BillID=$BillID";
				$OutStock=$this->OutStock_Model->ShowOutStock($whereoutstock);
				if(sizeof($OutStock)==0){			
					$this->OutStock_Model->AddOutStock($dataoutStock);
					/*notification*/
					/*order item updated */
					
					$data_noti=array(
						'SourceUserID'=>$UserID,
						'SourceUserType'=>$UserType,
						'WarehouseID'=>$WarehouseID,
						'Detail'=>"Out Stock at WarehouseID ".$WarehouseID,
						'Type'=>6,
						'Date'=>date('Y-m-d'),
					);
					$this->Order_Model->addNotification($data_noti);
					/*notification*/
						$availability=$this->InStock_Model->updateCurrent_Stock($datac,$wherecurrent);
				}
			}
		}
		//ConsiggnmentNo generation 

			$ConsignNo=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

			$condata=array(

				'Date'=>date('Y-m-d'),

				'OrderID'=>$OrderID,
				
				'BillID'=>$BillID,

				'ConsignmentNo'=>$ConsignNo,

				'StatusID'=>2,

				'Remarks'=>'Order Confirmed',

			);

			//echo json_encode($condata);

			$this->Consignment_Model->AddOrderConsignment($condata);
			
			/*consignment status updated*/
			
			$Warehouse=$this->input->cookie('WarehouseID',true);





			$data_notif=array(

				'SourceUserID'=>$UserID,

				'SourceUserType'=>$UserType,

				'WarehouseID'=>$Warehouse,

				'Detail'=>"Status has been updated for Consignment Number: ".$ConsignNo,

				'Type'=>4,

				'Date'=>date('Y-m-d'),

			);

			$this->Order_Model->addNotification($data_notif);

		

			/*invoice notification */
			
			$where_order="ID=$OrderID";

			$Order_Code="";

			$Ordercode=$this->Order_Model->SelectOrderCode($where_order);

		foreach($Ordercode as $row_order){

			$Order_Code=$row_order["OrderCode"];

		}

			$data_notiinvoice=array(

				'SourceUserID'=>$UserID,

				'SourceUserType'=>$UserType,

				'WarehouseID'=>$Warehouse,

				'Detail'=>"New Invoice has been created.Order Code: ".$Order_Code,

				'Type'=>2,

				'Date'=>date('Y-m-d'),

			);



			$this->Order_Model->addNotification($data_notiinvoice);
		
	}

	



	public function AddBillItem(){	

		

		$OrderID=$this->uri->segment(3);

		

		$where_order="ID=$OrderID";

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

			'Detail'=>"New Invoice has been created.Order Code: ".$Order_Code,

			'Type'=>2,

			'Date'=>date('Y-m-d'),

		);

		$this->Order_Model->addNotification($data_noti);

		echo json_encode("invoice created successfully");

		

	}

	public function ShowBillItem()

			{

				$where=1;

				$result = $this->Order_Model->ShowBillItem($where);

				echo json_encode($result);

			}

	public function DeleteBillItem()

			{

				$ID=$this->uri->segment(3);

				$OrderID=$this->uri->segment(4);

				$BillID=$this->uri->segment(5);

				$where="ID=$ID";

				$this->Order_Model->DeleteBillItem($where);

				redirect('BillMaster_Controller/createbill/'.$BillID.'/'.$OrderID);

			}

			

	/* show bill */

	public function bill_view(){

		

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		$UserName="";
		
		$whereuser="ID=$UserID and UserType=$UserType";

		$user=$this->Login_Model->selectuser($whereuser);

		foreach($user as $rowuser){

			$UserName=$rowuser["FullName"];

		}

		$head['UserName']=$UserName;

		$head['type']=$UserType;

		

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/bill_view');

		

	}

	public function ShowAllBillItems(){
		$BillID=$this->uri->segment(3);

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);
		$UserName="";

		$whereuser="ID=$UserID and UserType=$UserType";
		$user=$this->Login_Model->selectuser($whereuser);
		foreach($user as $rowuser){

			$UserName=$rowuser["FullName"];

		}
		//echo json_encode($user);

		$head['UserName']=$UserName;

		$head['type']=$UserType;
		
		$where="BillID=$BillID";

		$data["Bill"]=$this->Order_Model->ShowBillItem($where);

		

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/allbill_item',$data);

	}

	



   }

   ?>