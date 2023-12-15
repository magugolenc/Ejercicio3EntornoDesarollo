<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM Juegos');
$Juegos = $stmt->fetchAll();
?>

<h2>Listado de Juegos del almacen.</h2>

<!-- Botón para crear un nuevo juego -->
<a href="create.php">Añadir un Juego al almacen: </a>
<br><br>

<table border="1">
    <tr>
        <th>Nombre del Juego</th>
        <th>Descripción</th>
        <th>Edición</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($Juegos as $Juego): ?>
        <tr>
            <td><?php echo $Juego['nombre']; ?></td>
            <td>$<?php echo $Juego['descripcion']; ?></td>
            <td>$<?php echo $Juego['edicion']; ?></td>
            <td>$<?php echo $Juego['precio']; ?></td>
            <td>$<?php echo $Juego['stock']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $Juego['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $Juego['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>