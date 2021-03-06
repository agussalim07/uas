<?php
//PDF USING MULTIPLE PAGES

require('lib/fpdf.php');

//Connect to your database
include("connection.php");

//Create new pdf file
$pdf=new FPDF();

//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();

//set initial y axis position per page
$y_axis_initial = 25;

//print column titles
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetY($y_axis_initial);
$pdf->SetX(5);
$pdf->Cell(33,6,'Nama',1,0,'L',1);
$pdf->Cell(33,6,'Alamat',1,0,'L',1);
$pdf->Cell(33,6,'Provinsi',1,0,'L',1);
$pdf->Cell(33,6,'Email',1,0,'L',1);
$pdf->Cell(33,6,'No Handphone',1,0,'L',1);
$pdf->Cell(33,6,'Keahlian',1,0,'L',1);

$y_axis = $y_axis_initial + 10;

//Select the Products you want to show in your PDF file
$result=mysqli_query($db, "select * from relawan");

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;

//Set Row Height
$row_height = 6;

while($row = mysqli_fetch_array($result))
{
    //If the current row is the last one, create new page and print column title
    if ($i == $max)
    {
        $pdf->AddPage();

        //print column titles for the current page
        $pdf->SetY($y_axis_initial);
        $pdf->SetX(5);
        $pdf->Cell(33,6,'Nama',1,0,'L',1);
        $pdf->Cell(33,6,'Alamat',1,0,'L',1);
        $pdf->Cell(33,6,'Provinsi',1,0,'L',1);
        $pdf->Cell(33,6,'Email',1,0,'L',1);
        $pdf->Cell(33,6,'No Handphone',1,0,'L',1);
        $pdf->Cell(33,6,'Keahlian',1,0,'L',1);
        
        //Go to next row
        $y_axis = $y_axis + $row_height;
        
        //Set $i variable to 0 (first row)
        $i = 0;
    }

    $fullname = $row['fullname'];
    $address = $row['address'];
    $province = $row['province'];
    $email = $row['email'];
    $no_handphone = $row['no_handphone'];
    $skills = $row['skills'];

    $pdf->SetFont('Courier','',10);
    $pdf->SetY($y_axis);
    $pdf->SetX(5);
    $pdf->Cell(33,6,$fullname,1,0,'L',1);
    $pdf->Cell(33,6,$address,1,0,'L',1);
    $pdf->Cell(33,6,$province,1,0,'L',1);
    $pdf->Cell(33,6,$email,1,0,'L',1);
    $pdf->Cell(33,6,$no_handphone,1,0,'L',1);
    $pdf->Cell(33,6,$skills,1,0,'L',1);

    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
}


//Send file
$pdf->Output();
?>