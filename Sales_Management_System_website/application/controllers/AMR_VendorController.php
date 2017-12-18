<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AMR_VendorController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
		$this->load->model('VendorModel/AMR_ItemModel');
		$this->load->model('VendorModel/AMR_VendorModel');
		$this->load->model('VendorModel/AMR_VendorOrderModel');
		$this->load->model('VendorModel/AMR_VendorAreaModel');
		$this->load->model('CustomerModels/AMR_CustomerModel');
	}
	public function index()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID!="" && $VendorID!=null)
		{
			redirect("AMR_VendorController/Dashboard");
		}
		else
		{
			$this->load->view('AMR_Vendor/AMR_VLogin');
		}
	}
	public function login()
	{
		$UserID=$this->input->post("UserID",true);
		$Password=md5($this->input->post("Password",true));
		$data=$this->AMR_VendorModel->GetVendor("UserID='$UserID' and Password='$Password'");
		echo json_encode($data);
		if(sizeof($data)>0)
		{
			$this->input->set_cookie('VendorID',$data[0]["ID"],43200);
			redirect("AMR_VendorController/Dashboard");
		}
		else
		{
			redirect("AMR_VendorController");
		}
	}
	public function logout()
	{
		delete_cookie("VendorID");
		redirect("AMR_VendorController");
	}
	public function Dashboard()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			$data["OrderList"]=$this->AMR_VendorOrderModel->GetVendorOrders("VendorID=$VendorID and OrderDate=CURRENT_DATE");
			$data["TodaysOrder"]=$this->AMR_VendorOrderModel->GetTotalTodaysOrderByVendor($VendorID);
			$data["MonthOrder"]=$this->AMR_VendorOrderModel->GetTotalMonthOrderByDVendor($VendorID);
			$data["MonthPurchase"]=$this->AMR_VendorOrderModel->GetTotalMonthPurchaseByVendor($VendorID);
			$data["MonthBills"]=$this->AMR_VendorOrderModel->GetTotalMonthBillsByVendor($VendorID);
			$this->load->view("AMR_Vendor/AMR_Dashboard",$data);
		}
	}
	public function Orders()
	{
		$OrderDate=$this->input->get("OrderDate",true);
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			if($OrderDate!="")
			{
				$data["OrderList"]=$this->AMR_VendorOrderModel->GetVendorOrders("VendorID=$VendorID and OrderDate='$OrderDate'");
			}
			else
			{
				$data["OrderList"]=$this->AMR_VendorOrderModel->GetVendorOrders("VendorID=$VendorID");
			}
			$this->load->view("AMR_Vendor/AMR_VOrders",$data);
		}
	}
	public function OrderDetail()
	{
		$ID=$this->uri->segment(3);
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			$data["OrderDetail"]=$this->AMR_VendorOrderModel->GetVendorOrders("VendorID=$VendorID and ID=$ID");
			$data["OrderItems"]=$this->AMR_VendorOrderModel->GetOrderItems("OrderID=$ID");
			$data["DeliveryAddress"]=$this->AMR_CustomerModel->GetCustomerAddress("ID=".$data["OrderDetail"]["0"]["CusAddID"]);
			$this->load->view("AMR_Vendor/AMR_VOrderDetail",$data);
		}
	}
	//Vendor Areas
	public function Areas()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			$data["Areas"]=$this->AMR_VendorAreaModel->GetVendorArea("VendorID=$VendorID");
			$this->load->view("AMR_Vendor/AMR_Areas",$data);
		}
	}
	public function SaveArea()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		$Pincode=$this->input->post("Pincode",true);
		$Location=$this->input->post("Location",true);
		$MinimumOrder=$this->input->post("MinimumOrder",true);
		$DeliveryCharge=$this->input->post("DeliveryCharge",true);
		$data=array("VendorID"=>$VendorID,"Pincode"=>$Pincode,"Location"=>$Location,"MinimumOrder"=>$MinimumOrder,"DeliveryCharge"=>$DeliveryCharge);
		$this->AMR_VendorAreaModel->AddVendorArea($data);
		redirect("AMR_VendorController/Areas");
	}
	public function DeleteArea()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		$ID=$this->input->get("AreaID",true);
		$this->AMR_VendorAreaModel->DeleteArea("VendorID=$VendorID and ID=$ID");
		redirect("AMR_VendorController/Areas");
	}
	//Current Stock
	public function CurrentStock()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$data["CurrentStock"]=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID");
		$this->load->view("AMR_Vendor/AMR_CurrentStock",$data);
	}
	public function GetCurrentSotck()
	{
		$ItemID=$this->input->get("ItemID",true);
		$VendorID=$this->input->cookie("VendorID",true);
		$Items=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID and b.ItemID=$ItemID");
		echo json_encode($Items);
	}
	//Purchase History
	public function PurchaseHistory()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		$FromDate=$this->input->get("FromDate",true);
		$ToDate=$this->input->get("ToDate",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			if($FromDate!="" && $ToDate!="")
			{
				$data["PurchaseHistory"]=$this->AMR_VendorModel->GetPurchaseHistory("a.VendorID=$VendorID and a.Date between '$FromDate' and '$ToDate'");
			}
			else
			{
				$data["PurchaseHistory"]=$this->AMR_VendorModel->GetPurchaseHistory("a.VendorID=$VendorID");
			}
			$this->load->view("AMR_Vendor/AMR_PurchaseHistory",$data);
		}
	}
	//Sale History
	public function SaleHistory()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		$FromDate=$this->input->get("FromDate",true);
		$ToDate=$this->input->get("ToDate",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			if($FromDate!="" && $ToDate!="")
			{
				$data["SaleHistory"]=$this->AMR_VendorModel->GetSaleeHistory("a.VendorID=$VendorID and a.Date between '$FromDate' and '$ToDate' and a.Status<>0");
			}
			else
			{
				$data["SaleHistory"]=$this->AMR_VendorModel->GetSaleHistory("a.VendorID=$VendorID");
			}
			$this->load->view("AMR_Vendor/AMR_SaleHistory",$data);
		}
	}
	//Damage Stock
	public function DamageStock()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		$FromDate=$this->input->get("FromDate",true);
		$ToDate=$this->input->get("ToDate",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		else
		{
			$data["Items"]=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID");
			if($FromDate!="" && $ToDate!="")
			{
				$data["DamageStock"]=$this->AMR_VendorModel->GetDamageStock("b.VendorID=$VendorID and b.Date between '$FromDate' and '$ToDate'");
			}
			else
			{
				$data["DamageStock"]=$this->AMR_VendorModel->GetDamageStock("b.VendorID=$VendorID");
			}
			$this->load->view("AMR_Vendor/AMR_DamageStock",$data);
		}
	}
	public function SaveDamageStock()
	{
		$Date=$this->input->post("Date");
		$ItemID=$this->input->post("ItemID");
		$VendorID=$this->input->cookie("VendorID",true);
		$Quantity=$this->input->post("Quantity");
		$Remarks=$this->input->post("Remarks");
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$data=array("VendorID"=>$VendorID,"Date"=>$Date,"ItemID"=>$ItemID,"Quantity"=>$Quantity,"Remarks"=>$Remarks);
		$CurrentStock=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID and b.ItemID=$ItemID");
		$Current=$CurrentStock[0]["Quantity"]-$Quantity;
		$this->AMR_VendorModel->UpdateCurrentStock("Current=$Current","ID=".$CurrentStock[0]["ID"]);
		$this->AMR_VendorModel->SaveDamageStock($data);
		redirect("AMR_VendorController/DamageStock");
	}
	public function DeleteDamageStock()
	{
		$ID=$this->input->get("ID",true);
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		if($ID!="")
		{
			$CurrentStock=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID and b.ItemID=$ItemID");
			$OutStock=$this->AMR_VendorModel->GetOutStock("a.ID=$ID");
			$Current=$CurrentStock[0]["Quantity"]+$OutStock[0]["Quantity"];
			$this->AMR_VendorModel->UpdateCurrentStock("Current=$Current","ID=".$CurrentStock[0]["ID"]);
			$this->AMR_VendorModel->DeleteDamageStock("ID=$ID");
		}
		redirect("AMR_VendorController/DamageStock");
	}
	//Out Stock
	public function SaveOutStock()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$Date=$this->input->post("Date",true);
		$ItemID=$this->input->post("ItemID",true);
		$PakageName=$this->input->post("PakageName",true);
		$PackageQuantity=$this->input->post("PackageQuantity",true);
		$Quantity=$this->input->post("Quantity",true);
		$Remarks=$this->input->post("Remarks",true);
		$BillID=$this->input->post("BillID",true);
		$data=array("VendorID"=>$VendorID,"Date"=>$Date,"ItemID"=>$ItemID,"PackageName"=>$PackageName,"PackageQuantity"=>$PackageQuantity,"Quantity"=>$Quantity,"Remarks"=>$Remarks,"BillID"=>$BillID);
		$CurrentStock=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID and b.ItemID=$ItemID");
		if(sizeof($CurrentStock)>0)
		{
			$ID=$CurrentStock[0]["ID"];
			$Current=$CurrentStock[0]["Quantity"];
			if($Current>=$Quantity)
			{
				$this->AMR_VendorModel->SaveOutStock($data);
				$Current=$Current-$Quantity;
				$this->AMR_VendorModel->UpdateCurrentStock("Current=$Current","ID=$ID");
			}
		}
		redirect("AMR_VendorController/OutStock");
	}
	public function DeleteOutStock()
	{
		$OutStockID=$this->input->get("ID",true);
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$OutStock=$this->AMR_VendorModel->GetOutStock("a.ID=$OutStockID");
		if(sizeof($OutStock)>0)
		{
			$ItemID=$OutStock[0]["ItemID"];
			$CurrentStock=$this->AMR_VendorModel->GetCurrentSotck("b.VendorID=$VendorID and b.ItemID=$ItemID");
			if(sizeof($CurrentStock)>0)
			{
				$Current=$CurrentStock[0]["Quantity"];
				$Current=$Current+$OutStock[0]["Quantity"];
				$this->AMR_VendorModel->UpdateCurrentStock("Quantity=$Current","ID=".$CurrentStock[0]["ID"]);
			}
			else
			{
				$data=array("VendorID"=>$VendorID,"ItemID"=>$ItemID,"Quantity"=>$OutStock[0]["Quantity"]);
				$this->AMR_VendorModel->SaveCurrentStock($data);
			}
			$this->AMR_VendorModel->DeleteOutStock("ID=$OutStockID");
		}
		redirect("AMR_VendorController/OutStock");
	}
	//Item Packages
	public function ItemPackage()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$data["ItemPackages"]=$this->AMR_ItemModel->GetItemPackageByVendor("VendorID=$VendorID");
		for($i=0;$i<sizeof($data["ItemPackages"]);$i++)
		{
			$ItemDetail=$this->AMR_ItemModel->GetItemDetailByID($data["ItemPackages"][$i]["ItemID"]);
			if(sizeof($ItemDetail)>0)
			{
				$data["ItemPackages"][$i]["ItemName"]=$ItemDetail[0]["Name"];
			}
			else
			{
				$data["ItemPackages"][$i]["ItemName"]="No Name";
			}
		}
		$ID=$this->uri->segment(3);
		if($ID!=null || $ID!="")
		{
			$data["ItemPackageDetail"]=$this->AMR_ItemModel->GetItemPackageByVendor("ID=$ID");
		}
		else
		{
			$data["ItemPackageDetail"]=null;
			$ID=0;
		}
		$data["ID"]=$ID;
		$data["ItemList"]=$this->AMR_ItemModel->GetAllItems();
		$this->load->view("AMR_Vendor/AMR_ItemPackage",$data);
	}
	public function SaveItemPackage()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$ItemID=$this->input->post("ItemID");
		$PackageName=$this->input->post("PackageName");
		$Quantity=$this->input->post("Quantity");
		$Price=$this->input->post("Price");
		$ID=$this->uri->segment(3);
		if($ID==0)
		{
			$this->AMR_ItemModel->AddItemPackages(array("VendorID"=>$VendorID,"ItemID"=>$ItemID,"PackageName"=>$PackageName,"Quantity"=>$Quantity,"Price"=>$Price));
		}
		else
		{
			$this->AMR_ItemModel->UpdateItemPackage("PackageName='$PackageName',Quantity=$Quantity,Price=$Price","ID=$ID");
		}
		redirect("AMR_VendorController/ItemPackage/0");
	}
	public function DeleteItemPackage()
	{
		$VendorID=$this->input->cookie("VendorID",true);
		if($VendorID=="" && $VendorID==null)
		{
			redirect("AMR_VendorController");
		}
		$ID=$this->input->get("ID",true);
		$this->AMR_ItemModel->DeleteItemPackage("ID=$ID");
		redirect("AMR_VendorController/ItemPackage/0");
	}
}
