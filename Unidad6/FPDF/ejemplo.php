<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Informe de Alumnos', 0, 1, 'C');
$pdf->Ln(10);

$pdf->Image('descarga.jpeg', 7, 6, 21);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Grupo Bilingue 2º DAW', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 10, 'Nombre', 1);
$pdf->Cell(90, 10, 'Apellido', 1);
$pdf->Ln();

$alumnos = [
    ['nombre' => 'jose', 'apellido' => 'Ortiz'],
    ['nombre' => 'juan', 'apellido' => 'Ortiz'],
    ['nombre' => 'Luis', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
    ['nombre' => 'Jesus', 'apellido' => 'Ortiz'],
    ['nombre' => 'Daniel', 'apellido' => 'Ortiz'],
    ['nombre' => 'Jairo', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
    ['nombre' => 'Sergio', 'apellido' => 'Ortiz'],
    ['nombre' => 'Andres', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
    ['nombre' => 'Juan Angel', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
    ['nombre' => 'Dani', 'apellido' => 'Ortiz'],
    ['nombre' => 'Fran', 'apellido' => 'Ortiz'],
    ['nombre' => 'jose', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
    ['nombre' => 'Juan', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
    ['nombre' => 'pablo', 'apellido' => 'Ortiz'],
];

$pdf->SetFont('Arial', '', 12);
foreach ($alumnos as $alumno) {
    $pdf->Cell(90, 10, $alumno['nombre'], 1);
    $pdf->Cell(90, 10, $alumno['apellido'], 1);
    $pdf->Ln();
}

$pdf->Output();
?>