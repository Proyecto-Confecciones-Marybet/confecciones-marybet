<?php
include './php/main.php'; // Incluir la conexión a la base de datos

// Obtener la conexión
$conn = conexion(); // Llama a la función de conexión

// Obtener la configuración actual
$sql = "SELECT valor FROM config_notificaciones WHERE tipo_notificacion = 'bajo_stock'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$configuracion = $stmt->fetch(PDO::FETCH_ASSOC);
$min_stock_actual = $configuracion['valor'];

// Manejar la solicitud POST para actualizar la configuración
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $min_stock = intval($_POST['min_stock']);

    // Actualizar la cantidad mínima de stock
    $sql = "UPDATE config_notificaciones SET valor = :valor WHERE tipo_notificacion = 'bajo_stock'";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':valor', $min_stock, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Configuración actualizada correctamente.";
    } else {
        echo "No se pudo actualizar la configuración.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configuración de Notificaciones</title>
</head>
<body>
    <h1>Configuración de Notificaciones de Stock</h1>
    <form action="" method="POST">
        <label for="min_stock">Cantidad mínima de stock para notificación de bajo stock:</label>
        <input type="number" id="min_stock" name="min_stock" value="<?php echo htmlspecialchars($min_stock_actual); ?>" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>