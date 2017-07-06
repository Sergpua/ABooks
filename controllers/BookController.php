<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 05.07.2017
 * Time: 13:38
 */
include_once 'model/BooksModel.php';

function bookAction($smarty){
    $book = getBookById($_GET['id']);

    $smarty->assign('pageTitle', $book['title']);
    $smarty->assign('book', $book);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'menuTop');
    loadTemplate($smarty, 'slider');

    loadTemplate($smarty, 'bookDetails');

    loadTemplate($smarty, 'footer');
}