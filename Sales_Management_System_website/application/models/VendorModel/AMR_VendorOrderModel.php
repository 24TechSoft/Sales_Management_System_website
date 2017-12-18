<?php
class AMR_VendorOrderModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library('my_db');
	}
	public function SaveVendorOrder($data)
	{
		$this->db->insert("vendor_order",$data);
	}
	public function GetVendorOrders($where)
	{
		$SQL="select * from vendor_order where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function UpdateOrder($data,$where)
	{
		$SQL="update vendor_order set $data where $where";
		$query=$this->db->query($SQL);
	}
	//Temp Cart
	public function SaveCart($data)
	{
		$this->db->insert("cart",$data);
	}
	public function RemoveFromCart($where)
	{
		$this->db->query("delete from cart where $where");
	}
	public function UpdateQuantity($data,$where)
	{
		$this->db->query("update cart set $data where $where");
	}
	public function GetCartItems($where)
	{
		$SQL="select a.*,b.Photo from cart a inner join item_master b on b.ID=a.ItemID where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	//Order Items
	public function SaveVendorOrderItems($data)
	{
		$this->db->insert("vendor_order_items",$data);
	}
	public function GetOrderItems($where)
	{
		$SQL="select * from vendor_order_items where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	//Dashboard Data
	public function GetTotalTodaysOrderByVendor($VendorID)
	{
		$SQL="SELECT COUNT(ID) as Total, coalesce(sum(TotalOrderValue),0) as TotalValue from vendor_order WHERE OrderDate=CURRENT_DATE and VendorID=$VendorID and VendorID=$VendorID";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function GetTotalMonthOrderByDVendor($VendorID)
	{
		$SQL="SELECT COUNT(ID) as Total, coalesce(sum(TotalOrderValue),0) as TotalValue from vendor_order WHERE OrderDate between '".date("Y")."-".date("m")."-01' and CURRENT_DATE and VendorID=$VendorID";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function GetTotalMonthPurchaseByVendor($VendorID)
	{
		$SQL="SELECT COUNT(ID) as Total, coalesce(sum(GrandTotal),0) as TotalValue from bill WHERE CustomerID=$VendorID and BillDate between '".date("Y")."-".date("m")."-01' and CURRENT_DATE";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function GetTotalMonthBillsByVendor($VendorID)
	{
		$SQL="SELECT COUNT(ID) as Total, coalesce(sum(GrandTotal),0) as TotalValue from vbill WHERE VendorID=$VendorID and Date between '".date("Y")."-".date("m")."-01' and CURRENT_DATE";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
}
?>