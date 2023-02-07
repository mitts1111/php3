<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


function db_conn(){
    try {
     
        $pdo = new PDO('mysql:dbname=book;charset=utf8;host=localhost', 'root', '');
        return $pdo;

    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }
}

