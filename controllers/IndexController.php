<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 19:10
 */
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Inicio');

    loadTemplate($smarty, 'index');

}