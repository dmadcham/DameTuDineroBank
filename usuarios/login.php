<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>
    Control de acceso de clientes
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
          <h1>Identifiquese
          </h1>
          <!-- Formulario de identificación -->
          <form name="contacto" action="verify.php" method="POST">
            <table>
              <tbody>
                <tr>
                  <td align="RIGHT">
                    Usuario:
                  </td>
                  <td>
                    <input type="TEXT" name="user">
                  </td>
                </tr>
                <tr>
                  <td align="RIGHT">
                    Contrasena:
                  </td>
                  <td>
                    <input type="TEXT" name="pass">
                  </td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td>
                    <input type="SUBMIT" name="SUBMIT" value="Enviar">
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
          <!-- Fin del formulario de identificación -->
        </td>
      </tr>
    </tbody>
  </table>


</body>

</html>