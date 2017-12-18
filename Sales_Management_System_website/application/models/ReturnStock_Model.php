<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ReturnStock_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function AddReturnStock($data){
		$this->db->insert('return_stock', $data);
	}
	
	public function ShowreturnStock($where){
		$query="Select a.ID,a.Date,a.Bill,a.StuffOrder,a.Quantity,a.Remarks,b.Name as Warehouse,c.Name as Item from return_stock a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID where $where";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeleteReturnStock($where){
		$query="Delete from return_stock where $where";
		$this->db->query($query);
	}
}