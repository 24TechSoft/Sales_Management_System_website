<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class Product_Package extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('ProductPackage_Model');
		$this->load->model('Login_Model');
		$this->load->model('InStock_Model');
		$this->load->helper('url');
   	}
	
	public function index(){
		$data["item"]=$this->InStock_Model->SelectItem();
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
		$this->load->view('Admin/product_package',$data);
		
	}
	public function AddPackage(){						
		$ItemID=$this->input->post('item');
		$CategoryID=$this->input->post('categoryID');
		$PackageName=$this->input->post('packagename');
		$Quantity=$this->input->post('quantity');
		$Price=$this->input->post('price');
		$MinVendorQty=$this->input->post('minquantity');
		$data = array(
					'ItemID'=>$ItemID,
					'CategoryID'=>$CategoryID,
					'PackageName'=>$PackageName,
					'Quantity'=>$Quantity,
					'MinVendorQty'=>$MinVendorQty,
					'Price'=>$Price
					);
		$this->ProductPackage_Model->AddPackage($data);
	}



	public function ShowPackage()
			{
				$where="1";
				$result = $this->ProductPackage_Model->ShowPackage($where);
				echo json_encode($result);
			}
	public function DeletePackage()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$this->ProductPackage_Model->DeletePackage($where);
				redirect('Product_Package');
			}
	
	//Product Category
	public function productcategory(){
		$data["item"]=$this->InStock_Model->SelectItem();
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
		$this->load->view('Admin/product_category',$data);
	}
	
	public function AddCategory(){
		$category=$this->input->post('category');
		$data=array(
			'Category'=>$category
		);
		$this->ProductPackage_Model->AddCategory($data);
	}
	
	public function DisplayCategory(){
		$where=1;
		$result=$this->ProductPackage_Model->DisplayCategory($where);
		echo json_encode($result);
	}
	
	public function DeleteCategory(){
		$ID=$this->uri->segment(3);
		$where="ID=$ID";
		$this->ProductPackage_Model->DeleteCategory($where);
		redirect('Product_Package/productcategory');
	}
		

   }
   ?>