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
                    <div class="col-md-6" >
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Mis Datos</h5>
                                <form action="./actualizarDatos.php" method="POST">
                                    <?php
                                    session_start();
                                    include_once '../dto/EmpresaDto.php';
                                    include_once '../dto/ParticularDto.php';
                                    $cliente = unserialize($_SESSION["cliente"]);
                                    echo get_class($cliente);
                                    if ($cliente  instanceof ParticularDto) {
                                        echo "<table class='table'>
                                    <tbody>
                                        <tr>
                                            <th>Nombre :</th>
                                            <td><input type='text' name='nombre'/></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>";
                                    } elseif ($cliente instanceof EmpresaDto) {
                                        echo "<table class='table'>
                                    <tbody>
                                        <tr>
                                            <th>Nombre: </th>
                                            <td></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>";
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
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
