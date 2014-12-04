<?php
session_start();
if(isset ($_SESSION['admin']) || isset ($_SESSION['nivel2']) || isset ($_SESSION['nivel3']) || isset ($_SESSION['nivel4'])){
    header("location:index.php");
}else{
 
}
?>
<!DOCTYPE html>

 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css2/demo.css" />
        <link rel="stylesheet" type="text/css" href="css2/style2.css" />
		<link rel="stylesheet" type="text/css" href="css2/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <span class="right">
                   
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.php"  method="post"> 
                                <h1>Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Usuario </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="miusuario"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Recordar contraseña</label>
								</p>
                                  
                                    <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                                    </p>             
                            
                                
                            </form>
                            <h2 style="color: firebrick">Login incorrecto</h2>
                        </div>

                       
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>