<?php
class AMR_ItemModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library('my_db');
	}
	public function GetProductCategories($where)
	{
		$query=$this->db->query("select * from product_category where $where order by Category");
		$result=$query->result_array();
		return $result;
	}
	public function AddVendorArea($data)
	{
		$this->db->insert("vendor_areas",$data);
	}
	public function GetVendorArea($where)
	{
		$SQL="select * from vendor_areas where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function DeleteArea($where)
	{
		$SQL="delete from vendor_areas where $where";
		$query=$this->db->query($SQL);
	}
	//Items
	public function GetItemsByPinCode($PinCode,$Category,$SortBy)
	{
		$query=$this->db->query("select DISTINCT a.ID from vendors a INNER JOIN vendor_areas b on a.ID=b.VendorID where b.Pincode=$PinCode");
		$VendorList=$query->result_array();
		$VendorIDs="(";
		foreach($VendorList as $row)
		{
			if($VendorIDs=="(")
			{
				$VendorIDs=$VendorIDs.$row["ID"];
			}
			else
			{
				$VendorIDs=$VendorIDs.",".$row["ID"];
			}
		}
		$VendorIDs=$VendorIDs.")";
		if($VendorIDs=="()")
		{
			$Items=array();
			return $Items;
		}
		else
		{
			if($Category==0)
			{
				$query=$this->db->query("select DISTINCT a.ID as ItemID, a.Name as ItemName, a.CategoryID, a.ItemDescription, a.CurrentPrice, a.Photo, b.Quantity from item_master a inner join vendorcurrent_stock b on a.ID=b.ItemID where b.VendorID in $VendorIDs");
				$Items=$query->result_array();
				return $Items;
			}
			else
			{
				$query=$this->db->query("select DISTINCT a.ID as ItemID, a.Name as ItemName, a.CategoryID, a.ItemDescription, a.CurrentPrice, a.Photo, b.Quantity from item_master a inner join vendorcurrent_stock b on a.ID=b.ItemID where b.VendorID in $VendorIDs and a.CategoryID=$Category");
				$Items=$query->result_array();
				return $Items;
			}
		}
	}
	//Product By Search
	//Items
	public function GetItemsByPinCodeAndSearch($PinCode,$Search)
	{
		$query=$this->db->query("select DISTINCT a.ID from vendors a INNER JOIN vendor_areas b on a.ID=b.VendorID where b.Pincode=$PinCode");
		$VendorList=$query->result_array();
		$VendorIDs="(";
		foreach($VendorList as $row)
		{
			if($VendorIDs=="(")
			{
				$VendorIDs=$VendorIDs.$row["ID"];
			}
			else
			{
				$VendorIDs=$VendorIDs.",".$row["ID"];
			}
		}
		$VendorIDs=$VendorIDs.")";
		if($VendorIDs=="()")
		{
			$Items=array();
			return $Items;
		}
		else
		{
			$query=$this->db->query("select DISTINCT a.ID as ItemID, a.Name as ItemName, a.CategoryID, a.ItemDescription, a.CurrentPrice, a.Photo, b.Quantity from item_master a inner join vendorcurrent_stock b on a.ID=b.ItemID where b.VendorID in $VendorIDs and a.Name like '%$Search%'");
			$Items=$query->result_array();
			return $Items;
		}
	}
	public function GetItemDetailByID($ItemID)
	{
		$query=$this->db->query("select * from item_master where ID=$ItemID");
		$result=$query->result_array();
		return $result;
	}
	public function GetAllItems()
	{
		$query=$this->db->query("select * from item_master order by Name");
		$result=$query->result_array();
		return $result;
	}
	public function GetSpecialItems($ItemType)
	{
		$query=$this->db->query("select a.* from item_master a inner join specialitems b on a.ID=b.ItemID where ItemType=$ItemType");
		$result=$query->result_array();
		return $result;
	}
	//Item Packages
	public function AddItemPackages($data)
	{
		$this->db->insert("vendor_itempackage",$data);
	}
	public function DeleteItemPackage($where)
	{
		$this->db->query("delete from vendor_itempackage where $where");
	}
	public function UpdateItemPackage($data,$where)
	{
		$this->db->query("update vendor_itempackage set $data where $where");
	}
	public function GetItemPackage($ItemID,$VendorID)
	{
		$query=$this->db->query("select * from vendor_itempackage where ItemID=$ItemID and VendorID=$VendorID");
		$result=$query->result_array();
		return $result;
	}
	public function GetItemPackageByVendor($where)
	{
		$query=$this->db->query("select * from vendor_itempackage where $where");
		$result=$query->result_array();
		return $result;
	}
	public function GetVendorList($ItemID,$PinCode)
	{
		$query=$this->db->query("SELECT * FROM vendors WHERE ID in (select VendorID from vendorcurrent_stock where ItemID=$ItemID and Quantity>0 and VendorID in (SELECT VendorID from vendor_areas WHERE Pincode=$PinCode))");
		$result=$query->result_array();
		return $result;
	}
}
?>