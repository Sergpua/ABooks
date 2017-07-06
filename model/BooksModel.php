<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 04.07.2017
 * Time: 10:01
 */
include_once 'config/db.php';

function getAllBooks(){
    //підключення до БД
    $connection = getConnectionToDB();
    //створення запросу в БД
    $sql = 'SELECT * FROM books';
    $rs = mysqli_query($connection, $sql);
    $connection->close();
    $books = null;
    while($row = mysqli_fetch_row($rs)){
        $book['id'] = $row[0];
        $book['author'] = getAutorById($row[1])[1];
        $book['title'] = $row[2];
        $book['size'] = $row[3];
        $book['bitrate'] = $row[4];
        $book['duration'] = $row[5];
        $book['imagen'] = $row[6];
        $book['uploader'] = $row[7];
        $book['raiting'] = $row[8];
        $book['votes'] = $row[9];
        $book['description'] = $row[10];
        $book['downloads'] = $row[11];
        $book['googleLink'] = $row[12];
        $book['megaLink'] = $row[13];
        $book['directLink'] = $row[14];
        $books[] = $book;
    }
    return $books;
}

function getBookById($id){
    $connection = getConnectionToDB();

    $sql = "SELECT * FROM books WHERE id LIKE $id";
    $rs = mysqli_query($connection, $sql);
    $connection->close();
    $book = null;
    while($row = mysqli_fetch_row($rs)){
        $book['id'] = $row[0];
        $book['author'] = getAutorById($row[1])[1];
        $book['title'] = $row[2];
        $book['size'] = $row[3];
        $book['bitrate'] = $row[4];
        $book['duration'] = $row[5];
        $book['imagen'] = $row[6];
        $book['uploader'] = $row[7];
        $book['raiting'] = $row[8];
        $book['votes'] = $row[9];
        $book['description'] = $row[10];
        $book['downloads'] = $row[11];
        $book['googleLink'] = $row[12];
        $book['megaLink'] = $row[13];
        $book['directLink'] = $row[14];
    }
    return $book;
}

function getAutorById($id){
    $connection = getConnectionToDB();

    $sql = "SELECT * FROM authors WHERE author_id LIKE $id";
    $rs = mysqli_query($connection, $sql);
    $connection->close();
    $author = null;
    while($row = mysqli_fetch_row($rs)){
        $author = $row;
    }
    return $author;
}