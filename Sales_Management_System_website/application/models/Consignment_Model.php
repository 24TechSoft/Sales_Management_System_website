<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Consignment_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	/*Add Consignment Status */
	public function AddConStatus($data){
		$this->db->insert('consignment_statuses',$data);
	}
	
	public function ShowConStatus($where){
		$sql="Select* from consignment_statuses where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function DeleteConStatus($where){
		$sql="Delete from consignment_statuses where $where";
		$this->db->query($sql);
	}
	/* End Consignment Status */
	
	/*Consignment */
	public function AddConsignment($data){
		$this->db->insert('consignment',$data);
	}
	
	public function ShowConsignment($where){
		$sql="Select a.ID,a.ConsignmentNo,a.OrderStatus,a.OrderNo,a.Deliveryboy,a.SourceAddress,a.DestinationAddress,a.ConsignmentDate,b.FullName,c.OrderCode,d.StatusDetail,d.ID as StatusID from consignment a left outer join user_master b on a.Deliveryboy=b.ID left outer join orders c on a.OrderNo=c.ID left outer join consignment_statuses d on a.OrderStatus=d.ID where $where order by ID desc";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function ShowConsignmentdelivery($where){
		$sql="SELECT a.ID,a.ConsignmentNo,a.ConsignmentDate,a.OrderNo,a.OrderStatus,b.StatusDetail,c.FullName FROM `consignment` a left outer join consignment_statuses b on a.OrderStatus=b.ID left outer join user_master c on a.Deliveryboy=c.ID WHERE $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	
	public function DeleteConsignment($where){
		$sql="Delete from consignment where $where";
		$this->db->query($sql);
	}
	
	public function UpdateConsignment($data,$where){
		$sql="Update consignment set $data where $where";
		$this->db->query($sql);
	}
	
	/*end Consignmnet */
	
	/*tracking */
	public function AddTracking($data){
		$this->db->insert('consignment_tracking',$data);
	}
	
	public function ShowTracking($where){
		$sql="Select  a.ID,a.ConsignmentNo,a.AssignedDeliveryboy,a.Status,a.Remarks,b.FullName,c.StatusDetail from consignment_tracking a left outer join user_master b on a.AssignedDeliveryboy=b.ID left outer join consignment_statuses c on a.Status=c.ID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function DeleteTracking($where){
		$sql="Delete from consignment_tracking where $where";
		$this->db->query($sql);
	}
	
	/*Order Consignmnetr */
	public function AddOrderConsignment($data){
		$this->db->insert('order_consignment',$data);
	}
	public function SelectConNo($where){
		$sql="Select ConsignmentNo from order_consignment where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function showOrderConsignment($where){
		$sql="SELECT a.ID,a.Date,a.OrderID,a.ConsignmentNo,a.BillID,a.StatusID,a.Remarks,b.StatusDetail as Status,c.OrderCode FROM `order_consignment` a left outer join consignment_statuses b on a.StatusID=b.ID left outer join orders c on a.OrderID=c.ID WHERE $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function DeleteUpdateorder($where){
		$sql="Delete from order_consignment where $where";
		$this->db->query($sql);
	}
	
	
	
	public function showOrderConsignments($where){
		$sql="SELECT a.ID,a.OrderID,a.ConsignmentNo,a.StatusID,a.BillID,a.Remarks,b.StatusDetail as Status,c.OrderCode FROM `order_consignment` a left outer join consignment_statuses b on a.StatusID=b.ID left outer join orders c on a.OrderID=c.ID WHERE $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function OrderConsignment($where){
		$sql="select a.ID,a.ConsignmentNo,a.Date,a.StatusID,a.OrderID,a.BillID,b.OrderCode,d.StatusDetail,(select concat(Address,', ',Locality,', ',State,', ',PinCode) from delivery_address where ID=b.CusAddID)as Address,c.Warehouse,c.GrandTotal from order_consignment a inner join orders b on a.OrderID=b.ID inner join bill c on a.BillID=c.ID left outer join consignment_statuses d on a.StatusID=d.ID where $where order by a.ID desc";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	
}
?>