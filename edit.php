<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $edicion = $_POST['edicion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE Juegos SET nombre = ?, descripcion = ?, edicion = ?, precio = ?, stock = ? WHERE id = ?");
    $stmt->execute([$nombre, $descripcion, $edicion, $precio, $stock, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM Juegos WHERE id = $id");
$juego = $stmt->fetch();

?>

<h2>Editar Juego</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $juego['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $juego['nombre']; ?>"><br>
    Descripción: <input type="text" name="descripcion" value="<?php echo $juego['descripcion']; ?>"><br>
    Edición: <input type="text" name="edicion" value="<?php echo $juego['edicion']; ?>"><br>
    Precio: <input type="text" name="precio" value="<?php echo $juego['precio']; ?>"><br>
    Stock: <input type="number" name="stock" value="<?php echo $juego['stock']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
