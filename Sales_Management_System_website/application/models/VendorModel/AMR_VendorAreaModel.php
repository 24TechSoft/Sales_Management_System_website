<?php
class AMR_VendorAreaModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library('my_db');
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
}
?>