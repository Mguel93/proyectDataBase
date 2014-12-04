<?php

require 'Conexion.php';

/**
 * Description of Categoria
 *
 * @author Citizen X
 */
/*
-- select * from articulomr
-- select * from proveedormr
 -- select * from relacionProductomr;

select p.nombre_proveedor, a.nombre from relacionProductomr rp
inner join proveedormr p on p.id_proveedor = rp.id_proveedor
inner join articulomr a on a.id_producto = rp.id_producto
*/
class Inter extends Conexion {

    //put your code here

    public function __construct() {
        parent::__construct();
    }

    public function consulta1($id) {
        $resultado = Array();
        $this->abrirConexion();
        $rSQL = $this->getConsulta('SELECT * FROM ALUMNOS WHERE NOMBRE = "' . $id . '" OR APELLIDOPATERNO = "' . $id . '" OR APELLIDOMATERNO= "' . $id . '"');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }   
        return $resultado;
    }
    
    public function consultalogin($username,$pass) {
        $resultado = Array();
        $this->abrirConexion();
        $rSQL = $this->getConsulta('SELECT nivel_usuario FROM usersmr WHERE nombre_usuario = "' . $username . '" AND password = "' . $pass . '"  ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        return $resultado;
    }
    public function consultaIdProducto($nombre, $descripcion, $categoria, $cantidad, $precio) {
        $resultado = Array();
        $this->abrirConexion();
        $rSQL = $this->getConsulta('SELECT * FROM articulomr WHERE nombre = "' . $nombre . '" AND descripcion = "' . $descripcion . '" AND id_categoria ="'
                                   . $categoria . '" AND cantidad = "' . $cantidad . '" AND precio = "' . $precio . '" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        return $resultado;
    }
    
    
    public function AgregarCliente($nombre, $apellidoP, $apellidoM, $direccion, $telefono, $email, $rfc) {
        $this->abrirConexion();
        $rSQL = $this->getConsulta('INSERT INTO clientemr(nombre,apellidop,apellidom,direccion,telefono,email,rfc) VALUES("' . $nombre . '","' .             $apellidoP . '","' . $apellidoM . '","' . $direccion . '","' . $telefono . '","' . $email . '","' . $rfc . '")');
        $this->cerrarConexion();
    
    }
    
    public function listaCliente() {
        $resultado = Array();
        $this->abrirConexion();
        $rSQL = $this->getConsulta('SELECT * FROM clientemr  ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        return $resultado;
    }
    
    public function AgregarProveedor($nombre, $direccion, $telefono, $ciudad, $estado, $rfc) {
        $this->abrirConexion();
        $rSQL = $this->setConsulta('INSERT INTO proveedormr(nombre_proveedor,direccion,telefono,ciudad,estado,rfc) VALUES("' . $nombre . '","' .  $direccion . '","' . $telefono . '","' . $ciudad . '","' . $estado . '","' . $rfc . '")');
        $this->cerrarConexion();
    
    }
    public function agregarRelacionProducto($id_producto,$id_proveedor) {
        $this->abrirConexion();
        $rSQL = $this->setConsulta('INSERT INTO relacionProductomr(id_producto,id_proveedor) VALUES("' . $id_producto . '","' .  $id_proveedor . '")');
        $this->cerrarConexion();
    
    }
    
    public function AgregarArticulo($nombre, $descripcion, $categoria, $cantidad, $precio) {
        $this->abrirConexion();
        $rSQL = $this->setConsulta('INSERT INTO articulomr(nombre,descripcion,id_categoria,cantidad,precio) VALUES("' . $nombre . '","' .  $descripcion . '","' . $categoria . '","' . $cantidad . '","' . $precio . '")');
        $this->cerrarConexion();
    
    }
    
    public function listaProveedor() {
        $resultado = Array();
        $this->abrirConexion();
        $rSQL = $this->getConsulta('SELECT * FROM proveedormr  ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        return $resultado;
    }
    
    public function listaCategoria() {
        $resultado = Array();
        $this->abrirConexion();
        $rSQL = $this->getConsulta('SELECT * FROM categoriamr  ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        return $resultado;
    }
    
    public function AgregarEmpleado($nombre, $apellidoP, $apellidoM, $sexo, $fecha, $direccion, $telefono, $email, $puesto) {
        $this->abrirConexion();
        $rSQL = $this->getConsulta('INSERT INTO empleadomr(nombre_empleado,apellidop,apellidom,sexo,fecha_nac,direccion,telefono,email,puesto) VALUES("' . $nombre . '","' .   $apellidoP . '","' .  $apellidoM . '","' .  $sexo . '","' .  $fecha . '","' .  $direccion . '","' . $telefono . '","' . $email . '","' . $puesto . '")');
        $this->cerrarConexion();
    
    }
    
    public function editarUsuario($status,$username) {
        $this->abrirConexion();
        $this->setConsulta("UPDATE usersmr SET status='" . $status . "' WHERE nombre_usuario='" . $username . "'");
        $this->cerrarConexion();
    }
    
    
}

?>
