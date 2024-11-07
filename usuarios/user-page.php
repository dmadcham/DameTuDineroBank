<?php
  session_start();

  if (!isset($_SESSION['nombre'])) {
    header('Location: /usuarios/login.php');
    exit();
  } 
  
?>


<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>
    Clientes
  </title>
  <link rel="shortcut icon" href="https://www.materialui.co/materialIcons/action/euro_symbol_black_192x192.png">
</head>

<body>
  <table height="15%" width="100%">
    <tbody>
      <tr>
        <td bgcolor="FFFFDD" align="CENTER" valign="CENTER">
          <h1>
            Negocio ficticio ACME
          </h1>
        </td>
      </tr>
    </tbody>
  </table>
  <table height="85%" width="100%">
    <tbody>
      <tr>
        <td width="15%" bgcolor="DDFFFF" valign="CENTER">
          <a href="/index.php">Principal</a>
          <br>
          <br>
          <a href="/sedes/sedes.php">Oficinas</a>
          <br>
          <br>
          <a href="/servicios/servicios.php">Servicios</a>
          <br>
          <br>
          <a href="/contacto/contacto.php">Contacto</a>
          <br>
          <br>
          <a href="/usuarios/login.php">Acceso Clientes</a>
        </td>
        <td width="85%" align="CENTER" valign="CENTER">

          <?php

          $server = "sql7.freesqldatabase.com";
          $user = "sql7741781";
          $password = "dLlfKnZ4w9";
          $dbname = "sql7741781";

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
            echo "<h1>Bienvenido " . $nombre . "</h1>";
            /* liberar el conjunto de resultados */
            $resultado->free();
          } else {
            echo "<h2>Error</h2>";
            echo "<p>No se han encontrado usuarios .</p>";
          }

          /* cerrar la conexión */
          $mysqli->close();
          
          ?>
          
          <h1>
            Bienvenido.
          </h1>
        </td>
      </tr>
    </tbody>
  </table>


</body>

</html>