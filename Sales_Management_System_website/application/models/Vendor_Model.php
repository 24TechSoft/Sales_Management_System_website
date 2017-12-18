<?php

defined('BASEPATH') OR exit('No direct script access allowed');



Class Vendor_Model extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}
	
	public function ShowVendor($where){
		$sql="Select * from vendors where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
		
	}


	

}

?>