<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



   Class VendorController extends  CI_Controller{

   	public function __construct(){

   		parent::__construct();
		$this->load->model('Login_Model');
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
		$head["type"]=$UserType;
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Vendors/vOrder');

	}
	
	public function vbill(){
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		$whereuser="ID=$UserID and UserType=$UserType";
		$UserName="";
		$user=$this->Login_Model->selectuser($whereuser);
		foreach($user as $rowuser){
			$UserName=$rowuser["FullName"];
		}
		$head['UserName']=$UserName;
		$head["type"]=$UserType;
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Vendors/VBillView');
	}
	
	public function vbillitem(){
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		$whereuser="ID=$UserID and UserType=$UserType";
		$UserName="";
		$user=$this->Login_Model->selectuser($whereuser);
		foreach($user as $rowuser){
			$UserName=$rowuser["FullName"];
		}
		$head['UserName']=$UserName;
		$head["type"]=$UserType;
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Vendors/VbillItem');
	}
	
	



   }

   ?>