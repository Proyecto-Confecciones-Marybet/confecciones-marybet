<?php
// Iniciar el buffer de salida para evitar problemas con la salida previa
ob_start();

// Incluir la clase FPDF
require_once('fpdf.php');

// Conectar a la base de datos
$conexion = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');

// Consulta de productos
$query = "SELECT * FROM producto";
$resultado = $conexion->query($query);

// Crear un nuevo objeto FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Título
$pdf->Cell(200, 10, 'Reporte de Productos', 0, 1, 'C');

// Encabezado de la tabla
$pdf->Cell(40, 10, 'ID Producto', 1);
$pdf->Cell(70, 10, 'Nombre Producto', 1);
$pdf->Cell(50, 10, 'Precio', 1);
$pdf->Cell(30, 10, 'Stock', 1);
$pdf->Ln();

// Llenar la tabla con los datos de la base de datos
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $pdf->Cell(40, 10, $row['producto_id'], 1);
    $pdf->Cell(70, 10, $row['producto_nombre'], 1);
    $pdf->Cell(50, 10, $row['producto_precio'], 1);
    $pdf->Cell(30, 10, $row['producto_stock'], 1);
    $pdf->Ln();
}

// Salida del PDF
$pdf->Output();

// Finaliza el buffer de salida
ob_end_flush();
?>
