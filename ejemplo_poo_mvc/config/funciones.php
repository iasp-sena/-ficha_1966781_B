<?php

function getUrlControllerMethod($controller, $method){
    return CONTEXT_APP . "/index.php?controller=$controller&method=$method";
}