<?php

function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix.$controllerName.PathPostfix;
    $function = $actionName.'Action';
    $function($smarty);

}

 function loadTemplate($smarty, $templateName){
    $smarty->display($templateName.TemplatePostfix);
}

function d($value = null, $die = 1){
     echo 'DEBUG: <br>';
     print_r($value);

     if($die) die;
}