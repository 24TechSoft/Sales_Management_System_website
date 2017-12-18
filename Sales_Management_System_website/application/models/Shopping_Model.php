<?php
defined('BASEPATH') OR exit('No direct script access allowed');
global $Single;
	global $Double;
	global $Ten;
	$Single = array( "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine" );
	$Double = array( "Eleven", "Tweleve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Eighteen", "Ninteen" );
	$Ten = array( "Ten", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninty" );
Class Shopping_Model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function GetItems($where){
		$sql="Select a.ID as ItemID,a.Name,a.ItemDescription,a.Photo,coalesce(b.ID,'')as PackageID,coalesce(b.PackageName,'')as PackageName,coalesce(b.Price,0)as Price,coalesce(b.Quantity,0)as PackageQuantity,a.CategoryID,(Select sum(Quantity) from current_stock where ItemID=a.ID) as Quantity,b.MinVendorQty,c.Category from item_master a left outer join product_package b on a.ID=b.ItemID left outer join product_category c on c.ID=a.CategoryID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function GetCategories($where){
		$sql="Select a.*,(Select count(ID) from item_master where CategoryID=a.ID) as items from product_category a where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function getOrderCodes($where){
		$sql="Select * from orders where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function GetItemNo($where){
		$sql="Select * from shop_cart where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
		
	}
	
	/*Products*/
	public function GetProducts($where){
		$sql="SELECT a.*,(Select sum(Quantity) from current_stock where ItemID=a.ID) as Quantity,b.Category FROM `item_master` a  left outer join product_category b on b.ID=a.CategoryID WHERE $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function showPackages($where){
		$sql="Select ID as ProductID,PackageName,Quantity as ProductQuantity,MinVendorQty,Price as ProductPrice from product_package where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	
	
	/*load Category Items */
	public function LoadCatItems($where){
		$sql="Select a.ID as ItemID,a.Name,a.ItemDescription,a.Photo,coalesce(b.ID,'')as PackageID,coalesce(b.PackageName,'')as PackageName,coalesce(b.Price,0)as Price,coalesce(b.Quantity,0)as PackageQuantity,c.Category,(Select sum(Quantity) from current_stock where ItemID=a.ID) as Quantity from item_master a left outer join product_package b on a.ID=b.ItemID left outer join product_category c on a.CategoryID=c.ID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	/* cart count*/
	public function cartcount($where){
		$sql="Select a.*,b.Photo from shop_cart a left outer join item_master b on b.ID=a.ItemID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	/*search items */
	public function SearchItems($where){
		$sql="Select a.ID as ItemID,a.Name,a.CategoryID,a.ItemDescription,a.Photo,coalesce(b.ID,'')as PackageID,coalesce(b.PackageName,'')as PackageName,coalesce(b.Price,0)as Price,coalesce(b.Quantity,0)as PackageQuantity,c.Category from item_master a left outer join product_package b on a.ID=b.ItemID left outer join product_category c on a.CategoryID=c.ID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	//shop cart
	public function addcart($data){
		$this->db->insert('shop_cart',$data);
	}
	
	/*update shop cart*/
	public function updateShopCart($data,$where){
		$sql="Update shop_cart set $data where $where";
		$this->db->query($sql);
	}
	
	/*public function getprice($where){
		$sql="Select * from shop_cart where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result; 
	}*/
	
	public function GetOrderItems($where){
		$sql="Select a.ID,a.ItemID,a.ItemName,a.PackageQuantity,a.PackagePrice,a.PackageID,a.TotalQuantity,a.TotalPrice,a.PackageName,a.PackageQuantity,a.DateOfOrder,a.CustomerID,b.Photo,b.ItemDescription,c.MinVendorQty from shop_cart a left outer join item_master b on a.ItemID=b.ID left outer join product_package c on a.PackageID=c.ID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function GetPrice($where){
		$sql="Select sum(TotalPrice) as Price from shop_cart where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function Status($where){
		$sql="Select * from orders where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	public function updatecart($data,$where){
		$sql="Update shop_cart set $data where $where";
		$this->db->query($sql);
		$sql1="Select * from shop_cart where $where";
		$query=$this->db->query($sql1);
		$result=$query->result_array();
		return $result;
		
	}
	
	public function removecart($where){
		$sql="Delete from shop_cart where $where";
		$query=$this->db->query($sql);
		
	}
	
	//delivery address
	
	public function DeliveryAddress($data){
		$this->db->insert('delivery_address',$data);
	}
	
	/*track order 
	public function trackorder($where){
		$sql="SELECT a.OrderCode,b.Date,b.ConsignmentNo,b.StatusID from orders a left outer join order_consignment b on a.ID=b.OrderID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}*/
	public function ConsignmentNo($where){
		$sql="SELECT a.ConsignmentNo,a.Date,a.StatusID,a.Remarks,c.OrderCode from order_consignment a  left outer join orders c on c.ID=a.OrderID where $where";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	public function ConsignmentDetail($where){
		$sql="SELECT a.ConsignmentNo,a.StatusID,a.Date,b.StatusDetail from order_consignment a left outer join consignment_statuses b on a.StatusID=b.ID where $where order by a.ID and b.ID";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
		
	
	public function amounttext($data){
		
		$TextMoney="";
		$DAmount=floatval($data);
		$HundredText = "";
        $ThousandText = "";
        $LakhText = "";
		$Amount=settype($data, "string");
		
		$Paise=substr($Amount,(strpos($Amount,".")+1));
		$Intpaise=$Paise;
		if($Intpaise>0){
			
			$amtu=($this->ConvertToTen($Intpaise));
			$TextMoney=$amtu. " Paisa";
		}
		
		$IntAmount=intval($DAmount);
		if(($IntAmount % 100)>0){
			$TextMoney = ($this->ConvertToTen($IntAmount % 100)). " Rupees ". $TextMoney;
		}
		$DAmount = $IntAmount / 100;
		if((intval($DAmount) % 10)>0){
			$TextMoney =($this->ConvertToHundred(intval($DAmount) % 10))." Hundred ".$TextMoney;
		}
		$DAmount = $DAmount / 10;
		if((intval($DAmount) % 100)>0){
			$Amt=
			$TextMoney = ($this->ConvertToHundred(intval($DAmount) % 100))." Thousand ".$TextMoney;
		}
		$DAmount = $DAmount / 100;
		
		if((intval($DAmount) % 100)>0){
			$TextMoney = ($this->ConvertToHundred(intval($DAmount) % 100))." Lakh ".$TextMoney;
		}
		$DAmount = $DAmount / 100;
		if((intval($DAmount) % 100)>0){
			$TextMoney = ($this->ConvertToHundred(intval($DAmount) % 100)) ." Crore ". $TextMoney;
		}
		$DAmount = $DAmount / 100;
		return $TextMoney;
	}
	
	public function ConvertToTen($data){
		
		$Amount = "";
		$Amt=$data;
		$val=0;
		$amtval="";
            if ($Amt > 10 && $Amt < 20)
            {
				$Amount = floatval([$Amt - 1 - 10]);
				
            }
            else if ($Amt < 10)
            {
				$val=$Amt - 1;
				$amtval=$GLOBALS['Single'];
                $Amount = $amtval[$val];
				
            }
            else if ($Amt == 10)
            {
				
				$amtval=$GLOBALS['Ten'];
                $Amount = $amtval[0];
				
            }
            else if ($Amt > 20)
            {
				$val=intval($Amt / 10 - 1);
				$amtval=$GLOBALS['Ten'];
                $Amount = $amtval[$val];
                $Amt = $Amt % 10;
				
                if ($Amt > 0)
                {
					$value=$Amt - 1;
					$amtval=$GLOBALS['Single'];
					$aval=$amtval[$value];
                    $Amount = $Amount ." ". $aval;
					
                }
				
            }
            return $Amount;
	}
	
	public function ConvertToHundred($data)
        {
			$Amt=intval($data);
            $Amount = "";
			$val=$Amt-1;
            $Amount = $GLOBALS['Single'];
            return($Amount[$val]);
        }
}
?>