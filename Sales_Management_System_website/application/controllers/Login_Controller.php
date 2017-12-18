<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class Login_Controller extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();

		$this->load->model('Login_Model');

		$this->load->model('Shopping_Model');

		$this->load->model('CustomerMaster_Model');

		$this->load->helper('url');

		$this->load->helper('cookie');

   	}

	

	public function index(){

		$customerID=$this->input->cookie('CustomerID',true);

		

		$data["CustomerID"]=$customerID;

		$this->load->view('Main/login.php',$data);

		

	}

	public function login(){

		$name=$this->input->post("Name");

		$password=md5($this->input->post("Password"));

		$where="userID='$name' and password='$password'";

		$checkuser=$this->Login_Model->checkuser($where);

		if(sizeof($checkuser)==0){

			echo json_encode(1);

			//echo json_encode("you need to sign up to login");

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
				
				$updatedata="CustomerID=$userID";
				$where="IpAddress='$ipaddress'";
				$this->Login_Model->updateShopCart($updatedata,$where);

			}
				echo json_encode("you can proceed");
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

		

		redirect('/shopping_controller');

	}

	public function signup(){

		$data["CustomerID"]=0;

		$this->load->view('Main/signup',$data);

	}

	public function addcustomer(){

		$Name=$this->input->post('name');

		$Email=$this->input->post('email');

		$Phone=$this->input->post('phone');

		$Address=$this->input->post('address');

		$UserID=$this->input->post('userID');
		
		$code=md5(substr(str_shuffle('0123456789'), 0,6));

	//	$Password=md5($this->input->post('password'));

		$data=array(

			'Name'=>$Name,

			'Email'=>$Email,

			'PhoneNo'=>$Phone,

			'Address'=>$Address,

			'UserID'=>$UserID,
			
			'OTP'=>$code,
			'Status'=>0,

				);

		$this->CustomerMaster_Model->Addcustomermaster($data);
		
		
		$result=$this->SendOTP($Email);
		
		$updatedata="OTP='',Status=1";
		$where="Email='$Email'";
		$this->Login_Model->setPassword($updatedata,$where);
		echo json_encode($result);

	}

	

	public function about(){

		$customerID=$this->input->cookie('CustomerID',true);

		

		$data["CustomerID"]=$customerID;

		$this->load->view('Main/about-us.php',$data);

	}
	
	public function SendOTP($Email){
		require("PHPMailer_5.2.1/class.phpmailer.php");
		$mail = new PHPMailer();
		$where="Email='$Email'";
		$CustomerDetail=$this->Login_Model->selectCustomer($where);
		$Name="";
		$PhoneNo="";
		$OTP="";
		$Subject="Account Activation";
		foreach($CustomerDetail as $row){
			$Name=$row["Name"];
			$OTP=md5($row["OTP"]);
			
		}
		$Message="";
		try 
		{
			$message="Hello ".$Name."!! Please <a href='http://www.abad.in/Login_Controller/newpassword/".$OTP."'>Click here</a> to activate your account";
			
			$mail->IsSMTP();
			$mail->AddAddress($Email);
			$mail->SetFrom('info@zassociates.in');/*change address*/
			$mail->Subject = $Subject;
			$mail->Body=$message;
			$mail->Send();
			$Message="Check your mail to activate your account.";
		} 
		catch (phpmailerException $e) 
		{
			$Message="Failed! Resend your email address";
		} 
		catch (Exception $e) 
		{
			$Message="Failed!! Resend your email address";
		}
		
		echo json_encode($Message);
	
	
	}
	
	public function newpassword(){
		$OTP=$this->uri->segment(3);
		$where="OTP='$OTP'";
		$CustomerID=0;
		$CustomerDetail=$this->Login_Model->selectCustomer($where);
		foreach($CustomerDetail as $row){
			$userID=$row["ID"];
			$UserName=$row["Name"];
			$this->input->set_cookie('CustomerID',$userID,43200);
			$this->input->set_cookie('CustomerName',$userID,43200);
			
		}
		$data["CustomerName"]=$this->input->cookie('CustomerName',true);
		$data["CustomerID"]=$this->input->cookie('CustomerID',true);
		$this->load->view('Main/newpassword',$data);
	}
	
	public function setPassword(){
		$ID=$this->input->cookie('CustomerID',true);
		$where="ID=$ID";
		$password=md5($this->input->post('password'));
		$data="Password='$password'";
		$this->Login_Model->setPassword($data,$where);
		redirect('shopping_controller');
	}
	
	public function generateOTP(){
		$Email=$this->input->post('email');
		$code=md5(substr(str_shuffle('0123456789'), 0,6));
		$updatedata="OTP='$code'";
		$where="Email='$Email";
		$this->Login_Model->setPassword($updatedata,$where);
		$result=$this->SendOTP($Email);
		
		$updatedata="OTP='',Status=1";
		$where="Email='$Email'";
		$this->Login_Model->setPassword($updatedata,$where);
		echo json_encode($result);
		
	}

	

   }

   ?>