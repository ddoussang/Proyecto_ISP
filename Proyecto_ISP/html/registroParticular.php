<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
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
                    <div id="wrapper">
                        <div id="login" >
                            <form  action="./fileRegistrarParticular.php" method="POST"> 
                                <h1> Registrate </h1> 
                                <p> 
                                    <label for="txtRut" class="uname" data-icon="u" > Rut </label>
                                    <input type="text" name="txtRut" id="txtRut" placeholder="Rut" onkeypress="return soloRUT(event)"
                                           onblur="checkRutGenerico(txtRut.value, false)" required="" >
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> Nombre </label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Nombre" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> Direccion </label>
                                    <input id="direccion" name="direccion" required="required" type="text" placeholder="Direccion" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Correo </label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="telefono" class="youmail" data-icon="u" > Telefono </label>
                                    <input id="telefono" name="telefono" required="required" type="text" placeholder="56977837849"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"> Contraseña </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p"> Confirma tu contraseña </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Registrarme"/> 
                                </p>
                                <p class="change_link">  
                                    Ya estas registrado ?
                                    <a href="../html/loginCliente.php" class="to_register"> Ingresar </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
