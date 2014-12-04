<?php
session_start();
require 'lib/Inter.php';
$X = new Inter();
$status=0;
if(isset ($_SESSION['admin'])){
    $X->editarUsuario(0,$_SESSION['admin']);
    unset($_SESSION['admin']); 
}elseif (isset($_SESSION['nivel2'])) {
    $X->editarUsuario(0,$_SESSION['nivel2']);
    unset($_SESSION['nivel2']);
}elseif (isset($_SESSION['nivel3'])) {
    $X->editarUsuario(0,$_SESSION['nivel3']);
    unset($_SESSION['nivel3']);
}elseif (isset($_SESSION['nivel4'])) {
    $X->editarUsuario(0,$_SESSION['nivel4']);
    unset($_SESSION['nivel4']);
}
header("location:login.php");


?>