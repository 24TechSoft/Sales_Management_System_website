<?php

defined('BASEPATH') OR exit('No direct script access allowed');



Class CustomerMaster_Model extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	

	

	public function Addcustomermaster($data){

		$this->db->insert('customer_master', $data);

	}

	

	public function ShowCustomerMaster($where){

		$query="Select * from customer_master where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	public function DeleteCustomerMaster($where){

		$query="Delete from customer_master where $where";

		$this->db->query($query);

	}

	public function ShowAddress($where){

		$query="Select * from delivery_address where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		

		return $res;

	}

	public function ShowNameAddress($where){

		$query="Select a.ID,a.Address,a.Locality,a.State,a.Village,a.PinCode,a.Landmark,b.Name,b.Email,b.PhoneNo from delivery_address a left outer join customer_master b on a.CustomerID=b.ID where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		

		return $res;

	}

	

	public function AddAddress($data){

		$this->db->insert('delivery_address',$data);

	}
	
	public function Addvendormaster($data){
		$this->db->insert('vendors',$data);
	}
	
	public function DeleteVendorMaster($where){

		$query="Delete from vendors where $where";

		$this->db->query($query);

	}

	public function ShowvendorMaster($where){

		$query="Select * from vendors where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		

		return $res;

	}
	
	public function SelectDeliveryAddress($where){
		$query="Select * from delivery_address where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		

		return $res;
	}

	

}

?>