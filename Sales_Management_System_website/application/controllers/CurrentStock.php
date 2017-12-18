<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class CurrentStock extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('CurrentStock_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Login_Model');
		$this->load->helper('url');
   	}
	
	public function index(){
		$data["warehouse"]=$this->InStock_Model->SelectWarehouse();
		$data["item"]=$this->InStock_Model->SelectItem();
		//$data["stock"]=$this->InStock_Model->SelectStock();
		//$this->load->view('in-stoke',$data);
		$this->load->view('Admin/current_stock',$data);
	}
	public function FindQuantity(){			

		$Warehouse=$this->uri->segment(3);
		$Item=$this->uri->segment(4);
		$where="";
		$data="";
		if($Warehouse!='all'){
			$where="ItemID=$Item and WarehouseID=$Warehouse";
			$data="SUM(Quantity) as Quatity";
			}
		else{
		 $where="ItemID=$Item";
		 $data="SUM(Quantity) as Quatity";
		}
		$quantity=$this->CurrentStock_Model->FindQuantity($where,$data);
		echo json_encode($quantity);
	}



   }
   ?>