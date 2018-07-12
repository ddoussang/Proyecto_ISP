<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>ISP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            body{background:#f9f9f9;}
            #wrapper{padding:90px 15px;}
            .navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
            .card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
            .header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
            .leftmenutrigger{display: none}
            @media(min-width:992px) {
                .leftmenutrigger{display: block;display: block;margin: 7px 20px 4px 0;cursor: pointer;}
                #wrapper{padding: 90px 15px 15px 15px; }
                .navbar-nav.side-nav.open {left:0;}
                .navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:-220px;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
            }
            .animate{-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;transition:all .3s ease-in-out}
        </style>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="wrapper" class="animate">
            <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
                <span class="navbar-toggler-icon leftmenutrigger"></span>
                <a class="navbar-brand" href="#">ISP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav animate side-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./homeCliente.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./datosCliente.php">Actualizar mis datos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./solicitudesCliente.php">Mis solicitudes</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="./homeCliente.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./fileCerrarCliente.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row" >
                    <?php
                    session_start();
                    include_once '../dto/EmpresaDto.php';
                    include_once '../dto/ParticularDto.php';
                    include_once '../dao/ContactoDaoImp.php';
                    $cliente = unserialize($_SESSION["cliente"]);
                    if ($cliente instanceof ParticularDto) {
                        echo "<div class='col-md-6' >
                        <div class='card' >
                            <div class='card-body'>
                                <h5 class='card-title'>Datos de perfil</h5>
                                <form action='./fileActualizarDatos.php' method='POST'>";
                        echo "<table class='table'>
                                    <tbody>
                                        <tr>
                                            <td>Nombre :</td>
                                            <td><input id='usernamesignup' name='usernamesignup' required='required' type='text' placeholder='Nombre'
                                            value=" . $cliente->getNombreParticular() . " /></td>
                                         </tr>
                                         <tr>
                                            <td>Direccion :</td>
                                            <td><input id='direccion' name='direccion' required='required' type='text' placeholder='Direccion' 
                                            value=" . $cliente->getDireccionParticular() . " /></td>
                                        </tr>
                                         <tr>
                                            <td>Telefono :</td>
                                            <td><input id='telefono' name='telefono' required='required' type='text'  placeholder='56977837849' 
                                            value=" . $cliente->getTelefonoParticular() . " /> </td>
                                        </tr>
                                         <tr>
                                            <td>Correo :</td>
                                            <td><input id='emailsignup' name='emailsignup' required='required' type='email' placeholder='mysupermail@mail.com'
                                             value=" . $cliente->getEmailParticular() . " /> </td>
                                        </tr>
                                         <tr>
                                            <td>Contraseña anterior:</td>
                                            <td><input id='passwordsignup' name='passwordsignup' required='required' type='password' placeholder='eg. X8df!90EO'/></td>
                                        </tr>
                                         <tr>
                                            <td>Nueva Contraseña (opcional):</td>
                                            <td><input id='passwordsignup' name='passwordsignup' type='password' placeholder='eg. X8df!90EO'/></td>
                                        </tr>
                                         <tr>
                                            <td>Rut contacto: </td>
                                            <td><input type='text' name='txtRut' id='txtRut' placeholder='Rut' onkeypress='return soloRUT(event)'
                                           onblur='checkRutGenerico(txtRut.value, false)' required='' ></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type='submit' value='Actualizar' class='button' /> 
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>";
                        echo "</form>
                </div>
                <div class='card-body'>
                    <form action='fileBajarCuenta.php' method='POST' >
                        <table class='table'>
                            <tbody>
                                <tr>
                                    <td>Dar de baja mi cuenta:</td>
                                    <td><p>Al realizar esto aceptas los terminos y condiciones.</p></td>
                                    <td><input type='submit' value='Bajar' class='button' ></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>";
                    } elseif ($cliente instanceof EmpresaDto) {
                        $implementa = new ContactoDaoImp();
                        $contacto = $implementa->buscarConCodigoEmpresa($cliente->getCodigoEmpresa());
                        echo "<div>
                        <div class='card' >
                            <div class='card-body'>
                                <h5 class='card-title'>Datos de perfil</h5>
                                <form action='./fileActualizarDatos.php' method='POST'>";
                        echo "<table class='table'>
                                    <tbody>
            <tr>
            <td>Nombre empresa :</td>
            <td><input id='usernamesignup' name='usernamesignup' required='required' type='text' placeholder='Nombre'
                    value=" . $cliente->getNombreEmpresa() . " /></td>
             <td>Rut Contacto:</td>
             <td><input type='text' name='txtRut' id='txtRut' placeholder='Rut' onkeypress='return soloRUT(event)'
                                           onblur='checkRutGenerico(txtRut.value, false)' required=''
                                           value=" . $contacto->getRutContacto() . " ></td>
             </tr>
            <tr>
            <td>Direccion :</td>
            <td><input id='direccion' name='direccion' required='required' type='text' placeholder='Direccion' 
                   value=" . $cliente->getDireccionEmpresa() . " /></td>
            <td>Nombre Contacto:</td>
             <td><input id='nombre' name='nombre' required='required' type='text' value=" . $contacto->getNombreContacto() . " /> </td>
             </tr>
             </tr>
            <tr>
            <td><label for='contraseñActual' class='youpasswd' > Contraseña actual: </label></td>
            <td><input id='contraseñActual' name='contraseñActual' required='required' type='password' /></td>
            <td><label for='emailsignup' class='emailsignup' > Correco contacto </label></td>
            <td><input id='emailsignup' name='emailsignup' required='required' type='email' value=" . $contacto->getEmailContacto() . " /></td>
            </tr>
            <tr>
            <td><label for='nuevaContraseña' class='youpasswd' > Nueva contraseña(opcional) : </label></td>
            <td><input id='nuevaContraseña' name='nuevaContraseña' type='password' /></td>
             <td><label for='telefono' class='youmail' > Telefono </label></td>
             <td><input id='telefono' name='telefono' required='required' type='text' value=" . $contacto->getTelefonoContacto() . " /> </td>
            </tr>
            <tr>
            <td>
            <input type='submit' value='Actualizar' class='button' /> 
            </td>
            <td></td>
            </tr>
        </tbody>
                                </table>";
                        echo "</form>
                </div>
                <div class='card-body'>
                    <form action='fileBajarCuenta.php' method='POST' >
                        <table class='table'>
                            <tbody>
                                <tr>
                                    <td>Dar de baja la cuenta:</td>
                                    <td><p>Al realizar esto aceptas los terminos y condiciones.</p></td>
                                    <td><input type='submit' value='Bajar' class='button' ></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>";
                    }
                    ?>

                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.leftmenutrigger').on('click', function (e) {
                    $('.side-nav').toggleClass("open");
                    e.preventDefault();
                });
            });
        </script>
    </body>
</html>