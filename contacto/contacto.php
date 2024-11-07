<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Formulario de contacto
    </title>
    <link rel="shortcut icon" href="https://www.materialui.co/materialIcons/action/euro_symbol_black_192x192.png">

    <script type="text/javascript">
        function verificarEntrada(control) {
            if (control.value == '') {
                alert('Debe ingresar datos');
            }
        }

        function valida(form) {

            // Primero comprobamos si los campos est�n vac�os
            var msg = "Debes escribir algo en los campos:\n"; // Mensaje que se mostrar� caso de alg�n campo vac�o
            var estado = true; // Valor que devuelve la funci�n. Por omisi�n todo est� bien

            if (form.elements["name"].value == "") {
                msg += " - Nombre\n";
                estado = false;
            }

            if (form.elements["email"].value == "") {
                msg += " - Email\n";
                estado = false;
            }

            if (form.elements["phone"].value == "") {
                msg += " - Tel�fono\n";
                estado = false;
            }

            if (form.elements["sbjct"].value == "") {
                msg += " - Asunto\n";
                estado = false;
            }

            if (form.elements["msg"].value == "") {
                msg += " - Mensaje\n";
                estado = false;
            }

            if (estado == true) {
                msg = ""; // Si el estado es true es que no hab�a campos vac�os por lo que hay que quitar el mensaje de campos vac�os
            }

            // Validaci�n de email
            if (!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(form.elements["email"].value))) {
                msg += "\nEl formato de email no es adecuado.\n";
                estado = false;
            }

            // Validaci�n de tel�fono
            if (!(/^[0-9]{9}$/i.test(form.elements["phone"].value))) {
                msg += "\nEl formato de tel�fono no es adecuado.\n";
                estado = false;
            }

            // Validaci�n de mensaje
            if (form.elements["msg"].value.length < 10) {
                msg += "Escriba un mensaje, por favor.\n";
                estado = false;
            }

            if (estado == false) {
                alert(msg + "\n");
            }

            return estado;

        }
    </script>

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
                    <h1>Formulario de contacto
                    </h1>
                    <!-- Formulario de contacto -->
                    <form name="contacto" action="contacto_conf.php" method="POST" onsubmit="return valida(this)">
                        <table>
                            <tbody>
                                <tr>
                                    <td align="RIGHT">
                                        Nombre y apellidos:
                                    </td>
                                    <td>
                                        <input type="text" name="name" onblur="verificarEntrada(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="RIGHT">
                                        Email:
                                    </td>
                                    <td>
                                        <input type="TEXT" name="email" onblur="verificarEntrada(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="RIGHT">
                                        Telefono:
                                    </td>
                                    <td>
                                        <input type="TEXT" name="phone" onblur="verificarEntrada(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="RIGHT">
                                        Asunto:
                                    </td>
                                    <td>
                                        <input type="TEXT" name="sbjct" onblur="verificarEntrada(this)">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="RIGHT">
                                        Mensaje:
                                    </td>
                                    <td>
                                        <textarea name="msg" rows="10" cols="40" onblur="verificarEntrada(this)"></textarea>
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
                    <!-- Fin del formulario de contacto -->
                </td>
            </tr>
        </tbody>
    </table>


</body>

</html>