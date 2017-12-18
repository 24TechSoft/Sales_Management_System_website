<?php
class AMR_CustomerModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->library('my_db');
	}
	public function SaveCustomerAddress($data)
	{
		$this->db->insert("customer_address",$data);
	}
	public function UpdateCustomerAddress($data,$where)
	{
		$this->db->query("update customer_address set $data where $where");
	}
	public function DeleteCustomerAddress($where)
	{
		$this->db->query("delete from customer_address where $where");
	}
	public function GetCustomerAddress($where)
	{
		$SQL="select * from customer_address where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function GetCustomer($where)
	{
		$SQL="select * from customer_master where $where";
		$query=$this->db->query($SQL);
		$result=$query->result_array();
		return $result;
	}
	public function AddCustomer($data)
	{
		$this->db->insert("customer_master",$data);
	}
	public function UpdateCustomer($data,$where)
	{
		$SQL="update customer_master set $data where $where";
		$query=$this->db->query($SQL);
	}
}
?>