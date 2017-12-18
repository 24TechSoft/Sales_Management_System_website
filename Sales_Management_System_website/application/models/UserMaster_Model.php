<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class UserMaster_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	
	public function Addusermaster($data){
	
		$this->db->insert('user_master', $data);
	}
	
	public function ShowUserMaster($where){
		$query="SELECT (CASE WHEN a.UserType=1 THEN 'Admin' ELSE (case When a.UserType=2 then 'Warehouse Admin' else (case when a.UserType=3 then 'Observer' else 'Delivery Personnel' end) end) END) as UserType, a.ID,a.WarehouseCode,a.FullName,a.PhoneNo,a.Email,a.Address,a.Address1,a.State,a.City,a.Landmark,a.PinCode,a.UserID,b.Name as Warehouse from user_master a left outer join warehouse_master b on a.WarehouseID=b.ID where $where";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeleteUserMaster($where){
		$query="Delete from user_master where $where";
		$this->db->query($query);
	}
	
	public function UpdateUser($data,$where){
		$query="Update user_master set $data where $where";
		$this->db->query($query);
	}
	
	public function ShowUser($where){
		$sql="Select * from user_master where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
		
	}
}
?>