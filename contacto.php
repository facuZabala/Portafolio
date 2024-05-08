<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portafolio";

// Crear conexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['mensaje'];

    // Utilizar una sentencia preparada
    $insertar= ("INSERT INTO contacto (nombre, telefono, direccion, tema, mensaje) VALUES ('$nombre', '$telefono', '$direccion', '$tema', '$mensaje')");
    $ejecutar= mysqli_query($conn, $insertar);

    if ($ejecutar) {
        // Redirigir en caso de éxito
        echo '<script>alert("Mensaje enviado con éxito.");</script>';

        // Redirigir
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    } else {
        // Manejar errores de manera más robusta
        echo "Error en la inserción de datos. Por favor, inténtalo de nuevo.";
        error_log("Error en la inserción de datos: " . $conn->error);
    }

}
?>
