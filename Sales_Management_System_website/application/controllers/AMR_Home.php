<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMR_Home extends CI_Controller {
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
		if($PinCode!="" && $PinCode!=null)
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCode($PinCode,0,0);
		}
		else
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCode(781038,0,0);
		}
		$data["RecentlyAdded"]=$this->AMR_ItemModel->GetSpecialItems(1);
		$data["HotSellings"]=$this->AMR_ItemModel->GetSpecialItems(2);
		$data["Categories"]=$this->AMR_ItemModel->GetProductCategories("1");
		$this->load->view('Customer/Home',$data);
	}
	//Products by Category
	public function Products()
	{
		$Category=$this->uri->segment(3);
		if($Category=="" || $Category==null)
		{
			redirect("AMR_Home");
		}
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
		if($PinCode!="" && $PinCode!=null)
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCode($PinCode,$Category,0);
		}
		else
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCode(781038,$Category,0);
		}
		$data["Categories"]=$this->AMR_ItemModel->GetProductCategories("1");
		$this->load->view("Customer/Products",$data);
	}
	//Products By Search
	public function Search()
	{
		$SearchText=$this->input->get("SearchText",true);
		if($SearchText==null || $SearchText=="")
		{
			$SearchText="";
		}
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
		if($PinCode!="" && $PinCode!=null)
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCodeAndSearch($PinCode,$SearchText);
		}
		else
		{
			$data["ItemList"]=$this->AMR_ItemModel->GetItemsByPinCodeAndSearch(781038,$SearchText);
		}
		$data["Categories"]=$this->AMR_ItemModel->GetProductCategories("1");
		$data["SearchText"]=$SearchText;
		$this->load->view("Customer/Search",$data);
	}
	public function ProductDetail()
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
			$Pincode=781038;
			$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=781038");
			$data["PinCode"]=781038;
			$data["Location"]=$Area[0]["Location"];
			$this->input->set_cookie("PinCode",781038,43200);
		}
		$ItemID=$this->uri->segment(3);
		$data["ItemDetail"]=$this->AMR_ItemModel->GetItemDetailByID($ItemID);
		$data["VendorList"]=$this->AMR_ItemModel->GetVendorList($ItemID,$PinCode);
		$count=-1;
		foreach($data["VendorList"] as $row)
		{
			$count++;
			$data["VendorList"][$count]["Packages"]=$this->AMR_ItemModel->GetItemPackage($ItemID,$row["ID"]);
		}
		//echo json_encode($data["VendorList"]);
		$data["Categories"]=$this->AMR_ItemModel->GetProductCategories("1");
		$this->load->view("Customer/ProductDetail",$data);
	}
	//Check Location API
	public function CheckLocation()
	{
		$PinCode=$this->input->post("PinCode",true);
		$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
		echo json_encode($Area);
	}
	public function ShoppingCart()
	{
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		
		$IPAddress=getenv('REMOTE_ADDR');
		$data["CartItems"]=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress'");
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
		$this->load->view("Customer/Cart",$data);
	}
	//Check Out Page
	public function CheckOut()
	{
		$data["CustomerID"]=$this->input->cookie("CustomerID",true);
		$data["CustomerName"]=$this->input->cookie("CustomerName",true);
		if($data["CustomerID"]!=null && $data["CustomerID"]!="")
		{
			$IPAddress=getenv('REMOTE_ADDR');
			$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress'");
			if(sizeof($CartItems)==0)
			{
				redirect("AMR_Home");
			}
			$CartTotal=0.00;
			foreach($CartItems as $row)
			{
				$CartTotal=$CartTotal+$row["TotalPrice"];
			}
			if($CartTotal>500)
			{
				$DeliveryCharge=0.00;
			}
			else
			{
				$DeliveryCharge=50.00;
			}
			$data["TotalAmount"]=$CartTotal;
			$data["DeliveryCharge"]=$DeliveryCharge;
			$data["Addresses"]=$this->AMR_CustomerModel->GetCustomerAddress("CustomerID=".$data["CustomerID"]);
			$this->load->view("Customer/Checkout",$data);
		}
		else
		{
			redirect("AMR_Customer");
		}
	}
	//Login Page
	public function LoginPage()
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
		$data['user'] = array();

		// Check if user is logged in
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email');
			if (!isset($user['error']))
			{
				$data['user'] = $user;
				$result=$this->AMR_CustomerModel->GetCustomer("Email='".$user["email"]."' and Status=1");
				if(sizeof($result)>0)
				{
					$this->input->set_cookie("CustomerID",$result[0]["ID"],448000);
					$this->input->set_cookie("CustomerName",$result[0]["Name"],448000);
					redirect("AMR_Home");
				}
				else
				{
					$data=array("Name"=>$user["name"],
					"PhoneNo"=>"",
					"Email"=>$user["email"],
					"Address"=>"",
					"PinCode"=>"",
					"Vat"=>"",
					"UserID"=>$user["id"],
					"Password"=>md5(rand(11111111,99999999)),
					"OTP"=>"",
					"Status"=>1
					);
					$this->AMR_CustomerModel->AddCustomer($data);
					$result=$this->AMR_CustomerModel->GetCustomer("Email='".$user["email"]."' and Status=1");
					if(sizeof($result)>0)
					{
						$this->input->set_cookie("CustomerID",$result[0]["ID"],448000);
						$this->input->set_cookie("CustomerName",$result[0]["Name"],448000);
						redirect("AMR_Home");
					}
				}
			}
		}
		else
		{
			$this->load->view("Customer/Login",$data);
		}
	}
	//Registration Page
	public function RegistrationPage()
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
		$this->load->view("Customer/Registration",$data);
	}
}
