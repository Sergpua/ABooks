<?php

define('DbName', 'audiobooks');
define('DbLocation','127.0.0.1');
define('DbUser','root');
define('DbPass','');

function getConnectionToDB(){
    $connection =  mysqli_connect(DbLocation, DbUser, DbPass, DbName);
    if(!$connection){
        echo "Data Base connection error";
        exit();
    }

    mysqli_query($connection, "set names 'utf8'");
    return $connection;
}