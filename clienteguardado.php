<?PHP
        
        require 'lib/Inter.php';
        $X = new Inter();
        
        
        $nombre= $_POST['first-name']; 
        $apellidoP= $_POST['last-name'];
        $apellidoM= $_POST['last-name2'];
        $direccion= $_POST['direccion'];
        $telefono= $_POST['telefono']; 
        $email= $_POST['correo'];
        $rfc= $_POST['rfc'];
        if(isset($nombre)){
           // echo "nombre creado";
        }
        
        $X->AgregarCliente($nombre, $apellidoP, $apellidoM, $direccion, $telefono, $email, $rfc);
        
        header("location: registrocliente.php");
                               
        
        ?>