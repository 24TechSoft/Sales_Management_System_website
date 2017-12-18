<?php

defined('BASEPATH') OR exit('No direct script access allowed');



Class Order_Model extends CI_Model{

	public function __construct(){

		parent::__construct();

		$this->load->database();

	}

	public function SelectItem($where){

		$query="Select * from order_item where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	public function Quantity($where){

		$query="Select Quantity from current_stock where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	

	

	public function SelectOrderItems($where){

		$query="SELECT a.ID,a.OrderID,a.ItemName,a.ItemID,a.PackageQuantity,a.PackagePrice,a.TotalPrice,a.PackageID,a.PackageName,a.TotalQuantity,a.Status,b.DeliveryCharge,b.AssignedWarehouse,(Select Quantity from current_stock where WarehouseID=b.AssignedWarehouse and ItemID=a.ItemID) as ItemQuantity FROM `order_item` a left outer join orders b on a.OrderID=b.ID WHERE $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	public function AddOrder($data){

		$this->db->insert('orders', $data);

	}

	/*show only order */

	public function ShowOrder($where){

		$query="Select a.ID,a.DeliveryCharge,a.OrderDate,a.CustomerID,a.CusAddID,a.Items,a.OrderCode,a.TotalOrderValue,a.TaxDescription,a.TaxAmount,a.DiscountAmount,a.GrandTotal,a.AmountInText,(case when a.Status=0 then 'Order Pending' else (case when a.Status=1 then 'Order Confirmed' else (case when a.Status=2 then 'Order Delivered' else (case when a.Status=3 then 'Order Returned' else 'Order Cancelled' end)end)end)end) as Status,a.PaymentStatus,a.AssignedWarehouse,b.Name as Warehouse,1 as AvailableQty from orders a left outer join warehouse_master b on a.AssignedWarehouse=b.ID where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	/*Show order with the remaining quantity in current_stock*/

	public function ShowOrderQuantity($where){

		$query="Select a.ID,a.OrderDate,a.CustomerID,a.Items,a.OrderCode,a.TotalOrderValue,a.TaxDescription,a.TaxAmount,a.DiscountAmount,a.GrandTotal,a.AmountInText,a.Status,a.PaymentStatus,a.AssignedWarehouse,b.Name as Warehouse,c.ItemID,c.PackageQuantity,d.Quantity from orders a left outer join warehouse_master b on a.AssignedWarehouse=b.ID left outer join order_item c on a.ID=c.OrderID left outer join current_stock d on a.AssignedWarehouse=d.WarehouseID and c.ItemID=d.ItemID where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	public function UpdateOrders($data,$where){

		$sql="Update orders set $data where $where";

		$this->db->query($sql);

	}

	public function AssignWarehouse($sql){

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

		

	}

	

	

	

		/*Select Status*/

	public function SelectStatus(){

		$query="Select * from consignment_statuses";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}	



	public function DeleteOrder($where){

		$query="Delete from orders where $where";

		$this->db->query($query);

	}

	

	/*public function UpdateOrderItem($data,$where){

		$sql="Update order_item set $data where $where";

		$this->db->query($sql);

	

	}*/

	

	public function DeleteItemOrder($where){

		$sql="Delete from order_item where $where";

		$this->db->query($sql);

	

	}

	

	//Bill

	public function AddBill($data){

		$this->db->insert('bill', $data);

	}

	

	public function ShowBill($where){

		$query="Select a.ID,a.OrderID,a.Warehouse,a.CustomerID,a.BillDate,a.TotalOrderValue,a.TaxDescription,a.TaxAmount,a.DiscountAmount,a.GrandTotal,a.AmountInText,a.Status,b.Name as WarehouseName,c.OrderCode from bill a left outer join warehouse_master b on a.Warehouse=b.ID left outer join orders c on a.OrderID=c.ID where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	public function DeleteBill($where){

		$query="Delete from bill where $where";

		$this->db->query($query);

	}

	public function SelectBill($where){

		$query="Select a.OrderID, a.ItemName,a.ItemID,a.PackageQuantity,a.PackagePrice,a.TotalPrice,a.PackageID,a.PackageName,a.TotalQuantity,b.ID as BillID,c.OrderCode from order_item a left outer join bill b on a.OrderID=b.OrderID left outer join orders c on a.OrderID=c.ID where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	



	//bill item

	

	public function SelectBillID($where){

		$sql="Select ID from bill where $where";

		$result=$this->db->query($sql);

		$res=$result->result_array();

		return $res;

	}

	

	public function AddBillItem($data){

		$this->db->insert('bill_item', $data);

	}

	

	public function ShowBillItem($where){

		$query="Select * from bill_item where $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		return $res;

	}

	

	public function DeleteBillItem($where){

		$query="Delete from bill_item where $where";

		$this->db->query($query);

	}

	

	

	//order_item

	public function UpdateOrder($data,$where){

		$sql="Update orders set $data where $where";

		$query=$this->db->query($sql);

		

		

	}

	

	public function ShowOrders($where){

		$sql="Select * from orders where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	public function ShowOrdersID($where){

		$sql="Select max(ID) as ID from orders where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	public function AddOrderItem($data){

		$this->db->insert('order_item',$data);

	}

	

	public function UpdateOrderItem($data,$where){

		$sql="Update order_item set $data where $where";

		$this->db->query($sql);

	}

	

	//order_detail

	public function order_details($where){

		$sql="Select * from orders where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	//order_passing

	public function checkorder($where){

		$sql="Select a.ID,a.OrderCode,b.Name as Warehouse from orders a left outer join warehouse_master b on a.AssignedWarehouse = b.ID where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	/*order detail */

	public function orderdetail($where){

		$sql="Select a.ID,a.OrderCode,a.OrderDate,a.GrandTotal,a.TotalOrderValue,a.TaxAmount,b.ItemID,b.ItemName,b.PackageNAme,b.PackageQuantity,b.PackagePrice,b.TotalQuantity from orders a left outer join order_item b on a.ID=b.OrderID where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function quantityWarehouse($where){

		$sql="Select * from current_stock where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	public function updatewarehouse($data,$where){

		$sql="Update orders set $data where $where";

		$query=$this->db->query($sql);

		

	}

	

	//order history

	public function CustomerOrders($where){

		$sql="SELECT a.ID,a.OrderDate,a.CustomerID,a.OrderCode,a.Items,a.TotalOrderValue,a.TaxDescription,a.TaxAmount,a.DiscountAmount,a.GrandTotal,a.Status,b.ItemName,b.PackageName,b.PackageQuantity,b.TotalQuantity,c.Photo as ItemPhoto FROM `orders` a left outer join order_item b on a.ID=b.OrderID left outer join item_master c on b.ItemID=c.ID WHERE $where ";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function orderscus($where){

		$sql="Select * from orders where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	//selectsource uer ID for Notification

	public function SelectSource($where){

		$sql="Select ID from user_master where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function addNotification($data){

		$this->db->insert('notification',$data);

	}

	

	public function SelectOrderCode($where){

		$sql="Select OrderCode from orders where $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function orderitemDetail($where){

		$sql="SELECT a.ItemName,a.PackageQuantity,a.TotalPrice,a.PackageName,a.PackagePrice,a.TotalQuantity,c.Photo FROM `order_item` a  left outer join item_master c on a.ItemID=c.ID WHERE $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function findWarehouse($where){

		$sql="SELECT a.Quantity,a.WarehouseID,b.Name,a.ItemID,c.NAme as ItemName FROM `current_stock` a left outer join warehouse_master b on a.WarehouseID=b.ID left outer join item_master c on a.ItemID=c.ID WHERE $where";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	

	public function requestItem($data){

		$this->db->insert('warehouse_request',$data);

	}

	

	public function OrderCount(){

		$sql="Select count(ID) as OrderCount from orders ";

		$query=$this->db->query($sql);

		$result=$query->result_array();

		return $result;

	}

	public function showDeliveryAddress($where){
		$query="SELECT a.ID,a.CustomerID,a.OrderID,a.Address,a.Locality,a.Village,a.State,a.PinCode,a.Landmark,b.Name FROM `delivery_address` a left outer join customer_master b on a.CustomerID=b.ID WHERE $where";

		$result=$this->db->query($query);

		$res=$result->result_array();

		

		return $res;
		
	}
	
	public function sendItem($data){
		$this->db->insert('warehouseordertransfer',$data);
	}

	

	

}

?>