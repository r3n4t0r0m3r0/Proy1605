<?php
include './lib/conexion.php';
include './lib/Usuario.php';

/*$PATH = 'lib/';
 *include $PATH.'conexion.php';
 *include $PATH.'Usuario.php'; 
 * 
 */
/*session_start();
var_dump($_SESSION);*/
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$oUsr = new Usuario();

$oUsr->nombre='flopez';
$oUsr->clave='1234';

if ($oUsr->VerificaUsuario()){
    echo 'Existe';
}else{
    echo 'No existe';
}
