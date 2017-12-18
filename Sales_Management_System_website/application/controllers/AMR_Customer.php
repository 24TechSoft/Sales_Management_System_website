<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMR_Customer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		require_once( "application/third_party/Facebook/autoload.php" );
		$this->load->library('Facebook');
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->model('VendorModel/AMR_VendorAreaModel');
		$this->load->model('VendorModel/AMR_VendorModel');
		$this->load->model('VendorModel/AMR_ItemModel');
		$this->load->model('VendorModel/AMR_VendorOrderModel');
		$this->load->model('CustomerModels/AMR_CustomerModel');
	}
	public function index()
	{
		$PinCode=$this->input->cookie("PinCode",true);
		if($PinCode!="" && $PinCode!=null)
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
			$data["PinCode"]=$PinCode;
			$data["Location"]=$Area[0]["Location"];
		}
		else
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		if($PinCode!="" && $PinCode!=null)
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCode($PinCode,0,0);
		}
		else
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCode(781038,0,0);
		}
		$data["Categories"]=$this->AMR_ItemModel->GetProductCategories(1);
		$this->load->view('Customer/Login',$data);
	}
	//Login
	public function Login()
	{
		$UserID=$this->input->post("UserID",true);
		$Password=md5($this->input->post("Password",true));
		$result=$this->AMR_CustomerModel->GetCustomer("(UserID='$UserID' or Email='$UserID' or PhoneNo='$UserID') and Password='$Password' and Status=1");
		//echo json_encode($result);
		if(sizeof($result)>0)
		{
			$this->input->set_cookie("CustomerID",$result[0]["ID"],448000);
			$this->input->set_cookie("CustomerName",$result[0]["Name"],448000);
			$IPAddress=$this->input->post("DeviceID",true);
			if($IPAddress==null || $IPAddress=="")
			{
				$IPAddress=getenv('REMOTE_ADDR');
			}
			$this->AMR_VendorOrderModel->UpdateQuantity("CustomerID=".$result[0]["ID"],"IPAddress='$IPAddress'");
			redirect("AMR_Home");
		}
		else
		{
			echo "<script>alert('If you are registered then your form needs to be confirmed first.');location.href='".base_url()."AMR_Home/LoginPage';</script>";
			redirect("AMR_Home/LoginPage");
		}
	}
	//Logout
	public function Logout()
	{
		delete_cookie('CustomerID');
		delete_cookie('CustomerName');
		$this->facebook->destroy_session();
		$IPAddress=$this->input->post("DeviceID",true);
		if($IPAddress==null || $IPAddress=="")
		{
			$IPAddress=getenv('REMOTE_ADDR');
		}
		$this->AMR_VendorOrderModel->RemoveFromCart("IPAddress='$IPAddress'");
		redirect("AMR_Home");
	}
	//Register
	public function Register()
	{
		$FirstName=$this->input->post("FirstName",true);
		$LastName=$this->input->post("LastName",true);
		$UserID=$this->input->post("UserID",true);
		$Email=$this->input->post("Email",true);
		$Phone=$this->input->post("Phone",true);
		$Password=md5($this->input->post("Password",true));
		$data=array("Name"=>$FirstName." ".$LastName,
					"PhoneNo"=>$Phone,
					"Email"=>$Email,
					"Address"=>"",
					"PinCode"=>"",
					"Vat"=>"",
					"UserID"=>$UserID,
					"Password"=>$Password,
					"OTP"=>rand(11111111,99999999),
					"Status"=>1
					);
		$this->AMR_CustomerModel->AddCustomer($data);
		//redirect("AMR_Home");
		$result=$this->AMR_CustomerModel->GetCustomer("(UserID='$UserID' or Email='$Email' or PhoneNo='$Phone') and Password='$Password' and Status=1");
		//echo json_encode($result);
		if(sizeof($result)>0)
		{
			$this->input->set_cookie("CustomerID",$result[0]["ID"],448000);
			$this->input->set_cookie("CustomerName",$result[0]["Name"],448000);
			$IPAddress=$this->input->post("DeviceID",true);
			if($IPAddress==null || $IPAddress=="")
			{
				$IPAddress=getenv('REMOTE_ADDR');
			}
			$this->AMR_VendorOrderModel->UpdateQuantity("CustomerID=".$result[0]["ID"],"IPAddress='$IPAddress'");
			redirect("AMR_Home");
		}
		else
		{
			redirect("AMR_Home/LoginPage");
		}
	}
	//Check UserID
	public function CheckUserID()
	{
		$UserID=$this->input->post("UserID",true);
		$result=$this->AMR_CustomerModel->GetCustomer("UserID='$UserID'");
		echo json_encode($result);
	}
	//Check Email ID
	public function CheckEmailID()
	{
		$EmailID=$this->input->post("EmailID",true);
		$result=$this->AMR_CustomerModel->GetCustomer("Email='$EmailID'");
		echo json_encode($result);
	}
	//Check Phone No
	public function CheckPhoneNo()
	{
		$PhoneNo=$this->input->post("PhoneNo",true);
		$result=$this->AMR_CustomerModel->GetCustomer("PhoneNo='$PhoneNo'");
		echo json_encode($result);
	}
	//Profile
	public function Profile()
	{
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		$data["Profile"]=$this->AMR_CustomerModel->GetCustomer("ID=".$data["CustomerID"]);
		$PinCode=$this->input->cookie("PinCode",true);
		if($PinCode!="" && $PinCode!=null)
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
			$data["PinCode"]=$PinCode;
			$data["Location"]=$Area[0]["Location"];
		}
		else
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		$this->load->view("Customer/Profile",$data);
	}
	public function UpdateProfile()
	{
		$CustomerID=$this->input->cookie("CustomerID",true);
		$Name=$this->input->post("Name",true);
		$UserID=$this->input->post("UserID",true);
		$Address=$this->input->post("Address",true);
		$PinCode=$this->input->post("PinCode",true);
		$PhoneNo=$this->input->post("PhoneNo",true);
		$EmailID=$this->input->post("EmailID",true);
		$Exist=$this->AMR_CustomerModel->GetCustomer("PhoneNo='$PhoneNo' and ID<>$CustomerID");
		if(sizeof($Exist)>0 && $PhoneNo!="")
		{
			$Error="Error";
			$Message="The Phone No is already used by another customer";
		}
		else
		{
			$Exist=$this->AMR_CustomerModel->GetCustomer("Email='$EmailID' and ID<>$CustomerID");
			if(sizeof($Exist)>0 && $EmailID!="")
			{
				$Error="Error";
				$Message="The Email ID is already used by another customer";
			}
			else
			{
				$this->AMR_CustomerModel->UpdateCustomer("PhoneNo='$PhoneNo', Email='$EmailID', Address='$Address',PinCode='$PinCode'","ID=$CustomerID");
				$Error="Success";
				$Message="Profile updated";
			}
		}		
		redirect("AMR_Customer/SuccessPage/$Error/$Message");
	}
	//Get Address By ID
	public function GetAddressByID()
	{
		$AddressID=$this->input->get("AddressID",true);
		$Address=$this->AMR_CustomerModel->GetCustomerAddress("ID=$AddressID");
		echo json_encode($Address);
	}
	//Recent Orders
	public function RecentOrders()
	{
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		$PinCode=$this->input->cookie("PinCode",true);
		if($PinCode!="" && $PinCode!=null)
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
			$data["PinCode"]=$PinCode;
			$data["Location"]=$Area[0]["Location"];
		}
		else
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		$data["OrderList"]=$this->AMR_VendorOrderModel->GetVendorOrders("CustomerID=".$data["CustomerID"]." order by ID desc");
		for($i=0;$i<sizeof($data["OrderList"]);$i++)
		{
			$data["OrderList"][$i]["OrderItems"]=$this->AMR_VendorOrderModel->GetOrderItems("OrderID=".$data["OrderList"][$i]["ID"]);
			$data["OrderList"][$i]["DeliveryAddress"]=$this->AMR_CustomerModel->GetCustomerAddress("ID=".$data["OrderList"][$i]["CusAddID"]);
		}
		$this->load->view("Customer/RecentOrders",$data);
	}
	//Order Detail
	public function OrderDetail()
	{
		$OrderID=$this->uri->segment(3);
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		$PinCode=$this->input->cookie("PinCode",true);
		if($PinCode!="" && $PinCode!=null)
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
			$data["PinCode"]=$PinCode;
			$data["Location"]=$Area[0]["Location"];
		}
		else
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		$data["OrderDetail"]=$this->AMR_VendorOrderModel->GetVendorOrders("ID=$OrderID and CustomerID=".$data["CustomerID"]);
		$data["OrderItems"]=$this->AMR_VendorOrderModel->GetOrderItems("OrderID=$OrderID");
		$data["DeliveryAddress"]=$this->AMR_CustomerModel->GetCustomerAddress("ID=".$data["OrderDetail"][0]["CusAddID"]);
		$this->load->view("Customer/OrderDetail",$data);
	}
	//Change Password
	public function ChangePassword()
	{
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		$PinCode=$this->input->cookie("PinCode",true);
		if($PinCode!="" && $PinCode!=null)
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
			$data["PinCode"]=$PinCode;
			$data["Location"]=$Area[0]["Location"];
		}
		else
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		$this->load->view("Customer/ChangePassword",$data);
	}
	public function ChangePasswordDone()
	{
		$OldPassword=md5($this->input->post("OldPassword",true));
		$NewPassword=md5($this->input->post("NewPassword",true));
		$ConfirmPassword=md5($this->input->post("ConfirmPassword",true));
		$CustomerID=$this->input->cookie("CustomerID",true);
		$result=$this->AMR_CustomerModel->GetCustomer("ID=$CustomerID and Password='$OldPassword'");
		$Message="";
		$Error="";
		if(sizeof($result)==0)
		{
			$Error="Failed";
			$Message="Wrong old Password";
		}
		else
		{
			$this->AMR_CustomerModel->UpdateCustomer("Password='$NewPassword'","ID=$CustomerID");
			$Error="Success";
			$Message="Password Changed Successfully";
		}
		redirect("AMR_Customer/SuccessPage/$Error/$Message");
	}
	public function SuccessPage()
	{
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		$PinCode=$this->input->cookie("PinCode",true);
		if($PinCode!="" && $PinCode!=null)
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
			$data["PinCode"]=$PinCode;
			$data["Location"]=$Area[0]["Location"];
		}
		else
		{
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		$data["Error"]=$this->uri->segment(3);
		$data["Message"]=$this->uri->segment(4);
		$this->load->view("Customer/SuccessPage",$data);
	}
}
