<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Servicios
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
                    <form name="importar" method="post" action="servicios_conf.php" enctype="multipart/form-data">
                        <input id="file" type="file" name="file">
                        <input type="submit" name="enviar" value="Importar">
                        <input type="hidden" value="upload" name="action">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>