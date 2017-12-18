<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMR_OrderController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->model('VendorModel/AMR_VendorModel');
		$this->load->model('VendorModel/AMR_VendorOrderModel');
		$this->load->model('VendorModel/AMR_VendorAreaModel');
		$this->load->model('CustomerModels/AMR_CustomerModel');
	}
	public function GetCartItems()
	{
		$IPAddress=$this->input->post("DeviceID",true);
		if($IPAddress==null || $IPAddress=="")
		{
			$IPAddress=getenv('REMOTE_ADDR');
		}
		$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress'");
		echo json_encode($CartItems);
	}
	public function AddToCart()
	{
		$IPAddress=$this->input->post("DeviceID",true);
		if($IPAddress==null || $IPAddress=="")
		{
			$IPAddress=getenv('REMOTE_ADDR');
		}
		$ItemID=$this->input->post("ItemID",true);
		$ItemName=$this->input->post("ItemName",true);
		$ItemPackage=$this->input->post("ItemPackage",true);
		$PackageQuantity=$this->input->post("PackageQuantity",true);
		$Quantity=$this->input->post("Quantity",true);
		$Price=$this->input->post("Price",true);
		$TotalPrice=$this->input->post("TotalPrice",true);
		$CustomerID=$this->input->post("CustmerID",true);
		if($CustomerID==null || $CustmerID=="")
		{
			$CustmerID=$this->input->cookie("CustomerID",true);
		}
		if($CustomerID==null || $CustmerID=="")
		{
			$CustmerID=0;
		}
		$PrevEntry=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress' and a.ItemID=$ItemID and a.ItemPackage='$ItemPackage'");
		if(sizeof($PrevEntry)>0)
		{
			$PackageQuantity=$PackageQuantity+$PrevEntry[0]["PackageQuantity"];
			$Quantity=$Quantity+$PrevEntry[0]["Quantity"];
			$TotalPrice=$TotalPrice+$PrevEntry[0]["TotalPrice"];
			$this->AMR_VendorOrderModel->UpdateQuantity("PackageQuantity=$PackageQuantity, Quantity=$Quantity, TotalPrice=$TotalPrice","ID=".$PrevEntry[0]["ID"]);
			echo json_encode("Quantity added");
		}
		else
		{
			$data=array("IPAddress"=>$IPAddress,
					"ItemID"=>$ItemID,
					"ItemName"=>$ItemName,
					"ItemPackage"=>$ItemPackage,
					"PackageQuantity"=>$PackageQuantity,
					"Quantity"=>$Quantity,
					"Price"=>$Price,
					"TotalPrice"=>$TotalPrice,
					"CustmerID"=>$CustmerID);
		
			$this->AMR_VendorOrderModel->SaveCart($data);
			echo json_encode("Item Added to the cart");
		}
	}
	public function RemoveFromCart()
	{
		$ID=$this->input->post("ID",true);
		$this->AMR_VendorOrderModel->RemoveFromCart("ID=$ID");
		echo json_encode("Item Removed");
	}
	public function AddQuantity()
	{
		$ID=$this->input->get("ID",true);
		$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.ID=$ID");
		if(sizeof($CartItems)>0)
		{
			$Quantity=$CartItems[0]["Quantity"];
			$PackageQuantity=$CartItems[0]["PackageQuantity"];
			$PerPackageQuantity=$Quantity/$PackageQuantity;
			$NewQuantity=$Quantity+$PerPackageQuantity;
			$NewPackageQuantity=$PackageQuantity+1;
			$NewTotalPrice=$NewPackageQuantity*$CartItems[0]["Price"];
			$this->AMR_VendorOrderModel->UpdateQuantity("Quantity=$NewQuantity,TotalPrice=$NewTotalPrice,PackageQuantity=$NewPackageQuantity","ID=$ID");
		}
		redirect("AMR_Home/ShoppingCart");
	}
	public function RemoveQuantity()
	{
		$ID=$this->input->get("ID",true);
		$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.ID=$ID");
		if(sizeof($CartItems)>0)
		{
			$Quantity=$CartItems[0]["Quantity"];
			if($Quantity>1)
			{
				$PackageQuantity=$CartItems[0]["PackageQuantity"];
				$PerPackageQuantity=$Quantity/$PackageQuantity;
				$NewQuantity=$Quantity-$PerPackageQuantity;
				$NewPackageQuantity=$PackageQuantity-1;
				$NewTotalPrice=$NewPackageQuantity*$CartItems[0]["Price"];
				$this->AMR_VendorOrderModel->UpdateQuantity("Quantity=$NewQuantity,TotalPrice=$NewTotalPrice,PackageQuantity=$NewPackageQuantity","ID=$ID");
			}
			else
			{
				$this->AMR_VendorOrderModel->RemoveFromCart("ID=$ID");
			}
		}
		redirect("AMR_Home/ShoppingCart");
	}
	public function SaveOrderWebsite()
	{
		$CustomerID=$this->input->cookie("CustomerID");
		$FullName=$this->input->post("FullName",true);
		$Email=$this->input->post("Email",true);
		$MobileNo=$this->input->post("MobileNo",true);
		$Location=$this->input->post("Location",true);
		$State=$this->input->post("State",true);
		$AddressLine1=$this->input->post("AddressLine1",true);
		$AddressLine2=$this->input->post("AddressLine2",true);
		$PinCode=$this->input->post("PinCode",true);
		$City=$this->input->post("City",true);
		$PaymentMethod=$this->input->post("PaymentMethod",true);
		$ShippingType=$this->input->post("ShippingType",true);
		$AddressID=$this->input->post("AddressID",true);
		echo $AddressID;
		if($AddressID=="" || $AddressID==null)
		{
			$data=array("CustomerID"=>$CustomerID,
						"AddressLine1"=>$AddressLine1,
						"AddressLine2"=>$AddressLine2,
						"Location"=>$Location,
						"City"=>$City,
						"State"=>$State,
						"PinCode"=>$PinCode,
						"ContactNo"=>$MobileNo,
						"ContactPerson"=>$FullName
						);
			$this->AMR_CustomerModel->SaveCustomerAddress($data);
			$LastAddress=$this->AMR_CustomerModel->GetCustomerAddress("ID=(select max(ID) from customer_address)");
			$AddressID=$LastAddress[0]["ID"];
		}
		else
		{
			$data="CustomerID=$CustomerID,AddressLine1='$AddressLine1',AddressLine2='$AddressLine2',Location='$Location',City='$City',State='$State',PinCode=$PinCode,ContactNo='$MobileNo',ContactPerson='$FullName'";
			$where="ID=$AddressID";
			$this->AMR_CustomerModel->UpdateCustomerAddress($data,$where);
		}
		$OrderDate=date("Y-m-d");

		$code=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);
		$VOrderCode= "ABAD".date("Ym").$code;
		$IPAddress=getenv('REMOTE_ADDR');
		$CartItems=$this->AMR_VendorOrderModel->GetCartItems("a.IPAddress='$IPAddress'");
		$ItemQty=sizeof($CartItems);
		$TotalOrderValue=0;
		foreach($CartItems as $row)
		{
			$TotalOrderValue=$TotalOrderValue+$row["TotalPrice"];
		}
		if($TotalOrderValue>500)
		{
			$DeliveryCharge=0.00;
		}
		else
		{
			if($ShippingType==1)
			{
				$DeliveryCharge=50.00;
			}
			else
			{
				$DeliveryCharge=0.00;
			}
		}
		$TaxAmount=0;
		$DiscountAmount=0;	
		$GrandTotal=$TotalOrderValue+$DeliveryCharge; 	
		$Status=0; 	
		$PaymentStatus=0;
		$data=array("CustomerID"=>$CustomerID,
					"OrderDate"=>$OrderDate,
					"CusAddID"=>$AddressID,
					"VOrderCode"=>$VOrderCode,
					"ItemQty"=>$ItemQty,
					"TotalOrderValue"=>$TotalOrderValue,
					"TaxDescription"=>"",
					"DeliveryCharge"=>$DeliveryCharge,
					"DiscountAmount"=>$DiscountAmount,
					"GrandTotal"=>$GrandTotal,
					"AmountInText"=>"",
					"Status"=>$Status,
					"PaymentStatus"=>$PaymentStatus,
					"IPAddress"=>$IPAddress,
					"DeliveryType"=>$ShippingType);
		$this->AMR_VendorOrderModel->SaveVendorOrder($data);
		$LastOrder=$this->AMR_VendorOrderModel->GetVendorOrders("CustomerID=$CustomerID order by ID desc");
		foreach($CartItems as $row)
		{
			$data=array("OrderID"=>$LastOrder[0]["ID"],
						"ItemID"=>$row["ItemID"],
						"ItemName"=>$row["ItemName"],
						"PackageName"=>$row["ItemPackage"],
						"PackageQuantity"=>$row["PackageQuantity"],
						"Quantity"=>$row["Quantity"],
						"Price"=>$row["Price"],
						"TotalPrice"=>$row["TotalPrice"],
						"VendorID"=>3);
			$this->AMR_VendorOrderModel->SaveVendorOrderItems($data);
		}
		$url="http://book.24techsoft.com/api/sendmsg.php?user=abadagro&pass=abad123&sender=ABADOS&phone=".$MobileNo."&text=".str_replace(' ','%20','Dear,'.$FullName.', we have received your order of amount '.$GrandTotal.' only. We will keep informing you about the status of your order. Thank you for shopping with us.')."&priority=ndnd&stype=normal";
		if(!($response  = file_get_contents($url)))
		{
			//echo "<script type='text/javascript'>alert ('Error');</script>";
			//header("location:Index.php?Error=1");
		}
		else
		{
			//echo "<script type='text/javascript'>alert ('Success');</script>";
		}
		$this->AMR_VendorOrderModel->RemoveFromCart("IPAddress='$IPAddress'");
		if($PaymentMethod=="cod")
		{
			redirect("AMR_Customer/OrderDetail/".$LastOrder[0]["ID"]);
		}
		else
		{
			redirect("AMR_OrderController/MakePayment/".$LastOrder[0]["ID"]);
		}
	}
	public function MakePayment()
	{
		$OrderID=$this->uri->segment(3);
		$OrderDetial=$this->AMR_VendorOrderModel->GetVendorOrders("ID=$OrderID");
		$CustomerID=$OrderDetial[0]["CustomerID"];
		$OrderDate=$OrderDetial[0]["OrderDate"];	
		$CusAddID=$OrderDetial[0]["CusAddID"];
		$VOrderCode=$OrderDetial[0]["VOrderCode"];
		$ItemQty=$OrderDetial[0]["ItemQty"];
		$TotalOrderValue=$OrderDetial[0]["TotalOrderValue"];
		$TaxDescription=$OrderDetial[0]["TaxDescription"];
		$DeliveryCharge=$OrderDetial[0]["DeliveryCharge"];
		$TaxAmount=$OrderDetial[0]["TaxAmount"];
		$DiscountAmount=$OrderDetial[0]["DiscountAmount"];
		$GrandTotal=$OrderDetial[0]["GrandTotal"];
		$AmountInText=$OrderDetial[0]["AmountInText"];
		$Status=$OrderDetial[0]["Status"];
		$PaymentStatus=$OrderDetial[0]["PaymentStatus"];
		$IPAddress=$OrderDetial[0]["IPAddress"];
		$CustomerDetail=$this->AMR_CustomerModel->GetCustomer("ID=".$OrderDetial[0]["CustomerID"]);
		
		$Name=$CustomerDetail[0]["Name"];
		$PhoneNo=$CustomerDetail[0]["PhoneNo"];
		$Email=$CustomerDetail[0]["Email"];
		$Address=$CustomerDetail[0]["Address"];
		$PinCode=$CustomerDetail[0]["PinCode"];
		$Vat=$CustomerDetail[0]["Vat"];
		$UserID=$CustomerDetail[0]["UserID"];
		$Password=$CustomerDetail[0]["Password"];
		$OTP=$CustomerDetail[0]["OTP"];
		$Status=$CustomerDetail[0]["Status"];
		
		require_once("application/libraries/Instamojo.php");
		$api = new Instamojo\Instamojo('ee3d700e8095d12b22ca92334660a1bc', '7414f60a162efca764b6868c3b31a4b0');
		try 
		{
			$response = $api->paymentRequestCreate(array(
				"purpose" => $VOrderCode,
				"amount" => $GrandTotal,
				"send_email" => true,
				"email" => $Email,
				"phone"=>$PhoneNo,
				"buyer_name"=>$Name,
				"redirect_url" => "http://abadagro.com/AMR_OrderController/PaymentConfirmation?OrderID=$OrderID",
				));
			redirect($response["longurl"]);
		}
		catch (Exception $e) 
		{
			print('Error: ' . $e->getMessage());
		}
	}
	public function PaymentConfirmation()
	{
		$OrderID=$this->input->get("OrderID");
		$payment_id=$this->input->get("payment_id");
		$payment_request_id=$this->input->get("payment_request_id");
		require_once("application/libraries/Instamojo.php");
		$api = new Instamojo\Instamojo('ee3d700e8095d12b22ca92334660a1bc', '7414f60a162efca764b6868c3b31a4b0');
		try 
		{
			$response = $api->paymentRequestStatus($payment_request_id);
			if($response["payments"][0]["status"]=="Credit")
			{
				$this->AMR_VendorOrderModel->UpdateOrder("PaymentStatus=1","ID=$OrderID");
			}
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}
		redirect("AMR_Customer/OrderDetail/$OrderID");
	}
	public function PaymentDetail()
	{
		$payment_id=$this->input->get("payment_id");
		$payment_request_id=$this->input->get("payment_request_id");
		require_once("application/libraries/Instamojo.php");
		$api = new Instamojo\Instamojo('ee3d700e8095d12b22ca92334660a1bc', '7414f60a162efca764b6868c3b31a4b0');
		try 
		{
			$response = $api->paymentRequestStatus($payment_request_id);
			echo json_encode($response);
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}
	}
	public function CancelOrder()
	{
		$OrderID=$this->uri->segment(3);
		$this->AMR_VendorOrderModel->UpdateOrder("Status=4","ID=$OrderID");
		redirect("AMR_Customer/OrderDetail/$OrderID");
	}
}
