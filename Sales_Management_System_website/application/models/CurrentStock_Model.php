<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class CurrentStock_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function FindQuantity($where,$data){
		$sql="Select $data from in_stock where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function UpdateQuantity($data,$where){
		$sql="Update current_stock set $data where $where";
		$this->db->query($sql);
	}
}
?>