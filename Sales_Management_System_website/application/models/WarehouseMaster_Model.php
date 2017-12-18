<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class WarehouseMaster_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	
	public function AddWarehouse($data){
		$this->db->insert('warehouse_master', $data);
	}
	
	public function ShowWarehouse($where){
		$query="Select * from warehouse_master where $where";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeleteWarehouse($where){
		$query="Delete from warehouse_master where $where";
		$this->db->query($query);
	}
	public function showItemRequest($where,$where1){
		$query="SELECT a.ItemID,a.ID,a.Date,a.FWarehouseID,a.TWarehouseID,a.Quantity,a.Status,(Select Name from warehouse_master where ID=a.FWarehouseID) as FromWarehouse,(Select Name from warehouse_master where ID=a.TWarehouseID) as ToWarehouse,b.Name as ItemName from warehouse_request a left outer join item_master b on a.ItemID=b.ID WHERE $where
		UNION All
		select a.ItemID,a.ID,a.Date,a.FWarehouseID,a.TWarehouseID,a.Quantity,a.Status,(Select Name from warehouse_master where ID=a.FWarehouseID) as FromWarehouse,(Select Name from warehouse_master where ID=a.TWarehouseID) as ToWarehouse,b.Name as ItemName from warehouse_request a left outer join item_master b on a.ItemID=b.ID WHERE $where1 order by ID desc";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function showallrequests($where,$where1){
		$sql="SELECT * FROM `warehouse_request` WHERE $where
				UNION All
			select * FROM warehouse_request WHERE $where1";
		$result=$this->db->query($sql);
		$res=$result->result_array();
		return $res;
	}
	
	public function approveRequest($data,$where){
		$sql="Update warehouse_request set $data where $where";
		$this->db->query($sql);
	}
}
?>