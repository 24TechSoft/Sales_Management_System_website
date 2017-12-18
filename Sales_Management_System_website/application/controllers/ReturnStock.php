<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class ReturnStock extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('ReturnStock_Model');
		$this->load->model('Login_Model');
		$this->load->model('InStock_Model');
		$this->load->model('Order_Model');
		$this->load->helper('url');
   	}
	
	public function index(){
		$UserType=$this->input->cookie('UserType',true);
		$WarehouseID=$this->input->cookie('WarehouseID',true);
		if($UserType==1){
			$where=1;
		}
		else if($UserType==2){
			$where="ID=$WarehouseID";
		}
		else if($UserType==3){
			$where=0;
		}
		$data["type"]=$UserType;
		$data["warehouse"]=$this->InStock_Model->SelectWarehouses($where);
		$data["item"]=$this->InStock_Model->SelectItem();
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
		$this->load->view('Admin/return-stock',$data);
		
	}
	public function AddReturnStock(){			
		$WarehouseNot=$this->input->cookie('WarehouseID',true);
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
	
		$Warehouse=$this->input->post('warehouse');
		$Item=$this->input->post('item');
		$ReturnDate=$this->input->post('date');
		$PackageQuantity=$this->input->post('quantity');
		$Remarks=$this->input->post('description');
		$StuffOrder=$this->input->post('stufforder');
		$Bill=$this->input->post('bill');
		$where="WarehouseID=$Warehouse and ItemID=$Item";	
		$data = array(
					 'WarehouseID'=>$Warehouse,
					 'ItemID'=>$Item,
					 'Date'=>$ReturnDate,
					  'PackageQuantity'=>$PackageQuantity,
					 'Quantity'=>$Quantity,
					 'Remarks'=>$Remarks,
					  'StuffOrder'=>$StuffOrder,
					   'Bill'=>$Bill,
					);
		$this->ReturnStock_Model->AddReturnStock($data);
		/*notification*/
		
		/*order item updated */
		$data_noti=array(
			'SourceUserID'=>$UserID,
			'SourceUserType'=>$UserType,
			'WarehouseID'=>$WarehouseNot,
			'Detail'=>"Stock returned at WarehouseID ".$WarehouseNot,
			'Type'=>8,
			'Date'=>date('Y-m-d'),
		);
		echo json_encode($data_noti);
		$this->Order_Model->addNotification($data_noti);
		/*notification*/
		
		$iteminstock=$this->InStock_Model->itemInstock($where);
		if(sizeof($iteminstock)==0){
			$datac=array(
				'WarehouseID'=>$Warehouse,
				'ItemID'=>$Item,
				'Quantity'=>$Quatity,
			
			);
			$this->InStock_Model->AddCurrent_Stock($datac);
			
			
		}
		else{
			$datac="Quantity=Quantity+$Quatity";
			$this->InStock_Model->updateCurrent_Stock($datac,$where);
			
		}
	}



	public function ShowreturnStock()
			{
				$UserType=$this->input->cookie('UserType',true);
				$WarehouseID=$this->input->cookie("WarehouseID",true);
				if($UserType==1){
					$where=1;
				}
				else if($UserType==2){
					$where="a.WarehouseID=$WarehouseID";
				}
				else if($UserType==3){
					$where=1;
				}
				$result = $this->ReturnStock_Model->ShowreturnStock($where);
				echo json_encode($result);
			}
	public function DeleteReturnStock()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$this->ReturnStock_Model->DeleteReturnStock($where);
				redirect('ReturnStock');
			}
	
	public function UpdateCourse_master(){
		//ID,CourseName,CourseType,CourseDetail,Photo,Duration
		$ID=$this->uri->segment(3);
		$CourseName=$this->input->post('CourseName');
		$CourseType=$this->input->post('CourseType');
		$CourseDetail=$this->input->post('CourseDetail');
		$Duration=$this->input->post('Duration');
		$ran="";
		$hiddenPhoto=$this->input->post('hdPhoto');
		// abc
		if((!empty($_FILES["Photo"]["name"])))
			{
					$validextensions = array("jpeg", "jpg", "png");
					$temporary = explode(".", $_FILES["Photo"]["name"]);
					
					$file_extension = end($temporary);
					
					if ((($_FILES["Photo"]["type"] == "image/png") || ($_FILES["Photo"]["type"] == "image/jpg") || ($_FILES["Photo"]["type"] == "image/jpeg"))
					&& ($_FILES["Photo"]["size"] < 1000000) && in_array($file_extension, $validextensions))
						 {
							if ($_FILES["Photo"]["error"] > 0)
							{
							echo "Return Code: " . $_FILES["Photo"]["error"] . "<br/><br/>";
							}
							else
							{
								$sourcePath = $_FILES['Photo']['tmp_name']; // Storing source path of the file in a variable
								
								$ran1 = rand(111111,99999999).".".$file_extension;
								
								$targetPath = "./CoursePhoto/".$ran1; // Target path where file is to be stored
								
								if(move_uploaded_file($sourcePath,$targetPath)) // Moving Uploaded file
								{
									$ran=$ran1;
								}
							 }
						}
					}
				else{
					$ran=$hiddenPhoto;
				}
			
					$data="CourseName='$CourseName',CourseType='$CourseType',CourseDetail='$CourseDetail',Duration='$Duration',Photo='$ran'";
					$where="ID=$ID";
				$this->load->model('CourseMaster_Model');
				$this->CourseMaster_Model->UpdateCourse($data,$where);
		
		
		
	}

   }
   ?>