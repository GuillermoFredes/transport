<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "transporte_db"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las últimas 3 opiniones guardadas
$sql = "SELECT nombre_apellido, puntuacion, comentario FROM puntuaciones ORDER BY fecha DESC LIMIT 3";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $nombre = htmlspecialchars($row["nombre_apellido"]);
        $puntuacion = (int)$row["puntuacion"];  // Convertimos a entero la puntuación
        $comentario = htmlspecialchars($row["comentario"]);
        
       // Generar el HTML para las opiniones
        echo "<div class='caja'>";
            echo "<i class='fa-solid fa-atom'></i>";  // Ícono de detalle en fondo con degradado naranja
            echo "<div class='user'>";
                echo "<img src='../img/icono_persona.png' alt='Avatar'>"; // Ajusta la ruta de la imagen
                echo "<h3>$nombre</h3>";
                echo "<div class='stars'>";

        // Mostrar las estrellas llenas de izquierda a derecha
            echo "<div class='stars'>";
            for ($i = 1; $i <= 5; $i++) {
                if ($i<= $puntuacion) {
                    echo "<i class='fa-solid fa-star';> </i>";  // Estrella llena
                } else {
                    echo "<i class='fa-regular fa-star';> </i>";  // Estrella vacía
                }
            }
            echo "</div>";  // Fin de las estrellas


          echo "</div>";  // Fin del div .user
         echo "<div class='comentarios'>$comentario</div>";
        echo "</div>";  // Fin de la caja
    }
    echo "</div>";  // Fin de caja-contenedor
} else {
    echo "<p>No hay opiniones disponibles.</p>";
}

$conn->close();
?>