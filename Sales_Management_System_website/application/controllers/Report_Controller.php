<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class Report_Controller extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('InStock_Model');
		$this->load->model('ItemMaster_Model');
		$this->load->model('Login_Model');
		$this->load->helper('url');
   	}
	
	public function index(){
		$where="1";
		$data["item"]=$this->ItemMaster_Model->ShowItemMaster($where);
		$data["warehouse"]=$this->InStock_Model->SelectWarehouse();
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
		$this->load->view('Admin/stock_report',$data);
		
	}
	
	public function checkstocks(){
		$ItemName=$this->input->post('itemname',true);
		$Warehouse=$this->input->post('warehouse',true);
		$FDate=$this->input->post('fdate',true);
		$TDate=$this->input->post('tdate',true);
		$namewhere="";
		$housewhere="";
		$datewhere="";
		$where="";
		if($ItemName!=""){
			if($ItemName==0){
				//housewhere=1;
			}
			else{
				$namewhere="ItemID = ".$ItemName."";
			}	
		}
			
		if($Warehouse!=""){
			if($Warehouse==0){
				//housewhere=1;
			}
			else{
				$housewhere="WarehouseID = ".$Warehouse." ";
			}
		}
			
		if(($FDate!="") and ($TDate!="")){
				$datewhere="Date between '".$FDate."' and '".$TDate."'";                
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
					$where=$where." and ";
				}
				$where=$where.$datewhere;
			}
		if($where=="")
		{
			$where="1";
		}
		$result=$this->InStock_Model->checkstocks($where);
		echo json_encode($result);
	
	}
	
	public function availitem(){
		$item=$this->input->post('itemname');
		$warehouse=$this->input->post('warehouse');
		$where="";
		
			$where="a.ItemID=$item and a.WarehouseID=$warehouse";
		
		
		if(($item!="0")||($warehouse!="0")){
			$result=$this->InStock_Model->currentitems($where);
			
		}
		else{
			$result="";
			
		}
		echo json_encode($result);
	}
	
	
	//Instock Report
	
	public function instock(){
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
		$wherei="1";
		$data["item"]=$this->ItemMaster_Model->ShowItemMaster($wherei);
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
		$this->load->view('Admin/instock_report',$data);
	}
	
	public function checkinstocks(){
		$ItemName=$this->input->post('itemname',true);
		$Warehouse=$this->input->post('warehouse',true);
		$FDate=$this->input->post('fdate',true);
		$TDate=$this->input->post('tdate',true);
		$namewhere="";
		$housewhere="";
		$datewhere="";
		$where="";
		if($ItemName!=""){
			if($ItemName==0){
				//housewhere=1;
			}
			else{
				$namewhere="ItemID like '%".$ItemName."%'";
			}	
		}
			
		if($Warehouse!=""){
			if($Warehouse==0){
				//housewhere=1;
			}
			else{
				$housewhere="WarehouseID = ".$Warehouse." ";
			}
		}
			
		if(($FDate!="") && ($TDate!="")){
				$datewhere="Date between '".$FDate."' and '".$TDate."'";
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
					$where=$where." and ";
				}
				$where=$where.$datewhere;
			}
		if($where=="")
		{
			$where="1";
		}
		$result=$this->InStock_Model->checkinstock($where);
		echo json_encode($result);
	
	}
	//Check outstock or sale stock report
	public function outstock(){
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
		$wherei="1";
		$data["item"]=$this->ItemMaster_Model->ShowItemMaster($wherei);
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
		$this->load->view('Admin/sale_report',$data);
	}
	
	public function checksalestock(){
		$ItemName=$this->input->post('itemname',true);
		$Warehouse=$this->input->post('warehouse',true);
		$FDate=$this->input->post('fdate',true);
		$TDate=$this->input->post('tdate',true);
		$namewhere="";
		$housewhere="";
		$datewhere="";
		$where="";
		if($ItemName!=""){
			if($ItemName==0){
				//housewhere=1;
			}
			else{
				$namewhere="ItemID like '%".$ItemName."%'";
			}	
		}
			
		if($Warehouse!=""){
			if($Warehouse==0){
				//housewhere=1;
			}
			else{
				$housewhere="WarehouseID = ".$Warehouse." ";
			}
		}
			
		if(($FDate!="") && ($TDate!="")){
				$datewhere="Date between '".$FDate."' and '".$TDate."'";
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
					$where=$where." and ";
				}
				$where=$where.$datewhere;
			}
		if($where=="")
		{
			$where="1";
		}
		$result=$this->InStock_Model->checksalestock($where);
		echo json_encode($result);
	
	}
	
	//Check return stock report
	public function returnstock(){
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
		$wherei="1";
		$data["item"]=$this->ItemMaster_Model->ShowItemMaster($wherei);
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
		$this->load->view('Admin/return_report',$data);
	}
	
	public function checkreturnstock(){
		$ItemName=$this->input->post('itemname',true);
		$Warehouse=$this->input->post('warehouse',true);
		$FDate=$this->input->post('fdate',true);
		$TDate=$this->input->post('tdate',true);
		$namewhere="";
		$housewhere="";
		$datewhere="";
		$where="";
		if($ItemName!=""){
			if($ItemName==0){
				//housewhere=1;
			}
			else{
				$namewhere="ItemID like '%".$ItemName."%'";
			}	
		}
			
		if($Warehouse!=""){
			if($Warehouse==0){
				//housewhere=1;
			}
			else{
				$housewhere="WarehouseID = ".$Warehouse." ";
			}
		}
			
		if(($FDate!="") && ($TDate!="")){
				$datewhere="Date between '".$FDate."' and '".$TDate."'";
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
					$where=$where." and ";
				}
				$where=$where.$datewhere;
			}
		if($where=="")
		{
			$where="1";
		}
		$result=$this->InStock_Model->checkreturnstock($where);
		echo json_encode($result);
	
	}
	//Check damage stock report
	public function damagestock(){
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
		$wherei="1";
		$data["item"]=$this->ItemMaster_Model->ShowItemMaster($wherei);
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
		$this->load->view('Admin/damage_report',$data);
	}
	
	public function checkdamagestock(){
		$ItemName=$this->input->post('itemname',true);
		$Warehouse=$this->input->post('warehouse',true);
		$FDate=$this->input->post('fdate',true);
		$TDate=$this->input->post('tdate',true);
		$namewhere="";
		$housewhere="";
		$datewhere="";
		$where="";
		if($ItemName!=""){
			if($ItemName==0){
				//housewhere=1;
			}
			else{
				$namewhere="ItemID like '%".$ItemName."%'";
			}	
		}
			
		if($Warehouse!=""){
			if($Warehouse==0){
				//housewhere=1;
			}
			else{
				$housewhere="WarehouseID = ".$Warehouse." ";
			}
		}
			
		if(($FDate!="") && ($TDate!="")){
				$datewhere="Date between '".$FDate."' and '".$TDate."'";
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
					$where=$where." and ";
				}
				$where=$where.$datewhere;
			}
		if($where=="")
		{
			$where="1";
		}
		$result=$this->InStock_Model->checkdamagestock($where);
		echo json_encode($result);
	
	}
	
	
   }
   ?>