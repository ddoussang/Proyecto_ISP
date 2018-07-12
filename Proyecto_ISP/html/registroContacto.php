<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Contacto</title>
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
                        <div id="login" >
                            <form  action="./fileRegistrarContacto.php"  method="POST"> 
                                <h1> Datos de contacto</h1> 
                                <p> 
                                    <label for="txtRut" class="uname" data-icon="u"> Rut </label>
                                    <input type="text" name="txtRut" id="txtRut" placeholder="Rut" onkeypress="return soloRUT(event)"
                                           onblur="checkRutGenerico(txtRut.value, false)" required="" >
                                </p>
                                <p> 
                                    <label for="nombre" class="youmail" data-icon="e" > Nombre </label>
                                    <input id="nombre" name="nombre" required="required" type="text" placeholder=""/> 
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Correo </label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="telefono" class="youmail" data-icon="u" > Telefono </label>
                                    <input id="telefono" name="telefono" required="required" type="text" placeholder="56977837849"/> 
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Registrar"/> 
                                </p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
