<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class DisplayS extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('CurrentStock_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Shopping_Model');
		$this->load->helper('url');
		$this->load->helper('cookie');
   	}
	
	public function index(){
		$this->load->view('shop_items');
	}
	
	
	//display Categories
	
	public function displayCategories(){
		$where=1;
		$result=$this->ItemMaster_Model->displayCategories($where);
		echo json_encode($result);
	}
	//displayProducts
	public function displayMenu(){
		$where=1;
		$result=$this->ItemMaster_Model->ShowItemMaster($where);
		echo json_encode($result);
	}
	//display Menu by categories
	public function menuByCategory(){
		$category=$this->input->get('category');
		$where="CategoryID=$category";
		$result=$this->ItemMaster_Model->menuByCategory($where);
		echo json_encode($result);
	}

   }
   ?>