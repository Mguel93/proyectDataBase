<?PHP
        
        require 'lib/Inter.php';
        $X = new Inter();
        
        
        $nombre= $_POST['first-name']; 
        $direccion= $_POST['direccion'];
        $telefono= $_POST['telefono']; 
        $ciudad= $_POST['ciudad'];
        $estado= $_POST['estado'];
        $rfc= $_POST['rfc'];
        
        
        $X->AgregarProveedor($nombre, $direccion, $telefono, $ciudad, $estado, $rfc);
        
        header("location: registroproveedor.php");
                               
        
?>