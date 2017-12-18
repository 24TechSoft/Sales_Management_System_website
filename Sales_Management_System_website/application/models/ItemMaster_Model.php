<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ItemMaster_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	
	public function AddItemMaster($data){
		$this->db->insert('item_master', $data);
	}
	
	public function ShowItemMaster($where){
		$query="Select a.ID,a.Name,a.CategoryID,a.ItemDescription,a.CurrentPrice,a.Photo,b.Category from item_master a left outer join product_category b on a.CategoryID=b.ID where $where";
		$result=$this->db->query($query);
		$res=$result->result_array();
		return $res;
	}
	
	public function DeleteItemMaster($where){
		$query="Delete from item_master where $where";
		$this->db->query($query);
	}
	
	public function UpdateItem($data,$where){
		$query="Update item_master set $data where $where";
		$this->db->query($query);
		
	}
	
	// displayCategories
	public function displayCategories($where){
		$sql="Select * from product_category where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	//items by categories
	public function displayitemCategories($where){
		$sql="Select * from item_master where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	/*special items*/
	public function showspecialitems($where){
		$sql="Select a.*,b.Name from specialitems a left outer join item_master b on a.ItemID=b.ID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function addspecialitems($data){
		$this->db->insert('specialitems',$data);
	}
	
	public function deletespecialitems($where){
		$query="Delete from specialitems where $where";
		$this->db->query($query);
	}
	
}
?>