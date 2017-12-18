<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class AdminLogin_Controller extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();

		$this->load->model('Login_Model');

		$this->load->model('Shopping_Model');

		$this->load->model('CustomerMaster_Model');
		
		$this->load->model('UserMaster_Model');
		$this->load->model('ItemMaster_Model');

		$this->load->helper('url');

		$this->load->helper('cookie');

   	}

	

	public function index(){

		

		$this->load->view('Admin/admin_login');

		

	}

	public function login(){

		$type=$this->input->post("userType");

		$name=$this->input->post("userid");

		$password=md5($this->input->post("password"));

		

		$where="UserType=$type and UserID='$name' and Password='$password'";

		$checkadmin=$this->Login_Model->checkadmin($where);

		if(sizeof($checkadmin)==0){

			redirect('adminlogin_controller');

		}

		else{

			foreach($checkadmin as $row){

				$UserID=$row["ID"];

				$UserType=$row["UserType"];

				$Password=$row["Password"];

				$WarehouseID=$row["WarehouseID"];

				$this->input->set_cookie('UserID',$UserID,43200);

				$this->input->set_cookie('UserType',$UserType,43200);

				$this->input->set_cookie('Password',$Password,43200);

				$this->input->set_cookie('WarehouseID',$WarehouseID,43200);

			}

			if($type=="1"){

				redirect('UserMaster');

			}

			else if($type=="2"){

				redirect('InStock');

			}

			else if($type=="3"){

				redirect('UserMaster');

			}

			else if($type=="4"){

				redirect('Consignment/consignment_delivery');

			}

			}

		}

	

	public function logout(){

		delete_cookie('UserID');

		delete_cookie('UserType');

		delete_cookie('Password');

		delete_cookie('WarehouseID');

		redirect('AdminLogin_Controller');

	}

	

	//Change password

	

	public function changepassword(){

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

		$this->load->view('Admin/changepassword');

	}

	

	public function NewPassword(){

		$Password=$this->input->cookie('Password',true);

		$UserID=$this->input->cookie('UserID',true);

		$Old=md5($this->input->post('old_pass'));

		$New=md5($this->input->post('new_pass'));
		
		if($Old==$Password){

			$data="Password='$New'";

			$where="ID=$UserID";

			$this->UserMaster_Model->UpdateUser($data,$where);
			$result=$this->UserMaster_Model->ShowUser($where);
			foreach($result as $row){

				delete_cookie('Password');

				$password=$this->input->set_cookie('Password',$row['Password'],43200);

			}
			redirect('Login_Controller/change_password');

		}

	}

	/*notification */

	public function notification(){

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

		$Notifications=$this->Login_Model->ShowAllNotification(1);

		foreach($Notifications as $row){

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

		$data["Notifications"]=$Notifications;

		$this->load->view('Admin/notification',$data);

		

	}
	public function specialitems(){
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
		$data["Items"]=$this->ItemMaster_Model->ShowItemMaster(1);
		$data["SpecialItems"]=$this->ItemMaster_Model->showspecialitems(1);
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Admin/specialitems',$data);
	}
	
	public function addspecialitems(){
		$ItemType=$this->input->post('itemtype',true);
		$ItemID=$this->input->post('itemid',true);
		$data=array(
			'ItemType'=>$ItemType,
			'ItemID'=>$ItemID,
		);
		$specialitems=$this->ItemMaster_Model->showspecialitems("a.ItemType=$ItemType");
		if(sizeof($specialitems)>=6){
			echo "<script type='text/javascript'>alert('Items more than 6');location.href='".base_url()."AdminLogin_Controller/specialitems';</script>";
		}else{
			$this->ItemMaster_Model->addspecialitems($data);
			redirect('AdminLogin_Controller/specialitems');
		}
	}
	
	public function deletespecialitems(){
		$ID=$this->uri->segment(3);
		$this->ItemMaster_Model->deletespecialitems("ID=$ID");
		redirect('AdminLogin_Controller/specialitems');
	}

	

   }

   ?>