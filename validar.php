<?php
session_start();

// MOSTRAR ERRORES
error_reporting(E_ALL);
ini_set('display_errors', 1);

// EVITAR ACCESO DIRECTO
if (!isset($_POST['usuario'])) {
    header("Location: SesionLogin.php");
    exit();
}

// CONEXIÓN
$conn = new mysqli("localhost", "root", "", "login_db");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// DATOS
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$rol = $_POST['rol'];

// CONSULTA SEGURA
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario=? AND password=?");
$stmt->bind_param("ss", $usuario, $password);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {

    $fila = $resultado->fetch_assoc();

    // VALIDAR ROL
    if ($fila['rol'] != $rol) {
        header("Location: SesionLogin.php?error=rol_incorrecto");
        exit();
    }

    // GUARDAR SESIÓN
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $fila['rol'];

    // REDIRECCIÓN SEGÚN ROL
    if ($fila['rol'] == "Administrador") {
        header("Location: panel_admin.php");
    } elseif ($fila['rol'] == "Operador") {
        header("Location: panel_operador.php");
    }

    exit();

} else {
    header("Location: SesionLogin.php?error=datos_incorrectos");
    exit();
}

$stmt->close();
$conn->close();
?>