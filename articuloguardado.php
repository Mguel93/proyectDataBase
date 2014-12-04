<?PHP
        
        require 'lib/Inter.php';
        $X = new Inter();
        
        
        $nombre= $_POST['nombre']; 
        $descripcion= $_POST['descripcion'];
        $categoria= $_POST['categoria']; 
        $cantidad= $_POST['cantidad'];
        $precio= $_POST['precio'];
        $id_proveedor=$_POST['proveedor'];
        
        
        
        $X->AgregarArticulo($nombre, $descripcion, $categoria, $cantidad, $precio);
        $resultado=$X->consultaIdProducto($nombre, $descripcion, $categoria, $cantidad, $precio);
        foreach ($resultado as $res ) {
        
        }
        $id_producto=$res['id_producto'];
        $X->agregarRelacionProducto($id_producto,$id_proveedor);
        
        
        
        header("location: registroarticulo.php");                
        
?>