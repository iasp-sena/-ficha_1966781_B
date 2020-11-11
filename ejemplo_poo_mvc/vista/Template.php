<?php

class Template {

    public function render($rutaContenido, $data = []){
        include(DIR_VIEW . "template/head.php");

        include($rutaContenido);

        include(DIR_VIEW . "template/footer.php");
    }

}