<?php
    session_start();
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Inicio
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
                    <a href="index.php">Principal</a>
                    <br>
                    <br>
                    <a href="sedes/sedes.php">Oficinas</a>
                    <br>
                    <br>
                    <a href="servicios/servicios.php">Servicios</a>
                    <br>
                    <br>
                    <a href="contacto/contacto.php">Contacto</a>
                    <br>
                    <br>
                    <?php
                        if (!isset($_SESSION["Nombre"])) {
                            # code...
                        } else {
                            # code...
                        }
                        
                    ?>
                    <a href="usuarios/login.php">Acceso Clientes</a>
                </td>
                <td width="85%" align="CENTER" valign="CENTER">
                    <h1>
                        Danos tu dinero porfa q no hacemos nada malo.
                    </h1>
                    DameTuDineroBank, tu banco de confianza danos tu dinero y comprueba nuestra efectividad.
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>