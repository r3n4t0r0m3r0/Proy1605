<?php session_start(); ?>
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

        <div>
            <?php if (isset($_SESSION['USR'])) { ?>
                <a href="cerrar.php">Cerrar Sesión</a>
            <?php } ?>
        </div>

        <a href="revision.php">Revisi&oacute;n de sesiones</a>
        <?php if (!isset($_SESSION['USR'])) { ?>
            <form method="post" action="revision.php">
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
                <input type="submit" value="Acceder">
            </form>
        <?php } ?>

        <h1>Ejemplos de Encriptación con el #MD5</h1>
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

    </body>
</html>
