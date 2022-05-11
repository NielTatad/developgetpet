<?php
require 'pdfcreate/fpdf.php';
include('C:\xampp\htdocs\developgetpet\includes\config.php');


class myPDF extends FPDF{
	

		
		function header(){
		    
			$this->SetFont('Arial','B',14);
			$this->Cell(280,4,'GETPET (ADOPTION REPORT)',0,0,'C');
			$this->Ln();
			$this->SetFont('Arial','I',11);
			$this->Cell(213,4,' ',0,0,'C');
			$this->Ln(20);
		}
	
	


		function footer(){
	       

		$this->SetY(-80);
        $this->SetFont('helvetica','B',10);  
       // $this->Cell(315,30,'Total No. of Students: ',0,0,'C'); $this->Cell(-270,30,$data2->total,0,0,'C'); 
 
		$this->SetY(-10);
		$this->SetFont('Arial','B',8);
		$this->Cell(0,10,'Page'.$this->PageNo

().'/{nb}',0,0,'R');
			
		}

		function headertable(){


		   




		


		    /////$stmt1=$dbh1->query('Select semestername from students');
		   
			   date_default_timezone_set('Asia/Manila');
			    $currentDate = date("F j, Y g:i A ");
				$this->SetFont('Arial','B',12);

			    
			   $this->Cell(30,10,'Date Created: ',0,0,'C'); $this->Cell(62,10,$currentDate,0,0,'C');
				$this->Ln(); 
               	$this->SetFont('Arial','B',14);
			   $this->Cell(200,10,' ',0,0,'C'); 
		       $this->Ln(5);
        	  // $this->Cell(200,8,$data1->semestername,0,0,'C'); 
				//$this->Ln(15);  
			  	$this->SetFont('Arial','B',12);
			  	$this->SetFillColor(230,230,0);
				$this->Cell(35,10,'PET OWNER',1,0,'C');
				$this->Cell(35,10,'PET NAME',1,0,'C');
                $this->Cell(35,10,'PET TYPE',1,0,'C');
                $this->Cell(35,10,'PET BREED',1,0,'C');
                $this->Cell(35,10,'PET PHOTO',1,0,'C');
                $this->Cell(35,10,'POST STATUS',1,0,'C');
                $this->Cell(35,10,'PET STATUS',1,0,'C');
                $this->Cell(35,10,'ADOPTER',1,0,'C');

				
                
				$this->SetFont('Arial','B',14);
				

				$this->Ln(10);


}
function viewTable($dbh){

		$this->SetFont('helvetica','',12);
   
	   	
		//$regid  =intval($_GET['regid']);

        
        $master_id = $result->masterID;
        $sql="SELECT * from register WHERE userID='$master_id'";
        $query=$dbh->prepare($sql);
        $query->execute();
        $results=$query->fetchALL(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount()>0)
        {
        foreach($results as $result)
       
 		{
 				$this->Cell(35,10,$result->orgName,1,0,'C'); 		

  			    $this->Ln();
		}	
	

    }

  $sql2="SELECT count( * ) as  totalrecord from books inner join borrow on books.bookID=borrow.bookID inner join students on borrow.studID=students.studID where borrow.status='RETURNED' order by borrow.dateReturned desc";




$query2 = $dbh->prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query2->rowCount() > 0)
 {
		foreach($results2 as $result)
 		{
 			  $this->Ln();
 		      $this->Cell(-120,10,'Total Returned Books:      '.$result->totalrecord,0,0,'L');
		      $this->Ln();
		}		
}


$sql3="SELECT SUM(bookfine) as total FROM borrow";
$query3 = $dbh->prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query3->rowCount() > 0)
 {
		foreach($results3 as $result)
 		{
 			$this->Cell(-120,10,'Total Penalty Collected:    Php. '.$result->total.".00",0,0,'L');
		      $this->Ln();
		}		
}





}
}
$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
//$pdf= new PDF('P','mm',array(215.9,279.4));
$pdf->headertable();
//$pdf->footer1();
$pdf->viewTable($dbh);
$pdf->Output();


?>