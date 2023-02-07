<?php

$id = $_GET['id'];


require_once('funcs.php');
$pdo = db_conn();


$stmt = $pdo->prepare('DELETE FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute(); 


if ($status === false) {

    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {

    header('Location: select.php');
    exit();
}