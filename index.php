<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM Juegos');
$Juegos = $stmt->fetchAll();
?>

<h2>Listado de Juegos del almacen.</h2>

<!-- Botón para crear un nuevo jabón -->
<a href="create.php">Añadir un Juego a almacen: </a>
<br><br>

<ul>
<?php foreach ($Juegos as $Juego): ?>
    <li>
        <?php echo $Juego['nombre']; ?> - $<?php echo $Juego['precio']; ?>
        <a href="edit.php?id=<?php echo $Juego['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $Juego['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
