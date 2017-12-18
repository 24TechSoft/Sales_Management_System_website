<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class DamageStock_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function AddInStock($data){
		$this->db->insert('damage_stock', $data);
	}
	
	public function ShowInStock($where){
		$query="Select a.ID,a.Date,a.Quantity,a.Remarks,a.ItemID,a.WarehouseID,b.Name as Warehouse,c.Name as Item from damage_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID where $where order by a.ID desc";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeleteInStock($where){
		$query="Delete from damage_stock where $where";
		$this->db->query($query);
	}
}