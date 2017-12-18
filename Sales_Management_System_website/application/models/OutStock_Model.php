<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class OutStock_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function AddOutStock($data){
		$this->db->insert('out_stock', $data);
	}
	
	public function ShowOutStock($where){
		$query="Select a.ID,a.Date,(a.Quantity * a.PackageQuantity) as ActualQuantity,a.Quantity,a.WarehouseID,a.ItemID,a.PackageQuantity,a.OrderID,a.BillID,b.Name as Warehouse,c.Name as Item from out_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID = c.ID where $where";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeleteOutStock($where){
		$query="Delete from out_stock where $where";
		$this->db->query($query);
	}
	
}
?>