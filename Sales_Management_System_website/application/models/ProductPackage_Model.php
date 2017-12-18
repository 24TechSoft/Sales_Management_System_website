<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ProductPackage_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	
	public function AddPackage($data){
		$this->db->insert('product_package', $data);
	}
	
	public function ShowPackage($where){
		$query="SELECT a.ID,a.PackageName,a.MinVendorQty,a.CategoryID,a.Quantity,a.Price,b.Name as Item,c.Category from product_package a left outer join item_master b on a.ItemID=b.id left outer join product_category c on a.CategoryID=c.ID where $where order by a.ID desc";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeletePackage($where){
		$query="Delete from product_package where $where";
		$this->db->query($query);
	}
	
	//Product Category
	public function AddCategory($data){
		$this->db->insert('product_category',$data);
	}
	
	public function DisplayCategory($where){
		$sql="Select * from product_category where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function DeleteCategory($where){
		$sql="Delete from product_category where $where";
		$this->db->query($sql);
	}
	
}
?>