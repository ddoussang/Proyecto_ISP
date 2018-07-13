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
        <?php
        session_start();
        if (isset($_SESSION["mj"])) {
            echo "<script>alert('" . $_SESSION["mj"] . "');</script>";
            session_unset("mj");
        }
        ?>
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
                <h3>Home Cliente</h3>
                <!--                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Nuevo sistema</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Para todos nuestros clientes</h6>
                                                <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                                <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
                                                <a href="http://websitedesigntamilnadu.com" class="card-link">Another</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Try Other</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                                <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                                <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
                                                <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Try Other</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                                <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                                <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
                                                <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Try Other</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                                <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                                <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
                                                <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
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
