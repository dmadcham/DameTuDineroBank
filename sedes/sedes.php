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
                        Seleccion de oficina:
                    </h1>
                    DameTuDineroBank tiene sedes repartidas por España.
                    <br>
                    <br>
                    <!-- Formulario de selección de sede -->
                    <form name="sedes" action="sedes_inf.php" method="POST">
                        <table>
                            <tbody>
                                <tr>
                                    <td align="RIGHT">
                                        Escoja una poblacion
                                    </td>
                                    <td>
                                        <select name="ciudades">
                                            <option></option>
                                            <?php

                                            $server = "sql7.freesqldatabase.com";
                                            $user = "sql7743089";
                                            $password = "rcgCIFkxqT";
                                            $dbname = "sql7743089";

                                            $mysqli = new mysqli($server, $user, $password, $dbname);

                                            /* verificar la conexión */
                                            if ($mysqli->connect_errno) {
                                                echo "Conexión fallida: " . $mysqli->connect_error;
                                                exit();
                                            }

                                            $consulta = "SELECT Nombre FROM Sedes";

                                            if ($resultado = $mysqli->query($consulta)) {

                                                /* obtener un array asociativo */
                                                while ($fila = $resultado->fetch_assoc()) {
                                                    echo '<option value="' . $fila["Nombre"] . '">' . $fila["Nombre"] . '</option>';
                                                }

                                                /* liberar el conjunto de resultados */
                                                $resultado->free();
                                            } else {
                                                echo "0 resultados";
                                            }

                                            /* cerrar la conexión */
                                            $mysqli->close();
                                            ?>
                                        </select>
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
                </td>
            </tr>
        </tbody>
    </table>


</body>

</html>