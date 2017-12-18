<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	/*public function checkuser($where){
		$sql="Select * from customer_master where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}*/
	//vendors
	public function checkuser($where){
		$sql="Select * from vendors where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function selectuser($where){
		$sql="Select * from user_master where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	
	//admin login
	
	public function checkadmin($where){
		$sql="Select * from user_master where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	//add Login detail
	
	public function addlogin($data){
		$this->db->insert('login_detail',$data);
	}
	
	public function deletelogin($where){
		$sql="Delete from login_detail where $where";
		$this->db->query($sql);
	}
	
	/*notification */
	public function ShowNotification($where){
			$sql="Select * from notification where $where order by ID desc limit 10";
			$query=$this->db->query($sql);
			$result=$query->result_array();
			return $result;
	}
	
	public function showNotificationcount($where1,$where){
		$sql="select a.ID,a.SourceUserID,a.SourceUserType,a.WarehouseID,a.Detail,a.Type,a.Date,COALESCE((select count(ID) from notification_status where (ViewStatus=1 || OpenStatus=1) and $where1),0)as Viewed from notification a where $where";
		$query=$this->db->query($sql);
			$result=$query->result_array();
			return $result;
	}
	
	
	public function ShowAllNotification($where){
			$sql="Select * from notification where $where order by ID desc ";
			$query=$this->db->query($sql);
			$result=$query->result_array();
			return $result;
	}
	/*notification status */
	public function Notification_avail($where){
		$sql="Select * from notification_status where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function AddNotificationStatus($data){
		$this->db->insert('notification_status',$data);
	}
	public function updateNotiStat($data,$where){
		$sql="Update notification_status set $data where $where";
		$this->db->query($sql);
	}
	
	/*select customer */
	public function selectCustomer($where){
		$sql="Select * from customer_master where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function setPassword($data,$where){
		$sql="Update customer_master set $data where $where";
		$this->db->query($sql);
	}
	
	/*update customerID in shopcart*/
	public function updateShopCart($data,$where){
		$sql="Update shop_cart set $data where $where";
		$this->db->query($sql);
	}
	
	
	
}
?>