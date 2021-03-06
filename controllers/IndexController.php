<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 19:10
 */

include_once 'model/BooksModel.php';

function indexAction($smarty){
    $books = getAllBooks();

    $smarty->assign('pageTitle', 'Inicio');
    $smarty->assign('books', $books);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'menuTop');
    loadTemplate($smarty, 'slider');

    loadTemplate($smarty, 'content');

    loadTemplate($smarty, 'footer');

}