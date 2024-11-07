<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>
    Oficinas
  </title>
  <link rel="shortcut icon" href="https://www.materialui.co/materialIcons/action/euro_symbol_black_192x192.png">
</head>

<body>
  <table height="15%" width="100%">
    <tbody>
      <tr>
        <td bgcolor="FFFFDD" align="CENTER" valign="CENTER">
          <h1>
            DameTuDineroBank
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
          <h1>
            Información de la oficina seleccionada
          </h1>

          <?php


          $server = "sql7.freesqldatabase.com";
          $user = "sql7743089";
          $password = "rcgCIFkxqT";
          $dbname = "sql7743089";

          $nombre = htmlspecialchars($_POST['ciudades']);

          $mysqli = new mysqli($server, $user, $password, $dbname);

          /* verificar la conexión */
          if ($mysqli->connect_errno) {
            echo "Conexión fallida: " . $mysqli->connect_error;
            exit();
          }

          $consulta = "SELECT Horario, Direccion, CodigoPostal, Localizacion FROM Sedes WHERE Nombre = '$nombre'";

          if ($resultado = $mysqli->query($consulta)) {
            if ($nombre != null && $nombre != "") {
              if ($resultado->num_rows > 0) {
                /* obtener un array asociativo */
                while ($fila = $resultado->fetch_assoc()) {
                  echo "<p><strong>Horario: </strong> " . $fila["Horario"] . " </p>";
                  echo "<p><strong>Dirección: </strong> " . $fila["Direccion"] . " </p>";
                  echo $fila["Localizacion"];
                }
              } else {
                echo "<h2>Error</h2>";
                echo "<p>No se ha encontrado la oficina solicitada.</p>";
              }
            } else {
              header("Location: sedes.php");
            }
            /* liberar el conjunto de resultados */
            $resultado->free();
          } else {
            echo "<h2>Error</h2>";
            echo "<p>No se han encontrado oficinas .</p>";
          }

          /* cerrar la conexión */
          $mysqli->close();

          ?>

        </td>
      </tr>
    </tbody>
  </table>



</body>

</html>