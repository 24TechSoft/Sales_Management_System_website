<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class UserMaster extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();

		$this->load->model('UserMaster_Model');

		$this->load->model('InStock_Model');

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

		$data["warehouse"]=$this->InStock_Model->SelectWarehouse();

		$this->load->view('Admin/user-master',$data);

		

	}

	public function Addusermaster(){

		$UserType=$this->input->post('userType');

		$Warehouse=$this->input->post('warehouse');

		$WarehouseCode=$this->input->post('code');

		$FullName=$this->input->post('name');

		$PhoneNo=$this->input->post('phone');

		$Email=$this->input->post('email');

		$Address=$this->input->post('address');
		
		$Address1=$this->input->post('address1');
		
		$State=$this->input->post('state');
		
		$City=$this->input->post('city');
		
		$Landmark=$this->input->post('landmark');

		$PinCode=$this->input->post('pinCode');

		$UserID=$this->input->post('userid');

		$Password=$this->input->post('password');

		$data = array(

					 'UserType'=>$UserType,

					 'WarehouseID'=>$Warehouse,

					 'WarehouseCode'=>$WarehouseCode,

					 'FullName'=>$FullName,

					 'PhoneNo'=>$PhoneNo,

					 'Email'=>$Email,

					 'Address'=>$Address,

					 
					 'Address1'=>$Address1,

					 'State'=>$State,

					 'City'=>$City,

					 'Landmark'=>$Landmark,

					 'PinCode'=>$PinCode,

					 'UserID'=>$UserID,

					 'Password'=>md5($Password),

					);

		$this->UserMaster_Model->Addusermaster($data);

	}







	public function ShowUserMaster()

			{

				$where="1 order by ID Desc";

				$data = $this->UserMaster_Model->ShowUserMaster($where);

				echo json_encode($data);

			}

	public function DeleteUserMaster()

			{

				$ID=$this->uri->segment(3);

				$where="ID=$ID";

				$this->UserMaster_Model->DeleteUserMaster($where);

				redirect('UserMaster');

			}

			

	

	

	public function showNotification(){

		

		$result=$this->Login_Model->ShowNotification(1);

		/*

		foreach($result as $row){

			//$Notification_avail=$this->Login_Model->Notification_avail($where);

			$NotificationID=$row["ID"];

			$UserID=$row["SourceUserID"];

			$ViewStatus=1;

			$OpenStatus=0;

			$data=array(

				'NotificationID'=>$NotificationID,

				'UserID'=>$UserID,

				'ViewStatus'=>$ViewStatus,

				'OpenStatus'=>$OpenStatus,

				

			);

			$where="UserID=$UserID and NotificationID=$NotificationID";

			$Notification_avail=$this->Login_Model->Notification_avail($where);

			if(sizeof($Notification_avail)==0){

				$this->Login_Model->AddNotificationStatus($data);

			}

			

		}

		*/

		echo json_encode($result);

	}

	

	public function showNotificationcount(){

		$UserID=$this->input->cookie('UserID',true);

		//$where="a.SourceUserID=$UserID";
		
		$where=1;
		
		$where1="UserID=$UserID";

		//echo $where;

		$result=$this->Login_Model->showNotificationcount($where1,$where);

		echo json_encode($result);

	}

	

	public function showAllNotification(){

		

		$result=$this->Login_Model->ShowAllNotification(1);

	/*	foreach($result as $row){

			//$Notification_avail=$this->Login_Model->Notification_avail($where);

			$NotificationID=$row["ID"];

			$UserID=$row["SourceUserID"];

			$ViewStatus=1;

			$OpenStatus=0;

			$data=array(

				'NotificationID'=>$NotificationID,

				'UserID'=>$UserID,

				'ViewStatus'=>$ViewStatus,

				'OpenStatus'=>$OpenStatus,

				

			);

			$where="UserID=$UserID and NotificationID=$NotificationID";

			$Notification_avail=$this->Login_Model->Notification_avail($where);

			if(sizeof($Notification_avail)==0){

				$this->Login_Model->AddNotificationStatus($data);

			}

			

		}*/

		echo json_encode($result);

	}

	public function addNotificationstatus(){
		
		
		
		$result=$this->Login_Model->ShowNotification(1);

		$UserID=$this->input->cookie('UserID',true);

		foreach($result as $row){

			//$Notification_avail=$this->Login_Model->Notification_avail($where);

			$NotificationID=$row["ID"];

			//$UserID=$row["SourceUserID"];

			$ViewStatus=1;

			$OpenStatus=0;

			$data=array(

				'NotificationID'=>$NotificationID,

				'UserID'=>$UserID,

				'ViewStatus'=>$ViewStatus,

				'OpenStatus'=>$OpenStatus,

				

			);

			$where="UserID=$UserID and NotificationID=$NotificationID";

			$Notification_avail=$this->Login_Model->Notification_avail($where);

			if(sizeof($Notification_avail)==0){

				$this->Login_Model->AddNotificationStatus($data);

			}

			

		}

		

	}

	public function updateNotiStat(){

		$UserID=$this->input->cookie('UserID',true);

		$NotificationID=$this->uri->segment(3);

		$dataUpdate="OpenStatus=1";

		$where="NotificationID=$NotificationID";
		
		//echo $UserID;
		$where1="NotificationID=$NotificationID and UserID=$UserID";

		$data=array(

			'NotificationID'=>$NotificationID,

			'UserID'=>$UserID,

			'ViewStatus'=>1,

			'OpenStatus'=>1,

		);

		$result=$this->Login_Model->Notification_avail($where);
		
		//echo sizeof($result);

		if(sizeof($result)==0){
			
			$this->Login_Model->AddNotificationStatus($data);
			

		}

		else{

			
			$this->Login_Model->updateNotiStat($dataUpdate,$where1);
			
		}

	}



   }

   ?>