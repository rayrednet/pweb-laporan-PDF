<?php
require('fpdf/fpdf.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to export student data to PDF
function exportToPDF()
{
    // Create a new PDF instance with landscape orientation
    $pdf = new FPDF('L');
    $pdf->AddPage();

    // Set font settings
    $pdf->SetFont('Arial', 'B', 14);

    // Add a title
    $pdf->Cell(0, 10, 'Pink Highschool Students List', 0, 1, 'C');
    $pdf->Ln(10);

    // Set font settings for table header
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'SIN', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Photo', 1, 0, 'C');
    $pdf->Cell(50, 10, 'Name', 1, 0, 'C');
    $pdf->Cell(25, 10, 'Gender', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Phone Number', 1, 0, 'C');
    $pdf->Cell(80, 10, 'Address', 1, 1, 'C');

    // Set font settings for table content
    $pdf->SetFont('Arial', '', 12);

    // Load file config.php
    include "config.php";

    // Fetch student data from the database
    $sql = $pdo->prepare("SELECT * FROM student");
    $sql->execute();

    // Iterate through the student data and add rows to the PDF table
    while ($data = $sql->fetch()) {
        $pdf->Cell(40, 40, $data['SIN'], 1, 0, 'C');

        // Get the image file path
        $imagePath = 'img/'.$data['photo'];
        // Check if the image file exists
        if (file_exists($imagePath)) {
            // Get the image dimensions
            list($width, $height) = getimagesize($imagePath);

            // Calculate the aspect ratio to fit the image within the cell
            $aspectRatio = $width / $height;

            // Calculate the maximum width and height of the image within the cell
            $maxWidth = 40;
            $maxHeight = 40 / $aspectRatio;

            // Save the current position
            $x = $pdf->GetX();
            $y = $pdf->GetY();

            // Add the image to the cell
            $pdf->Image($imagePath, $x, $y, $maxWidth, $maxHeight); // Add the photo to the cell

            // Move the position to the right of the image
            $pdf->SetXY($x + $maxWidth, $y);
        } else {
            // If the image file doesn't exist, display alternative text
            $pdf->Cell(40, 40, 'Image Not Found', 1, 0, 'C');
        }

        $pdf->Cell(50, 40, $data['name'], 1, 0, 'C');
        $pdf->Cell(25, 40, $data['gender'], 1, 0, 'C');
        $pdf->Cell(40, 40, $data['telp'], 1, 0, 'C');
        $pdf->MultiCell(80, 40, $data['address'], 1, 'C');
    }

    // Output the PDF
    $pdf->Output();
}

// Call the exportToPDF function
exportToPDF();
?>
