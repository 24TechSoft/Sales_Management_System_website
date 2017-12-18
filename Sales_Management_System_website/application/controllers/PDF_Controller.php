<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   Class OrderMaster_Controller extends  CI_Controller{
   	public function __construct(){
   		parent::__construct();
		$this->load->model('InStock_Model');
		$this->load->model('Order_Model');
		$this->load->model('CustomerMaster_Model');
		$this->load->model('Shopping_Model');
		$this->load->helper('cookie');
		$this->load->helper('url');
   	}
	
	public function index(){
		$data["warehouse"]=$this->InStock_Model->SelectWarehouse();
		$where="1";
		$data["item"]=$this->Order_Model->SelectItem($where);
		$this->load->view('Admin/admin_header');
		$this->load->view('Admin/form',$data);
		
		
	}
	public function generatePdf(){
		<?php
	
	require('fpdf.php');
	
	
	
	class PDF extends FPDF
	
	{
	
	// Page header
	
	function Header()
	
	{
	
		// Logo
	
		$this->Image('logo.jpg',10,6,30);
	
		// Arial bold 15
	
		$this->SetFont('Arial','B',15);
	
		// Move to the right
	
		$this->Cell(80);
	
		// Title
	
		$this->Cell(60,10,'Convert HTML TO PDF',1,0,'C');
	
		// Line break
	
		$this->Ln(20);
	
	}
	
	
	
	// Page footer
	
	function Footer()
	
	{
	
		// Position at 1.5 cm from bottom
	
		$this->SetY(-15);
	
		// Arial italic 8
	
		$this->SetFont('Arial','I',8);
	
		// Page number
	
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	
	}
	
	}
	
	
	
	// Instanciation of inherited class
	
	$pdf = new PDF();
	
	$pdf->AliasNbPages();
	
	$pdf->AddPage();
	
	$pdf->SetFont('Times','',12);
	
	
	
	$pdf->Cell(0,10,'Name : '.$_POST["name"],0,1);
	
	$pdf->Cell(0,10,'Email : '.$_POST["email"],0,1);
	
	$pdf->Cell(0,10,'Mobile : '.$_POST["mobile"],0,1);
	
	$pdf->Cell(0,10,'Comment : '.$_POST["comment"],0,1);
	
	
	
	$pdf->Output();
	
	?>
	}
	

	
	
   }
   ?>