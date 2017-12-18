<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMR_API extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->model('VendorModel/AMR_VendorAreaModel');
		$this->load->model('VendorModel/AMR_VendorModel');
		$this->load->model('VendorModel/AMR_ItemModel');
		$this->load->model('VendorModel/AMR_VendorOrderModel');
		$this->load->model('CustomerModels/AMR_CustomerModel');
	}
	//Check for Duplicate Email
	public function GetDuplicateEmail()
	{
		$Email=$this->input->post("Email",true);
		$result=$this->AMR_CustomerModel->GetCustomer("Email='$Email'");
		if(sizeof($result)>0)
		{
			echo json_encode(array("Error"=>1,"Message"=>"Already Exist"));
		}
		else
		{
			echo json_encode(array("Error"=>0,"Message"=>"Congrats, Email is not registered"));
		}
	}
	//Check for Duplicate PhoneNo
	public function GetDuplicatePhone()
	{
		$Phone=$this->input->post("Phone",true);
		$result=$this->AMR_CustomerModel->GetCustomer("PhoneNo=='$Phone'");
		if(sizeof($result)>0)
		{
			echo json_encode(array("Error"=>1,"Message"=>"Already Exist"));
		}
		else
		{
			echo json_encode(array("Error"=>0,"Message"=>"Congrats, Phone No is not registered"));
		}
	}
	//Check for Duplicate UserID
	public function GetDuplicateUserID()
	{
		$UserID=$this->input->post("UserID",true);
		$result=$this->AMR_CustomerModel->GetCustomer("UserID=='$UserID'");
		if(sizeof($result)>0)
		{
			echo json_encode(array("Error"=>1,"Message"=>"Already Exist"));
		}
		else
		{
			echo json_encode(array("Error"=>0,"Message"=>"Congrats, User ID is not registered"));
		}
	}
	//Create Account
	public function CreateAccount()
	{
		$FirstName=$this->input->post("FirstName",true);
		$LastName=$this->input->post("LastName",true);
		$UserID=$this->input->post("UserID",true);
		$Email=$this->input->post("Email",true);
		$Phone=$this->input->post("Phone",true);
		$Password=md5($this->input->post("Password",true));
		$result=$this->AMR_CustomerModel->GetCustomer("Email='$Email' or PhoneNo='$Phone' or UserID='$UserID'");
		if(sizeof($result)==0)
		{
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
			echo json_encode(array("Error"=>0,"Message"=>"Account created"));
		}
		else
		{
			echo json_encode(array("Error"=>1,"Message"=>"Already Exist"));
		}
	}
	//Update Account
	public function UpdateAccount()
	{
		$ID=$this->input->post("ID",true);
		$Email=$this->input->post("Email",true);
		$PhoneNo=$this->input->post("PhoneNo",true);
		$Address=$this->input->post("Address",true);
		$PinCode=$this->input->post("PinCode",true);
		$Vat=$this->input->post("Vat",true);
		$this->AMR_CustomerModel->UpdateCustomer("Email='$Email', PhoneNo='$PhoneNo', Address='$Address', Pincode='$PinCode',Vat='$Vat'","ID=$ID");
		echo json_encode(array("Error"=>0,"Message"=>"Done"));
	}
	//Update Password
	public function UpdatePassword()
	{
		$ID=$this->input->post("ID");
		$OldPassword=md5($this->input->post("OldPassword"));
		$NewPassword=md5($this->input->post("NewPassword"));
		$result=$this->AMR_CustomerModel->GetCustomer("Password='$OldPassword' and ID=$ID");
		if(sizeof($result)>0)
		{
			$this->AMR_CustomerModel->UpdateCustomer("Password='$NewPassword'","ID=$ID");
			echo json_encode(array("Error"=>0,"Message"=>"Done"));
		}
		else
		{
			echo json_encode(array("Error"=>1,"Message"=>"Old password is not matching"));
		}
	}
	//Login
	public function Login()
	{
		$UserID=$this->input->post("UserID",true);
		$Password=md5($this->input->post("Password",true));
		$result=$this->AMR_CustomerModel->GetCustomer("Password='$Password' and (Email='$UserID' or PhoneNo='$UserID' or UserID='$UserID')");
		echo json_encode($result);
	}
	//Get Items
	public function GetItems()
	{
		$PinCode=$this->input->post("PinCode",true);
		if($PinCode=="" || $PinCode==null)
		{
			$PinCode=781038;
		}
		$result=$this->AMR_ItemModel->GetItemsByPinCode($PinCode,0,0);
		for($i=0;$i<sizeof($result);$i++)
		{
			$result[$i]["Packages"]=$this->AMR_ItemModel->GetItemPackage($result[$i]["ItemID"],3);
		}
		echo json_encode($result);
	}
	public function GetSpecialItems()
	{
		$ItemType=$this->input->post("ItemType",true);
		$result=$this->AMR_ItemModel->GetSpecialItems($ItemType);
		for($i=0;$i<sizeof($result);$i++)
		{
			$result[$i]["Packages"]=$this->AMR_ItemModel->GetItemPackage($result[$i]["ID"],3);
		}
		echo json_encode($result);
	}
	//Get Categories
	public function GetCategories()
	{
		$ID=$this->input->post("ID",true);
		//echo $ID;
		$where="1";
		if($ID==null || $ID=="")
		{
			$where="1";
		}
		else
		{
			$where="ID=$ID";
		}
		$result=$this->AMR_ItemModel->GetProductCategories($where);
		echo json_encode($result);
	}
	//Get Items By Category
	public function GetItemsByCategory()
	{
		$Category=$this->input->post("Category",true);
		$PinCode=$this->input->post("PinCode",true);
		if($PinCode=="" || $PinCode==null)
		{
			$PinCode=781038;
		}
		$result=$this->AMR_ItemModel->GetItemsByPinCode($PinCode,$Category,0);
		for($i=0;$i<sizeof($result);$i++)
		{
			$result[$i]["Packages"]=$this->AMR_ItemModel->GetItemPackage($result[$i]["ItemID"],3);
		}
		echo json_encode($result);
	}
	//Get Item By Search
	public function GetItemsBySearch()
	{
		$SearchText=$this->input->post("SearchText",true);
		$PinCode=$this->input->post("PinCode",true);
		if($PinCode=="" || $PinCode==null)
		{
			$PinCode=781038;
		}
		$result=$this->AMR_ItemModel->GetItemsByPinCodeAndSearch($PinCode,$SearchText);
		echo json_encode($result);
	}
	//Get Item By ID
	public function GetItemDetailByID()
	{
		$ID=$this->input->post("ItemID",true);
		$ItemDetail=$this->AMR_ItemModel->GetItemDetailByID($ID);
		for($i=0;$i<sizeof($ItemDetail);$i++)
		{
			$ItemDetail[$i]["Packages"]=$this->AMR_ItemModel->GetItemPackage($ID,3);
		}
		echo json_encode($ItemDetail);
	}
	//Check Location API
	public function CheckLocation()
	{
		$PinCode=$this->input->post("PinCode",true);
		$Area=$this->AMR_VendorAreaModel->GetVendorArea("Pincode=$PinCode");
		echo json_encode($Area);
	}
	//Add to Cart
	public function AddToCart()
	{
		$IPAddress=$this->input->post("IPAddress",true);
		$ItemID=$this->input->post("ItemID",true);
		$ItemName=$this->input->post("ItemName",true);
		$ItemPackage=$this->input->post("ItemPackage",true);
		$PackageQuantity=$this->input->post("PackageQuantity",true);
		$Quantity=$this->input->post("Quantity",true);
		$Price=$this->input->post("Price",true);
		$TotalPrice=$this->input->post("TotalPrice",true);
		$CustmerID=$this->input->post("CustmerID",true);
		$PrevEntry=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress' and a.ItemID=$ItemID and a.ItemPackage='$ItemPackage'");
		if(sizeof($PrevEntry)>0)
		{
			//ID 	IPAddress 	ItemID 	ItemName 	ItemPackage 	PackageQuantity 	Quantity 	Price 	TotalPrice 	CustmerID 
			$OldPackageQuantity=$PrevEntry[0]["PackageQuantity"];
			$OldQuantity=$PrevEntry[0]["Quantity"];
			$OldTotalPrice=$PrevEntry[0]["TotalPrice"];
			$NewPackageQuantity=$OldPackageQuantity+$PackageQuantity;
			$NewQuantity=$OldQuantity+$Quantity;
			$NewTotalPrice=$OldTotalPrice+$TotalPrice;
			$this->AMR_VendorOrderModel->UpdateQuantity("PackageQuantity=$NewPackageQuantity,Quantity=$NewQuantity,TotalPrice=$NewTotalPrice","ID=".$PrevEntry[0]["ID"]);
			$Message="Quantity Updated";
		}
		else
		{
			$data=array("IPAddress"=>$IPAddress, "ItemID"=>$ItemID, "ItemName"=>$ItemName, "ItemPackage"=>$ItemPackage, "PackageQuantity"=>$PackageQuantity, "Quantity"=>$Quantity, "Price"=>$Price, "TotalPrice"=>$TotalPrice, "CustmerID"=>$CustmerID);
			$this->AMR_VendorOrderModel->SaveCart($data);
			$Message="Item Added";
		}
		echo json_encode($Message);
	}
	//Remove from cart
	public function RemoveFromCart()
	{
		$ID=$this->input->post("ID",true);
		$PackageQuantity=$this->input->post("PackageQuantity",true);
		$PrevEntry=$this->AMR_VendorOrderModel->GetCartItems("a.ID=$ID");
		$PrevPackageQuantity=$PrevEntry[0]["PackageQuantity"];
		$PrevQuantity=$PrevEntry[0]["Quantity"];
		$PrevPrice=$PrevEntry[0]["Price"];
		$PrevTotalPrice=$PrevEntry[0]["TotalPrice"];
		if($PrevPackageQuantity<$PackageQuantity)
		{
			echo json_encode(array("Error"=>1,"Message"=>"Invalid Quantity"));
		}
		else if($PrevPackageQuantity==$PackageQuantity)
		{
			$this->AMR_VendorOrderModel->RemoveFromCart("ID=$ID");
			echo json_encode(array("Error"=>0,"Message"=>"Item removed from cart"));
		}
		else
		{
			$NewPackageQuantity=$PrevPackageQuantity-$PackageQuantity;
			$NewQuantity=($PrevQuantity/$PrevPackageQuantity)*$NewPackageQuantity;
			$NewTotalPrice=$PrevTotalPrice-($PrevPrice*$PackageQuantity);
			$this->AMR_VendorOrderModel->UpdateQuantity("PackageQuantity=$NewPackageQuantity,Quantity=$NewQuantity,TotalPrice=$NewTotalPrice","ID=".$ID);
			echo json_encode(array("Error"=>0,"Message"=>"Quantity reduced from cart"));
		}
	}
	//Read Cart
	public function ReadCart()
	{
		$IPAddress=$this->input->post("IPAddress",true);
		$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress'");
		echo json_encode($CartItems);
	}
	//Get Previous Addresses
	public function GetPreviousAddresses()
	{
		$CustomerID=$this->input->post("CustomerID",true);
		$Addresses=$this->AMR_CustomerModel->GetCustomerAddress("CustomerID=$CustomerID");
		echo json_encode($Addresses);
	}
	//Save New Address
	public function SaveNewAddress()
	{
		$CustomerID=$this->input->post("CustomerID",true);
		$AddressLine1=$this->input->post("AddressLine1",true);
		$AddressLine2=$this->input->post("AddressLine2",true);
		$Location=$this->input->post("Location",true);
		$City=$this->input->post("City",true);
		$State=$this->input->post("State",true);
		$PinCode=$this->input->post("PinCode",true);
		$ContactNo=$this->input->post("ContactNo",true);
		$ContactPerson=$this->input->post("ContactPerson",true);
		$data=array("CustomerID"=>$CustomerID,
					"AddressLine1"=>$AddressLine1,
					"AddressLine2"=>$AddressLine2,
					"Location"=>$Location,
					"City"=>$City,
					"State"=>$State,
					"PinCode"=>$PinCode,
					"ContactNo"=>$ContactNo,
					"ContactPerson"=>$ContactPerson);
		$this->AMR_CustomerModel->SaveCustomerAddress($data);
		echo json_encode("Saved");
	}
	public function UpdateAddress()
	{
		$ID=$this->input->post("ID",true);
		$AddressLine1=$this->input->post("AddressLine1",true);
		$AddressLine2=$this->input->post("AddressLine2",true);
		$Location=$this->input->post("Location",true);
		$City=$this->input->post("City",true);
		$State=$this->input->post("State",true);
		$PinCode=$this->input->post("PinCode",true);
		$ContactNo=$this->input->post("ContactNo",true);
		$ContactPerson=$this->input->post("ContactPerson",true);
		$data="AddressLine1='$AddressLine1',AddressLine2='$AddressLine2',Location='$Location',City='$City',State='$State',PinCode='$PinCode',ContactNo='$ContactNo',ContactPerson='$ContactPerson'";
		$where="ID=$ID";
		$this->AMR_CustomerModel->UpdateCustomerAddress($data,$where);
		echo json_encode("Updated");
	}
	public function DeleteAddress()
	{
		$ID=$this->input->post("ID",true);
		$where="ID=$ID";
		$this->AMR_CustomerModel->DeleteCustomerAddress($where);
		echo json_encode("Deleted");
	}
	//Place Order
	public function PlaceOrder()
	{
		$IPAddress=$this->input->post("IPAddress",true);
		$VendorID=3;
		$CustomerID=$this->input->post("CustomerID",true);
		$OrderDate=date("Y-m-d");
		$CusAddID=$this->input->post("AddressID",true);
		$code=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);
		$VOrderCode= "ABAD".date("Ym").$code;
		$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress'");
		$ItemQty=sizeof($CartItems);
		$TotalOrderValue=0;
		foreach($CartItems as $row)
		{
			$TotalOrderValue=$TotalOrderValue+$row["TotalPrice"];
		}
		$DeliveryType=$this->input->post("DeliveryType",true);
		$TaxDescription="";
		$DeliveryCharge=0;
		if($TotalOrderValue<500 && $DeliveryType==1)
		{
			$DeliveryCharge=50;
		}
		$TaxAmount=0;
		$DiscountAmount=$this->input->post("DiscountAmount",true);
		$GrandTotal=$TotalOrderValue+$DeliveryCharge-$DiscountAmount;
		$AmountInText="";
		$Status=0;
		$PaymentStatus=0;
		$DeliveryType=$this->input->post("DeliveryType",true);
		$data=array("VendorID"=>$VendorID, "CustomerID"=>$CustomerID, "OrderDate"=>$OrderDate, "CusAddID"=>$CusAddID, "VOrderCode"=>$VOrderCode, "ItemQty"=>$ItemQty, "TotalOrderValue"=>$TotalOrderValue, "TaxDescription"=>$TaxDescription, "DeliveryCharge"=>$DeliveryCharge, "TaxAmount"=>$TaxAmount, "DiscountAmount"=>$DiscountAmount, "GrandTotal"=>$GrandTotal, "AmountInText"=>$AmountInText, "Status"=>$Status, "PaymentStatus"=>$PaymentStatus, "IPAddress"=>$IPAddress, "DeliveryType"=>$DeliveryType);
		$this->AMR_VendorOrderModel->SaveVendorOrder($data);
		$LastOrder=$this->AMR_VendorOrderModel->GetVendorOrders("ID=(select max(ID) from vendor_order where
		IPAddress='$IPAddress' and CustomerID=$CustomerID)");
		$OrderID=$LastOrder[0]["ID"];
		$VendorID=3;
		foreach($CartItems as $row)
		{
			$data=array("OrderID"=>$OrderID, "ItemID"=>$row["ItemID"], "ItemName"=>$row["ItemName"], "PackageName"=>$row["ItemPackage"], "PackageQuantity"=>$row["PackageQuantity"], "Quantity"=>$row["Quantity"], "Price"=>$row["Price"], "TotalPrice"=>$row["TotalPrice"], "VendorID"=>$VendorID);
			$this->AMR_VendorOrderModel->SaveVendorOrderItems($data);
		}
		echo json_encode(array("Message"=>"OrderPlaced", "OrderID"=>$OrderID));
	}
	//Get Orders By Customer
	public function GetOrdersByCustomer()
	{
		$CustomerID=$this->input->post("CustomerID",true);
		$Lim1=$this->input->post("Lim1",true);
		$Lim2=$this->input->post("Lim2",true);
		$Orders=$this->AMR_VendorOrderModel->GetVendorOrders("CustomerID=$CustomerID limit $Lim1,$Lim2");
		echo json_encode($Orders);
	}
	//Get Order Detail
	public function GetOrderDetailByID()
	{
		$OrderID=$this->input->post("OrderID",true);
		$Order=$this->AMR_VendorOrderModel->GetVendorOrders("ID=$OrderID order by ID desc");
		for($i=0;$i<sizeof($Order);$i++)
		{
			$Order[$i]["Address"]=$this->AMR_CustomerModel->GetCustomerAddress("ID=".$Order[$i]["CusAddID"]);
		}
		echo json_encode($Order);
	}
}
