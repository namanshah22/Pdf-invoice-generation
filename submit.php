<?php
require('fpdf.php'); // Include FPDF library

// Get form data from POST request
$buyerName = $_POST['buyerName'];
$product = $_POST['product'];
$price = $_POST['price'];
$total = $_POST['total'];

// Create PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set font and font size
$pdf->SetFont('Arial', 'B', 16);

// Write title
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');

// Write buyer information
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Buyer:', 0, 0, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, $buyerName, 0, 1, 'L');

// Write product details
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Product:', 0, 0, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, $product, 0, 1, 'L');

// Write price
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Price:', 0, 0, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, $price, 0, 1, 'L');

// Write total
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Total:', 0, 0, 'L');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, $total, 0, 1, 'L');

// Output PDF to browser
$pdf->Output('invoice.pdf', 'D');
?>
