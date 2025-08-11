

<?php
ob_start();

require 'pdf/fpdf.php'; 
require 'conexion1.php'; 

$conn = conectar();

if (isset($_GET['ID_Paciente'], $_GET['ID_Nota'])) {
    $ID_Paciente = $_GET['ID_Paciente'];
    $ID_Nota = $_GET['ID_Nota'];
} else {
   die("Error con la nota");
}

// $ID_Nota = $_GET['ID_Nota'];

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFillColor(255, 182, 193); 
$pdf->Rect(0, 0, 297, 26, 'F'); 

$pdf->Image('img/ft.png', 10, 2, 26);
$pdf->SetFont('Arial', 'B', 25);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetY(4); 
$pdf->Cell(0, 17, 'Hospital Sacred Heart', 0, 1, 'C'); 
$pdf->Ln(5); 

// Título del reporte
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'I', 16);
$pdf->Cell(0, 10, 'Nota Individual', 0, 1, 'C');
$pdf->Ln(5);

// Tabla de encabezado
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 105, 180); 
$pdf->SetTextColor(255, 255, 255); // Blanco

$pdf->Cell(20, 10, 'ID', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Paciente', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Medico', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Ingreso', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Egreso', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Sanatorio', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Farmacia', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Laboratorio', 1, 1, 'C', true);

// Contenido
$query = "SELECT * FROM nota_principal WHERE ID_PacienteN = $ID_Paciente";
$result = $conn->query($query);

$total_sanatorio = 0;
$total_farmacia = 0;
$total_lab = 0;

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);

while ($row = $result->fetch_assoc()) {
    $rownp = $conn->query("SELECT Nombre_Comp FROM paciente WHERE ID_Paciente='$row[ID_PacienteN]'")->fetch_assoc();
    $rowm = $conn->query("SELECT Nombre_Comp FROM medico WHERE ID_Medico='$row[ID_MedicoN]'")->fetch_assoc();
    $rowf = $conn->query("SELECT Gastos_F FROM gastos_farmacia WHERE ID_G_Farmacia = '$row[ID_G_FarmaciaN]'")->fetch_assoc();
    $rows = $conn->query("SELECT Gastos_S FROM gastos_sanatorio WHERE ID_G_Sanatorio = '$row[ID_G_SanatorioN]'")->fetch_assoc();
    $rowl = $conn->query("SELECT Gastos_L FROM gastos_lab WHERE ID_G_LAB = '$row[ID_G_LabN]'")->fetch_assoc();
    
    $pdf->Cell(20, 10, $row['ID_Nota'], 1, 0, 'C');
    $pdf->Cell(60, 10, utf8_decode($rownp['Nombre_Comp']), 1, 0, 'C'); 
    $pdf->Cell(60, 10, utf8_decode($rowm['Nombre_Comp']), 1, 0, 'C'); 
    $pdf->Cell(25, 10, $row['F_Ingreso'], 1, 0, 'C'); 
    $pdf->Cell(25, 10, $row['F_Egreso'], 1, 0, 'C'); 
    $pdf->Cell(25, 10, '$' . number_format($rows['Gastos_S'], 2), 1, 0, 'C');
    $pdf->Cell(25, 10, '$' . number_format($rowf['Gastos_F'], 2), 1, 0, 'C');
    $pdf->Cell(30, 10, '$' . number_format($rowl['Gastos_L'], 2), 1, 1, 'C');
    
    $total_sanatorio += $rows['Gastos_S'];
    $total_farmacia += $rowf['Gastos_F'];
    $total_lab += $rowl['Gastos_L'];
    
}

// Totales individuales por departamento
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(240, 240, 240); // Gris claro
$pdf->Cell(190, 10, 'Totales:', 1, 0, 'R', true);
$pdf->Cell(25, 10, '$' . number_format($total_sanatorio, 2), 1, 0, 'R', true);
$pdf->Cell(25, 10, '$' . number_format($total_farmacia, 2), 1, 0, 'R', true);
$pdf->Cell(30, 10, '$' . number_format($total_lab, 2), 1, 1, 'R', true);

// Total general
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(200, 200, 200); 
$pdf->Cell(240, 10, 'Total General:', 1, 0, 'R', true);
$pdf->Cell(30, 10, '$' . number_format($total_sanatorio + $total_farmacia + $total_lab, 2), 1, 1, 'R', true);

$pdf->Ln(5);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 10, 'Fecha de emision: ' . date('d/m/Y'), 0, 1, 'R');

$pdf->SetDrawColor(255, 182, 193); 
$pdf->SetLineWidth(1);
$pdf->Line(10, 190, 287, 190); // Un poco más arriba

$pdf->SetY(192);  // Ajusta Y para que no rebase la hoja

$pdf->Output('D', 'Recibo Individual paciente ' . utf8_decode($rownp['Nombre_Comp']) . '.pdf');
ob_end_flush();
?>

