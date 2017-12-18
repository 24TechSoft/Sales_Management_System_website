<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class ItemMaster extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('ItemMaster_Model');
		$this->load->model('Login_Model');
		$this->load->helper('url');
		$this->load->model('ProductPackage_Model');
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
		
		$ID=$this->uri->segment(3);
		if(($ID!="")||($ID!=0)||($ID!=null)){
			$whereitem="a.ID=$ID";
		}else{
			$whereitem=0;
		}
		$data["Items"]=$this->ItemMaster_Model->ShowItemMaster($whereitem);
		$where=1;
		$data['category']=$this->ProductPackage_Model->DisplayCategory($where);
		$this->load->view('Admin/admin_header',$head);
		$this->load->view('Admin/item-master',$data);
		
	}
	public function AddItemMaster(){			
		$Name=$this->input->post('name');
		$Category=$this->input->post('category');
		$ItemDescription=$this->input->post('description');
		$CurrrentPrice=$this->input->post('currentPrice');
		$ranIm1="";
		if(!empty($_FILES["photo"]["name"])){
			$temporary1 = explode(".", $_FILES["photo"]["name"]);
			$file_extension1 = end($temporary1);
			$sourcePath1 = $_FILES['photo']['tmp_name']; // Storing source path of the file in a variable
			$ranI1 = rand(111111,99999999).".".$file_extension1;
			$targetPath1 = "./ItemPhoto/".$ranI1; // Target path where file is to be stored
			if(move_uploaded_file($sourcePath1,$targetPath1)) // Moving Uploaded file
			{
				$ranIm1=$ranI1;
			}
		}
		$data = array(
					'Name'=>$Name,
					'CategoryID'=>$Category,
					 'ItemDescription'=>$ItemDescription,
					 'CurrentPrice'=>$CurrrentPrice,
					 'Photo'=>$ranIm1
					);
		$this->ItemMaster_Model->AddItemMaster($data);
	}



	public function ShowItemMaster()
			{
				$where="1 order by a.ID desc";
				$result = $this->ItemMaster_Model->ShowItemMaster($where);
				echo json_encode($result);
			}
	public function DeleteItemMaster()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$this->ItemMaster_Model->DeleteItemMaster($where);
				redirect('ItemMaster');
			}
	
	public function category(){
		$ID=$this->uri->segment(3);
		$where="a.ID=$ID";
		$result=$this->ItemMaster_Model->ShowItemMaster($where);
		echo json_encode($result);
	}
	
	public function UpdateItem(){
		$ID=$this->uri->segment(3);
		$where="ID=$ID";
		$CategoryID=$this->input->post('Category');
		$CurrentPrice=$this->input->post('CurrentPrice');
		$data="CategoryID=$CategoryID,CurrentPrice=$CurrentPrice";
		$this->ItemMaster_Model->UpdateItem($data,$where);
	}
	
   }
   ?>