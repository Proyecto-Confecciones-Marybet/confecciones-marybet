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
<div class="container pb-6 pt-6 notification is-danger is-light is-rounded center">
	<div class="center">
		<h1 class="title">Notificaciones</h1>
		<h2 class="subtitle">Modificar notificaciones</h2>

    <div class="container pb-6 pt-6">
        <form action="" method="POST">
            <label for="min_stock">Ingrese la cantidad mínima de stock</label>
            <input type="number" class="input is-rounded is-danger" id="min_stock" name="min_stock" value="<?php echo htmlspecialchars($min_stock_actual); ?>" required> <br /><br />
            <button type="submit" class="button is-danger animado is-medium">Guardar</button>
        </form>
    </div>
</div>
</body>
</html>