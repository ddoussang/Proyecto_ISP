<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Instituto de salud publica</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="./fileLoginCliente.php" autocomplete="on" method="POST"> 
                                <h1>Ingresa</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Rut </label>
                                    <input type="text" name="txtRut" id="txtRut" placeholder="Rut" onkeypress="return soloRUT(event)"
                                           onblur="checkRutGenerico(txtRut.value, false)" >
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Contraseña </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Mantenme mi session abierta</label>
                                </p>
                                <?php
                                if (isset($message)) {
                                    echo " <p>";
                                    echo "<span id='error'>" . $message . "</span>";
                                    echo "</p>";
                                }
                                unset($message);
                                ?>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                                </p>
                                <p class="login button">
                                    ¿No estas registrado?
                                    <a href="../html/registroPersona.php" class="to_register">Registrate!</a>
                                </p>
                                <p class="change_link">
                                    ¿Eres una empresa?
                                    <a href="../html/registroEmpresa.php" class="to_register">Registrate como empresa</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>