<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>Home Administrativo</title>
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
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Side Menu Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="./HomeAdministrador.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Análisis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./loginEmpleado.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <!--                    <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Home Administrador</h5>
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
                                    </div>
                                    <div class="row">
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
                    <!--                <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">First</th>
                                                                <th scope="col">Last</th>
                                                                <th scope="col">Handle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Larry</td>
                                                                <td>the Bird</td>
                                                                <td>@twitter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->

                    
                        <div class="limiter">
                            <div class="container-registro">
                                <div class="wrap-registro">
                                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-160" method="POST" action="./fileRegistrarEmpleado.php">
                                        <span class="login100-form-title">
                                            <h1>Formulario registro de Empleados</h1>
                                        </span>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu rut" >
                                                    <input class="input100" type="text" id="txtRut" name="txtRut" placeholder="Rut" onkeypress="return soloRUT(event)"
                                                           onblur="checkRutGenerico(txtRut.value, false)" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu nombre" >
                                                    <input class="input100" type="text" name="txtNombre" placeholder="Nombre" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu correo" >
                                                    <input class="input100" type="email" name="txtCorreo" placeholder="ejemplo@ejemplo.cl" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                
                                                
                                                <br>
                                            </div>
                                            <div class="col-sm-6" >
                                                
                                                <div class="row">
                                                    
                                                    <div class="col-sm-6">
                                                        <select class="custom-select input100" name="comuna" required="">
                                                            <option value="0" selected>Tipo Empleado</option>
                                                            <option value="Cerrillos">Administrador</option>
                                                            <option value="Cerro Navia">Receptor</option>
                                                            <option value="Conchalí">Tecnico</option>                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu contraseña">
                                                    <input class="input100" type="password" name="txtPass" placeholder="Contraseña" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Las contraseñas no coinciden" >
                                                    <input class="input100" type="password" name="txtRepPass" placeholder="Repetir contraseña" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button class="login100-form-btn">
                                                Registrar Empleado
                                            </button>
                                        </div>
                                        <br>
                                    </form>
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