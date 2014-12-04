<?php
class Conexion {

    //put your code here
    private $servidor;
    private $user;
    private $password;
    private $conexion;
    private $bd;
    
    public function __construct() {
        $this->bd   ='dsc_moviles2013';
       $this->servidor = 'localhost:3306';
       $this->user = 'dsc_movil2013';
       $this->password = 'movil2013';
//   $this->servidor = 'localhost';
//    $this->user = 'root';
//   $this->password = '';
    }
    public function abrirConexion(){
        $this->conexion = mysql_connect($this->servidor,  $this->user, $this->password) or die('no se conecto');
        mysql_select_db($this->bd,  $this->conexion);
    }
    public function cerrarConexion(){
        mysql_close($this->conexion);
    }
    public function getConexion(){
        return $this->conexion;
    }
    
    public function setConsulta($query){
        mysql_query($query, $this->conexion);
        echo mysql_error();
    }
    public function getConsulta($query){
       return mysql_query($query,  $this->conexion);
    }
}

?>
