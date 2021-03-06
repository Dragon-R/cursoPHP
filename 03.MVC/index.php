<?php
    #EL INDEX: En él mostramos la salida de las vistas al usuario y también a traves de él enviamos las distintas acciones que el usuario envíe al controlador.

    #require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltará un error "PHP Fatal error" y el programa PHP se detendrá.

    #La versión require_once() funciona de la misma forma que sus respectivos, salvo que, al utilizar la versión _once, se impide lacarga de un mismo archivo más de una vez.

    #Si requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

    require_once "controllers/controller.php";
    require_once "models/model.php";

    $mvc = new MvcController();
    $mvc -> plantilla();
?>