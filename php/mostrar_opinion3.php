<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'root', 'transporte_db');
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener las opiniones
$sql = "SELECT nombre_apellido, comentario, puntuacion FROM puntuaciones";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div class='testimonial-client'>";
        echo "<div class='client-name'>" . $fila['nombre_apellido'] . "</div>";
        echo "<div class='testimonial-text'><p>" . $fila['comentario'] . "</p></div>";
        echo "<div class='testimonial-rating'>";

        // Generar las estrellas según la puntuación
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $fila['puntuacion']) {
                echo "<i class='fa fa-star checked'></i>";
            } else {
                echo "<i class='fa fa-star'></i>";
            }
        }

        echo "</div></div>";
    }
} else {
    echo "No hay opiniones disponibles.";
}

$conexion->close();
?>