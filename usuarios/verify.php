<?php

$server = "sql7.freesqldatabase.com";
$user = "sql7743089";
$password = "rcgCIFkxqT";
$dbname = "sql7743089";

$nombre = htmlspecialchars($_POST['user']);
$contrasena = htmlspecialchars($_POST['pass']);
$mysqli = new mysqli($server, $user, $password, $dbname);

/* verificar la conexión */
if ($mysqli->connect_errno) {
  echo "Conexión fallida: " . $mysqli->connect_error;
  exit();
}

$consulta = "SELECT Nombre FROM Usuarios WHERE Nombre = '$nombre' AND Contrasena = '$contrasena'";

if ($resultado = $mysqli->query($consulta)) {
  if (isset($nombre)) {
    if ($resultado->num_rows > 0) {
      session_start();
      $_SESSION['nombre'] = $nombre;
      header("Location: /usuarios/user-page.php");
    } else {
      header("Location: /usuarios/login.php");
    }
  } else {
    header("Location: /usuarios/login.php");
  }
  /* liberar el conjunto de resultados */
  $resultado->free();
} else {
  echo "<h2>Error</h2>";
  echo "<p>No se han encontrado usuarios .</p>";
}

/* cerrar la conexión */
$mysqli->close();

?>