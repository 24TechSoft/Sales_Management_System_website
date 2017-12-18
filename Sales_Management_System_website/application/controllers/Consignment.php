<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class Consignment extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();

		

		$this->load->model('Consignment_Model');

		$this->load->model('UserMaster_Model');

		$this->load->model('Login_Model');

		$this->load->model('Order_Model');

		$this->load->helper('cookie');

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

		$this->load->view('Admin/consignment_status',$head);

		

	}

	/*Add Consignment */

	public function AddConStatus(){

		$StatusDetail=$this->input->post('status');

		$data=array(

			'StatusDetail'=>$StatusDetail,

		);

		$this->Consignment_Model->AddConStatus($data);

	}

	

	public function ShowConStatus(){

		$where=1;

		$result=$this->Consignment_Model->ShowConStatus($where);

		echo json_encode($result);

	}

	public function DeleteConStatus(){

		$ID=$this->uri->segment(3);

		$where="ID=$ID";

		$this->Consignment_Model->DeleteConStatus($where);

		redirect('Consignment');

		

	}

	/*end consignment add */

	

	public function Consignments(){

		$ID=$this->input->get("ID",true);

		//echo($ID);

		if(($ID!=0)||($ID!="")||($ID!="")){

			$wheress="a.ID=$ID";

			$wheres=0;

			$data["Consignment"]=$this->Consignment_Model->showOrderConsignments($wheres);

		}

		else{

			$wheress=0;

			

		$ConsignmentNo=$this->uri->segment(3);

		$OrderID=$this->uri->segment(4);

		$Status=$this->uri->segment(5);

		$wheres="a.ConsignmentNo='$ConsignmentNo' and a.OrderID=$OrderID and a.StatusID=$Status limit 1";

		$data["Consignment"]=$this->Consignment_Model->showOrderConsignments($wheres);

		}

		$data["Consignments"]=$this->Consignment_Model->ShowConsignment($wheress);

		//echo json_encode($Consignments);

		

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

		

		

		$data['type']=$UserType;

		$where="a.UserType=4";

		$data['Delivery']=$this->UserMaster_Model->ShowUserMaster($where);

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/consignment',$data);

	

	}

	

	public function AddConsignment(){

		$ConsignmentNo=$this->input->post('consignment_no');

		$OrderNo=$this->input->post('order_no');

		$OrderStatus=$this->input->post('statusID');

		$Deliveryboy=$this->input->post('deliveryboy');

		$SourceAddress=$this->input->post('s_address');

		$DestinationAddress=$this->input->post('d_address');

		$ConsignmentDate=$this->input->post('consignment_date');

		$data=array(

			'ConsignmentNo'=>$ConsignmentNo,

			'OrderNo'=>$OrderNo,

			'OrderStatus'=>$OrderStatus,

			'Deliveryboy'=>$Deliveryboy,

			'SourceAddress'=>$SourceAddress,

			'DestinationAddress'=>$DestinationAddress,

			'ConsignmentDate'=>$ConsignmentDate,

		);

		echo json_encode($data);

		$this->Consignment_Model->AddConsignment($data);

		

	} 

	

	public function ShowConsignment(){

		$where=1;

		$result=$this->Consignment_Model->ShowConsignment($where);

		echo json_encode($result);

	}

	

	public function DeleteConsignment(){

		$ID=$this->uri->segment(3);

		$ConsignmentNo=$this->uri->segment(4);

		$OrderID=$this->uri->segment(5);

		$StatusID=$this->uri->segment(6);

		$where="ID=$ID";

		$this->Consignment_Model->DeleteConsignment($where);

		redirect('Consignment/Consignments/'.$ConsignmentNo.'/'.$OrderID.'/'.$StatusID);

	}

	

	public function UpdateConsignment(){

		$ID=$this->uri->segment(3);

		$where="ID=$ID";

		$Deliveryboy=$this->input->post('deliveryboy');

		$DestinationAddress=$this->input->post('d_address');

		

		$data="Deliveryboy=$Deliveryboy,DestinationAddress='$DestinationAddress'";

		//echo json_encode($data);

		$this->Consignment_Model->UpdateConsignment($data,$where);

		

	} 

	/*consignment end */

	public function tracking(){

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		$ConsignmentNo=$this->uri->segment(3);

		$whereuser="ID=$UserID and UserType=$UserType";

		$UserName="";

		$user=$this->Login_Model->selectuser($whereuser);

		foreach($user as $rowuser){

			$UserName=$rowuser["FullName"];

		}

		$head['UserName']=$UserName;

		$head['type']=$UserType;

		

		$data['type']=$UserType;

		$where="a.Deliveryboy=$UserID and a.ConsignmentNo='$ConsignmentNo'";

		$wheres=1;

		$data['Consignments']=$this->Consignment_Model->ShowConsignment($where);

		$data['Status']=$this->Consignment_Model->ShowConStatus($wheres);

		$data['ConsignmentNo']=$ConsignmentNo;

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/tracking',$data);

	}

	

	

	

	public function AddTracking(){

		$ConsignmentNo=$this->input->post('consignment_no');

		$Deliveryboy=$this->input->post('deliveryboy');

		$Status=$this->input->post('Status');

		$Remarks=$this->input->post('remarks');

		$data=array(

			'ConsignmentNo'=>$ConsignmentNo,

			'AssignedDeliveryboy'=>$Deliveryboy,

			'Status'=>$Status,

			'Remarks'=>$Remarks,

			'Photo'=>"",

			'Signature'=>"",

		);

		

		$this->Consignment_Model->AddTracking($data);

		$where="ConsignmentNo='$ConsignmentNo'";

		$updatedata="OrderStatus=$Status";

		$this->Consignment_Model->UpdateConsignment($updatedata,$where);

		

	}

	

	public function ShowTracking(){

		$ConsignmentNo=$this->uri->segment(3);

		$UserID=$this->input->cookie('UserID',true);

		$where="a.AssignedDeliveryboy=$UserID and a.ConsignmentNo='$ConsignmentNo'";

		$result=$this->Consignment_Model->ShowTracking($where);

		echo json_encode($result);

	}

	

	public function DeleteTracking(){

		$ID=$this->uri->segment(3);

		$ConsignmentNo=$this->uri->segment(4);

		$where="ID=$ID";

		$this->Consignment_Model->DeleteTracking($where);

		redirect('Consignment/tracking/'.$ConsignmentNo);

	}

	/*update order status */

	public function updateorderstatus(){

		

		$OrderID=$this->uri->segment(3);
		
		$BillID=$this->uri->segment(4);

		$wherecon="OrderID=$OrderID";

		$Consignment="";

		$ConsignmentNo=$this->Consignment_Model->SelectConNo($wherecon);

		foreach($ConsignmentNo as $row){

			$Consignment=$row["ConsignmentNo"];

		}

		$whereorder="ID=$OrderID";

		$OrderCode=$this->Order_Model->ShowOrders($whereorder);

		foreach($OrderCode as $order){

		$data["OrderCode"]=$order["OrderCode"];

		}
		
		$data["Bill"]=$BillID;

		$data["OrderID"]=$OrderID;

		$data["Consignment"]=$Consignment;

		$data["Statuses"]=$this->Consignment_Model->ShowConStatus(1);

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

		//echo $Consignment;

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/updateorderstatus',$data);

		

	}

	

	public function addorderstatus(){

		$OrderID=$this->input->post('orderID');
		
		$BillID=$this->input->post('bill');

		$CosignmentNo=$this->input->post('Consignment');

		$StatusID=$this->input->post('status');

		$Remark=$this->input->post('remarks');

		$data=array(

			'Date'=>date('Y-m-d'),

			'OrderID'=>$OrderID,
			
			'BillID'=>$BillID,

			'ConsignmentNo'=>$CosignmentNo,

			'StatusID'=>$StatusID,

			'Remarks'=>$Remark,

		);
		
		//echo $BillID;

		$this->Consignment_Model->AddOrderConsignment($data);

		/*notification*/

		$Warehouse=$this->input->cookie('WarehouseID',true);

		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);

		/*order item updated */

		$data_noti=array(

			'SourceUserID'=>$UserID,

			'SourceUserType'=>$UserType,

			'WarehouseID'=>$Warehouse,

			'Detail'=>"Status has been updated for Consignment Number: ".$CosignmentNo,

			'Type'=>4,

			'Date'=>date('Y-m-d'),

		);

		$this->Order_Model->addNotification($data_noti);

		/*notification*/

		redirect('Consignment/updateorderstatus/'.$OrderID.'/'.$BillID);

	}

	

	public function showOrderConsignment(){

		$ConsignmentNo=$this->uri->segment(3);

		$where="ConsignmentNo='$ConsignmentNo'";

		$result=$this->Consignment_Model->showOrderConsignment($where);

		echo json_encode($result);

	}

	public function DeleteUpdateorder(){

		$ID=$this->uri->segment(3);

		$OrderID=$this->uri->segment(4);

		$where="ID='$ID'";

		$this->Consignment_Model->DeleteUpdateorder($where);

		redirect('Consignment/updateorderstatus/'.$OrderID);

	}

	

	/*consigment view*/

	public function consignment_view(){

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

		$this->load->view('Admin/consignment_view');

	}

	

	public function ShowAllConsignment(){

		$where=1;

		$result=$this->Consignment_Model->ShowConsignment($where);

		echo json_encode($result);

	} 

	

	/*consiggnment delovery */

	public function consignment_delivery(){

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

		

		$data['type']=$UserType;

		$where="a.Deliveryboy=$UserID";

		$data['Consignments']=$this->Consignment_Model->ShowConsignmentdelivery($where);

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/consignment_delivery',$data);

	}

	

	/*delivery boy search date */

	public function searchdate(){

		$searchdate=$this->input->post('date');

		//echo $searchdate;

		

		$UserID=$this->input->cookie('UserID',true);

		$where="";

		if($searchdate!=""){

				$where="a.ConsignmentDate = '".$searchdate."' ";                

			}

		if($where=="")

		{

			$where="1";

		}

		//echo $where;

		$result=$this->Consignment_Model->ShowConsignmentdelivery($where);

		echo json_encode($result);

	}
	
	public function allConsignment(){
		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);
		
		$WarehouseID=$this->input->cookie('WarehouseID',true);

		$whereuser="ID=$UserID and UserType=$UserType";

		$UserName="";

		$user=$this->Login_Model->selectuser($whereuser);

		foreach($user as $rowuser){

			$UserName=$rowuser["FullName"];

		}
		
		if(($UserType==1)||($UserType==3)){
			$where=1;
		}
		else if($UserType==2){
			$where="c.Warehouse=$WarehouseID";
		}
		
		$data["OrderConsignment"]=$this->Consignment_Model->OrderConsignment($where);

		$head['UserName']=$UserName;

		$head['type']=$UserType;
		

		$this->load->view('Admin/admin_header',$head);

		$this->load->view('Admin/allconsignment',$data);
		
	}
	/*
	public function OrderConsignment(){
		$UserType=$this->input->cookie('UserType',true);

		$UserID=$this->input->cookie('UserID',true);
		
		$WarehouseID=$this->input->cookie('WarehouseID',true);
		
		if(($UserType==1)||($UserType==3)){
			$where=1;
		}
		else if($UserType==2){
			$where="c.Warehouse=$WarehouseID";
		}

		$result=$this->Consignment_Model->OrderConsignment($where);
		echo json_encode($result);
	}
*/
	

	

   }

   ?>