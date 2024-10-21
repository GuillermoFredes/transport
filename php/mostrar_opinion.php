<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "transporte_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las opiniones y puntuaciones
$sql = "SELECT nombre_apellido, comentario, puntuacion FROM puntuaciones LIMIT 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar las opiniones en el formato del carrusel
    while ($row = $result->fetch_assoc()) {
        echo '<div class="testimonial-item">';
        echo '  <div class="testimonial-client">';
        echo '      <img src="img/icono_persona.png" alt="">';
        echo '      <p class="client-name">' . htmlspecialchars($row["nombre_apellido"]) . '</p>';
        echo '  </div>';
        echo '  <div class="testimonial-text">';
        echo '      <p>' . htmlspecialchars($row["comentario"]) . '</p>';
        echo '  </div>';
        echo '  <div class="testimonial-rating">';



        
                    // Mostrar las estrellas
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $row["puntuacion"]) {
                            echo '<span class="fa fa-star checked"></span>';
                        } else {
                            echo '<span class="fa fa-star"></span>';
                        }
                    }
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo "No hay opiniones para mostrar.";
}

$conn->close();
?>