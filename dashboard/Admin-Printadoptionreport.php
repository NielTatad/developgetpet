<?php
require 'pdfcreate/fpdf.php';
include('C:\xampp\htdocs\developgetpet\includes\config.php');


class myPDF extends FPDF{
	

		
		function header(){
		    $this->Image('C:\xampp\htdocs\developgetpet\web\images\Logo\Logo.png',-4,-12,60);
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
        //$this->Cell(315,30,'Total No. of Students: ',0,0,'C'); $this->Cell(-270,30,$dataPetOwner->total,0,0,'C'); 
 
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

			    
			   $this->Cell(30,10,'Date Created:',0,0,'C');$this->Cell(62,10,$currentDate,0,0,'C');
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
                $this->Cell(45,10,'PET BREED',1,0,'C');
                $this->Cell(35,10,'POST STATUS',1,0,'C');
                $this->Cell(35,10,'PET STATUS',1,0,'C');
                $this->Cell(35,10,'ADOPTER',1,0,'C');

				
                
				$this->SetFont('Arial','B',14);
				

				$this->Ln(10);


}
function viewTable($dbh){

		$this->SetFont('helvetica','',12);
   
	   	
		//$regid  =intval($_GET['regid']);

        
        
        $sql="SELECT * from history WHERE Title='Adoption' ORDER BY historyID DESC";
                                    $query=$dbh->prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchALL(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount()>0)
                                    {
                                    foreach($results as $result)
       
 		{		
			$pet_id = $result->petID;
			$sql1="SELECT * from postpet WHERE petID='$pet_id' AND petStatus='Adopted' ORDER BY petID DESC";
			$query1=$dbh->prepare($sql1);
			$query1->execute();
			$results1=$query1->fetchALL(PDO::FETCH_OBJ);
			$cnt1=1;
			if($query1->rowCount()>0)
			{
			foreach($results1 as $result1)
			{		
				$master_id = $result->masterID;
                                      $sql2="SELECT * from register WHERE userID='$master_id'";
                                      $query2=$dbh->prepare($sql2);
                                      $query2->execute();
                                      $results2=$query2->fetchALL(PDO::FETCH_OBJ);
                                      $cnt2=1;
                                      if($query2->rowCount()>0)
                                      {
                                      foreach($results2 as $result2)
                                      {
				
				$this->Cell(35,10,$result2->orgName.''.$result2->userFirstname.' '.$result2->userLastname,1,0,'C');		
				$this->Cell(35,10,$result->petName,1,0,'C'); 	
				$this->Cell(35,10,$result->petType,1,0,'C'); 	
				$this->Cell(45,10,$result->petBreed,1,0,'C'); 
				$this->Cell(35,10,$result1->postStatus,1,0,'C');	
				$this->Cell(35,10,$result1->petStatus,1,0,'C');	
				$this->Cell(35,10,$result->userName,1,0,'C');						
  			    $this->Ln();
		}	
	

    }

}	
	

}
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