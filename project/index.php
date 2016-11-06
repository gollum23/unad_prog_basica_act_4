<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    define("RELATIVE", ".");
    define("ABS_PATH", realpath(dirname(__FILE__)));
    include ABS_PATH.'/includes/header.php';
    include ABS_PATH.'/includes/config.php';

?>
    <div class="panel panel-primary">
        <div class="panel-heading">Ejercicio</div>
        <div class="panel-body">

            <p>Crear un programa que conecten al motor mySQL y a la base de datos, luego una página donde insertan los datos de un
                computador (foto del equipo, número del serial, Velocidad del procesador, marca, capacidad de memoria RAM, capacidad
                de disco duro) en mySQL, otra página que muestre los datos almacenados, otra página que modifique los datos y otra que
                borre un registro.</p>
            <p>Las páginas deben estar enlazadas en un
                menú principal que permita apreciar de
                forma ordenada el sitio WEB.</p>
            <p>Adicional a esto deben crear un menú
                con contraseña para el administrador del
                aplicativo que permita generar reportes
                en PDF (se sugiere librería fpdf) y hacer
                un backup (se sugiere mysqldump) de la
                base de datos.</p>
            <p><a href="app/">Ir al ejercicio</a> <a href="app/setup.php">Crear Tabla</a></p>
        </div>
    </div>
<?php
    include ABS_PATH.'/includes/footer.php';
?>
