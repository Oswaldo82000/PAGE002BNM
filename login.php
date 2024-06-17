<?php
// Configuración del servidor MySQL
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "bmn";

// Conexión a la base de datos
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesa los datos del formulario de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Iniciar sesión y redirigir al usuario
        session_start(); // Inicia la sesión PHP

        // Almacena el nombre de usuario en la sesión
        $_SESSION['username'] = $username;

        // Redirigir a la página de bienvenida o a otra parte del sitio
        header("Location: cuenta.php"); // Cambia 'bienvenida.php' por la página deseada
        exit();
    } else {
        // Login fallido
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
