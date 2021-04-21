<?php
    class MvcController {
        #LLAMADA A LA PLANTILLA
        #-----------------------------------

        public function plantilla() {
            include "views/template.php";
        }

        #INTERACCIÓN DEL USUARIO
        #-----------------------------------
        public function enlacesPaginasController() {
            if (isset($_GET["action"])) {
                $enlacesController = $_GET["action"];
            }
            else{
                $enlacesController = "index";
            }
            
            $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

            include $respuesta;
        }
    }
?>