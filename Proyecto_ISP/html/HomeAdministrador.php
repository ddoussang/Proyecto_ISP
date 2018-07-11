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
                <a class="navbar-brand" href="#">LOGO</a>
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
                            <a class="nav-link" href="#">Home
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
                            <a class="nav-link" href="../index.php">Salir</a>
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
                                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-160" method="POST" action="./registrarUserFile.php">
                                        <span class="login100-form-title">
                                            Formulario de registro
                                        </span>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu rut" >
                                                    <input class="input100" type="text" id="txtRut" name="txtRut" placeholder="Rut" onkeypress="return soloRUT(event)"
                                                           onblur="checkRutGenerico(txtRut.value, false)" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu nombre" >
                                                    <input class="input100" type="text" name="txtNombre" placeholder="Nombres" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu apellido" >
                                                    <input class="input100" type="text" name="txtApellidoP" placeholder="Apellido paterno">
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu apellido">
                                                    <input class="input100" type="text" name="txtApellidoM" placeholder="Apellido materno" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu fecha de nacimiento">
                                                    <input class="input100" type="text" onfocus="(this.type = 'date')" onblur="(this.type = 'text')"
                                                           name="dateFechaN"  placeholder="Fecha nacimiento" >
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor indica tu sexo biologico">
                                                    <span>Porfavor indica tu sexo biologico:</span>
                                                    <div class="radio">
                                                        <label style="font-size: 1em">
                                                            <input type="radio" name="sexo" value="hombre" checked="">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            Hombre
                                                        </label>
                                                        <label style="font-size: 1em">
                                                            <input type="radio" name="sexo" value="mujer">
                                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                            Mujer
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-sm-6" >

                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu telefono">
                                                    <input class="input100" type="number" name="numTelefono" placeholder="Numero de telefono"
                                                           onkeypress="return soloNum(event)">
                                                    <span class="focus-input100"></span>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu direccion">
                                                            <input class="input100" type="text" name="txtDireccion" placeholder="Direccion" >
                                                            <span class="focus-input100"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="custom-select input100" name="comuna" required="">
                                                            <option value="0" selected>Comuna</option>
                                                            <option value="Cerrillos">Cerrillos</option>
                                                            <option value="Cerro Navia">Cerro Navia</option>
                                                            <option value="Conchalí">Conchalí</option>
                                                            <option value="El Bosque">El Bosque</option>
                                                            <option value="Estación Central">Estación Central</option>
                                                            <option value="Huechuraba">Huechuraba</option>
                                                            <option value="Independencia">Independencia</option>
                                                            <option value="La Cisterna">La Cisterna</option>
                                                            <option value="La Florida">La Florida</option>
                                                            <option value="La Granja">La Granja</option>
                                                            <option value="La Pintana">La Pintana</option>
                                                            <option value="La Reina">La Reina</option>
                                                            <option value="Las Condes">Las Condes</option>
                                                            <option value="Lo Barnechea">Lo Barnechea</option>
                                                            <option value="Lo Espejo">Lo Espejo</option>
                                                            <option value="Lo Prado">Lo Prado</option>
                                                            <option value="Macul">Macul</option>
                                                            <option value="Maipú">Maipú</option>
                                                            <option value="Ñuñoa">Ñuñoa</option>
                                                            <option value="Padre Hurtado">Padre Hurtado</option>
                                                            <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                                                            <option value="Peñalolén">Peñalolén</option>
                                                            <option value="Providencia">Providencia</option>
                                                            <option value="Pudahuel">Pudahuel</option>
                                                            <option value="Puente Alto">Puente Alto</option>
                                                            <option value="Quilicura">Quilicura</option>
                                                            <option value="Quinta Normal">Quinta Normal</option>
                                                            <option value="Recoleta">Recoleta</option>
                                                            <option value="Renca">Renca</option>
                                                            <option value="San Bernardo">San Bernardo</option>
                                                            <option value="San Joaquín">San Joaquín</option>
                                                            <option value="San Miguel">San Miguel</option>
                                                            <option value="San Ramón">San Ramón</option>
                                                            <option value="Santiago">Santiago</option>
                                                            <option value="Vitacura">Vitacura</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="wrap-input100 validate-input" data-validate = "Porfavor ingresa tu correo">
                                                    <input class="input100" type="email" name="txtCorreo" placeholder="Correo electronico" >
                                                    <span class="focus-input100"></span>
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
                                                Registrarme
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
