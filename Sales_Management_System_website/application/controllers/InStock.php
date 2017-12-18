<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class InStock extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('InStock_Model');
		$this->load->model('CurrentStock_Model');
		$this->load->model('Login_Model');
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
		
		$data["warehouse"]=$this->InStock_Model->SelectWarehouses($where);
		$data["item"]=$this->InStock_Model->SelectItem();
		$data["type"]=$UserType;
		$wherei=1;
		$data["package"]=$this->InStock_Model->ShowPackage($wherei);
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
		$this->load->view('Admin/in-stoke',$data);
		
	}
	public function AddInStock(){			

		$Warehouse=$this->input->post('warehouse');
		$Item=$this->input->post('item');
		$EntryDate=$this->input->post('date');
		$PackageQuantity=$this->input->post('quantity');
		
		$Remarks=$this->input->post('description');
		$Package=$this->input->post("package");
		$PackageID= substr($Package,0,strpos($Package,"(",0));
        $PackageName= substr($Package,strpos($Package,"(")+1,strlen($Package)-strpos($Package,"(")-2);
		$wherep="ID=$PackageID";
		//echo $wherep;
		$QuantityPackage=$this->InStock_Model->PackageQuantity($wherep);
		$Quantity=0.00;
		foreach($QuantityPackage as $row){
			$Quantity = $row["Quantity"];
		}
		$where="WarehouseID=$Warehouse and ItemID=$Item";		
		$data = array(
					 'WarehouseID'=>$Warehouse,
					 'ItemID'=>$Item,
					 'Date'=>$EntryDate,
					 'PackageQuantity'=>$PackageQuantity,
					 'Quantity'=>$Quantity,
					 'Remarks'=>$Remarks,
					  'PackageID'=>$PackageID,
					   'PackageName'=>$PackageName
					);
		$this->InStock_Model->AddInStock($data);
		
		/*notification*/
		$WarehouseNot=$this->input->cookie('WarehouseID',true);
		$UserType=$this->input->cookie('UserType',true);
		$UserID=$this->input->cookie('UserID',true);
		
		/*order item updated */
		$data_noti=array(
			'SourceUserID'=>$UserID,
			'SourceUserType'=>$UserType,
			'WarehouseID'=>$WarehouseNot,
			'Detail'=>"New Stock added at WarehouseID ".$WarehouseNot,
			'Type'=>5,
			'Date'=>date('Y-m-d'),
		);
		//echo json_encode($data_noti);
		$this->Order_Model->addNotification($data_noti);
		/*notification*/
		$CurrentQuantity=$PackageQuantity*$Quantity;
		$iteminstock=$this->InStock_Model->itemInstock($where);
		if(sizeof($iteminstock)==0){
			$datac=array(
				'WarehouseID'=>$Warehouse,
				'ItemID'=>$Item,
				'Quantity'=>$CurrentQuantity,
			
			);
			$this->InStock_Model->AddCurrent_Stock($datac);
		}
		else{
			$datac="Quantity=Quantity+$CurrentQuantity";
			$this->InStock_Model->updateCurrent_Stock($datac,$where);
			
		}
		
		
		
	}

	public function ShowInStock()
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
				$result = $this->InStock_Model->ShowInStock($where);
				echo json_encode($result);
			}

	
	public function DeleteInStock()
			{
				$ID=$this->uri->segment(3);
				$where="ID=$ID";
				$whereinstock="a.ID=$ID";
				$result=$this->InStock_Model->ShowInStock($whereinstock);
				$Quantity=0.00;
				$ItemID=0;
				$WarehouseID=0;
				$PackageQuantity=0.00;
				foreach($result as $row){
					$ItemID=$row["ItemID"];
					$Quantity=$row["Quantity"];
					$WarehouseID=$row["WarehouseID"];
					$PackageQuantity=$row["PackageQuantity"];
				}
				$ActualQuantity=$PackageQuantity*$Quantity;
				$data="Quantity=Quantity - $ActualQuantity";
				$wherestock="ItemID=$ItemID and WarehouseID=$WarehouseID";
				$this->InStock_Model->DeleteInStock($where);
				$this->CurrentStock_Model->UpdateQuantity($data,$wherestock);
				redirect('InStock');
			}
			
	public function ShowPackage(){
		$item=$this->uri->segment(3);
		
		$where="ItemID=$item";
		$result=$this->InStock_Model->ShowPackage($where);
		echo json_encode($result);
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