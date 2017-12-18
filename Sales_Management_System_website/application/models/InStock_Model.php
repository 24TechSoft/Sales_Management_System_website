<?php

defined('BASEPATH') OR exit('No direct script access allowed');



Class InStock_Model extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function PackageQuantity($where){

		$sql="Select Quantity from product_package where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function SelectWarehouse(){

		$sql="Select * from warehouse_master";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	public function SelectWarehouses($where){

		$sql="Select * from warehouse_master where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	public function SelectItem(){

		$sql="Select * from item_master";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function SelectStock(){

		$sql="Select * from in_stock";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	

	public function AddInStock($data){

		$this->db->insert('in_stock', $data);

	}

	

	public function ShowInStock($where){

		$query="Select a.ID,a.Date,a.Quantity,a.ItemID,a.PackageQuantity,a.Remarks,a.WarehouseID,b.Name as Warehouse,c.Name as Item from in_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID = c.ID where $where order by a.ID desc";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	public function DeleteInStock($where){

		$query="Delete from in_stock where $where";

		$this->db->query($query);

	}

	public function ShowPackage($where){

		$sql="Select * from product_package where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	//check if item already exist in Current Stock

	

	public function itemInstock($wherec){

		$sql="Select * from current_stock where $wherec";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	//add current stock

	public function AddCurrent_Stock($data){

		$this->db->insert('current_stock',$data);

	}

	//update quantity of currentstock

	public function updateCurrent_Stock($data,$where){

		$sql="Update current_stock set $data where $where";

		$query=$this->db->query($sql);

		/*$result=$query->result_array();

		return $result;*/

		

	}

	

	//items and quantity in current stock

	public function checkstocks($where){

		$sql="Select a.Date,(a.PackageQuantity * a.Quantity) as Qty,a.Remarks,b.Name as Warehouse,c.Name as Item from in_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID where $where union all Select a.Date,-(a.PackageQuantity * a.Quantity) as Qty,a.Remarks,b.Name as Warehouse,c.Name as Item from out_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID where $where union all Select a.Date,-a.Quantity as Qty,a.Remarks,b.Name as Warehouse,c.Name as Item from damage_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID where $where union all Select a.Date,(a.PackageQuantity * a.Quantity) as Qty,a.Remarks,b.Name as Warehouse,c.Name as Item from return_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID where $where order by Item";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	

	public function currentitems($where){

		$sql="Select a.Quantity,b.Name as ItemName,c.Name as Warehouse from current_stock a left outer join item_master b on a.ItemID=b.ID left outer join warehouse_master c on a.WarehouseID=c.ID where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	//instock report

	public function checkinstock($where){

		$sql="Select a.ID,(a.PackageQuantity * a.Quantity) as Quantity,a.Remarks,a.Date,b.Name as Item,c.Name as Warehouse from in_stock a left outer join item_master b on a.ItemID=b.ID left outer join warehouse_master c on a.WarehouseID=c.ID where $where order by b.Name";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	//..outstock or sale report

	public function checksalestock($where){

		$sql="Select a.ID,(a.PackageQuantity * a.Quantity) as Quantity,a.Remarks,a.Date,b.Name as Item,c.Name as Warehouse from out_stock a left outer join item_master b on a.ItemID=b.ID left outer join warehouse_master c on a.WarehouseID=c.ID where $where order by b.Name";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	//return stock report

	public function checkreturnstock($where){

		$sql="Select a.ID,(a.PackageQuantity * a.Quantity) as Quantity,a.Remarks,a.Date,b.Name as Item,c.Name as Warehouse from return_stock a left outer join item_master b on a.ItemID=b.ID left outer join warehouse_master c on a.WarehouseID=c.ID where $where order by b.Name";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	//damage stock report

	public function checkdamagestock($where){

		$sql="Select a.ID,a.Quantity,a.Remarks,a.Date,b.Name as Item,c.Name as Warehouse from damage_stock a left outer join item_master b on a.ItemID=b.ID left outer join warehouse_master c on a.WarehouseID=c.ID where $where order by b.Name";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	

}

?>