<?php
class AMR_VendorModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library('my_db');
	}
	public function GetVendor($where)
	{
		$SQL="select * from vendors where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	//Purchase History
	public function GetPurchaseHistory($where)
	{
		$SQL="SELECT a.Date,b.Name,a.PackageName,a.PackageQuantity,a.Quantity,a.PurchaseBillID,a.Remarks FROM `vendor_instock` a inner join item_master b on a.ItemID=b.ID where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	//Sale Hoistory
	public function GetsaleHistory($where)
	{
		$SQL="select a.Date,b.VBillID,b.ItemName,b.PackageName,b.PackagePrice,b.PackageQty,b.TotalQty,b.TotalPrice from vbill a inner join vbillitem b on a.ID=b.VBillID where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	//Current Stock
	public function GetCurrentSotck($where)
	{
		$SQL="select a.ID as ItemID,a.Name as ItemName, b.Quantity from item_master a inner JOIN vendorcurrent_stock b on a.ID=b.ItemID where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function SaveCurrentStock($data)
	{
		$this->db->insert("vendorcurrent_stock",$data);
	}
	public function UpdateCurrentStock($data,$where)
	{
		$this->db->query("update vendorcurrent_stock set $data where $where");
	}
	//Damage Stock
	public function SaveDamageStock($data)
	{
		$this->db->insert("vendor_damagestock",$data);
	}
	public function GetDamageStock($where)
	{
		$SQL="select b.ID,b.Date, a.ID as ItemID,a.Name as ItemName, b.Quantity,b.Remarks from item_master a inner JOIN vendor_damagestock b on a.ID=b.ItemID where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function DeleteDamageStock($where)
	{
		$SQL="delete from vendor_damagestock where $where";
		$query=$this->db->query($SQL);
	}
	//Out Stock
	public function SaveOutStock($data)
	{
		$this->db->insert("vendor_outstock",$data);	 	 	 	 	 
	}
	public function DeleteOutStock($where)
	{
		$SQL="delete from vendor_outstock where $where";
		$query=$this->db->query($SQL);
	}
	public function GetOutStock($where)
	{
		$SQL="SELECT a.ID,a.BillID,a.Date,a.PakageName,a.PackageQuantity,a.Quantity,a.Remarks,b.Name FROM vendor_outstock a inner join item_master b on a.ItemID=b.ID where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
}
?>