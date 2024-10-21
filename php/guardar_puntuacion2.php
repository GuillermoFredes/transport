<?php
// Conectar a la base de datos
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "transporte_db";
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

/* Verificar si se han enviado todos los datos*/
if (isset($_POST['nombre_apellido']) && isset($_POST['star']) && isset($_POST['comentario'])) {
    $nombre_apellido = $_POST['nombre_apellido'];
    $puntuacion = $_POST['star'];
    $comentario = $_POST['comentario'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO puntuaciones (nombre_apellido, puntuacion, comentario) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        // Redirigir con mensaje de error
        header("Location: ../index.html?message=error_db");
        exit;
    }

    $stmt->bind_param("sis", $nombre_apellido, $puntuacion, $comentario);
    
    if ($stmt->execute()) {
        // Redirigir con mensaje de éxito
        header("Location: ../index.html?message=success");
    } else {
        // Redirigir con mensaje de error
        header("Location: ../index.html?message=error_insert");
    }

    $stmt->close();
} else {
    // Redirigir con mensaje de error por campos faltantes
    header("Location: ../index.html?message=error_fields");
}

// Cerrar la conexión
$conn->close();
exit;


/* Verificar si se han enviado todos los datos
if (isset($_POST['nombre_apellido']) && isset($_POST['star']) && isset($_POST['comentario'])) {
    $nombre_apellido = $_POST['nombre_apellido'];
    $puntuacion = $_POST['star'];
    $comentario = $_POST['comentario'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO puntuaciones (nombre_apellido, puntuacion, comentario) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nombre_apellido, $puntuacion, $comentario);

    if ($stmt->execute()) {
        echo "Puntuación y comentario guardados correctamente.";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Por favor, completa todos los campos.";
}

// Cerrar la conexión
$conn->close();*/
?>