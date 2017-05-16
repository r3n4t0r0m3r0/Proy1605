<?php
/*session_start();
$_SESSION["saludo"]="Hola Mundo";*/
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="revision.php">Revisi&oacute;n de sesiones</a>
        
        <?php
        echo md5('#holamundo&');
        echo '<br>';
        echo md5('holamundo');
        echo '<br>';
        echo md5('HoLamundo');
        echo '<br>';
        echo md5('HOLAmundo');
        echo '<br>';
        ?>
        
        <form method="post" action="revision.php">
            <div>
                <label>
                    ID de Usuario:
                </label>
                <input type="text" name="id">
            </div>
            <div>
                <label>
                    Nombre de Usuario
                </label>
                <input type="text" name="nombre">
            </div>
            <div>
                <label>
                    Clave de Usuario
                </label>
                <input type="password" name="clave">
            </div>
            <input type="submit">
        </form>
    </body>
</html>
