<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $edicion = $_POST['edicion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    try {
        $sql = "INSERT INTO Juegos (nombre, descripcion, edicion, precio, stock) VALUES (:nombre, :descripcion, :edicion, :precio, :stock)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'descripcion' => $descripcion, 'edicion' => $edicion, 'precio' => $precio, 'stock' => $stock]);

        $message = '¡Juego añadido con éxito al almacen!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el juego: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir juego</title>
</head>
<body>
<h2>Añadir nuevo juego</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="edicion">Edición:</label>
    <input type="text" name="edicion" id="edicion" required>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <input type="submit" value="Añadir Juego">
</form>

</body>
</html>
