<?php


$name = $_POST['name'];
$url = $_POST['url'];
$com = $_POST['com'];
$id = $_POST['id'];

require_once('funcs.php');
$pdo = db_conn();


$stmt = $pdo->prepare('UPDATE gs_bm_table SET name = :name, url = :url, com = :com WHERE id = :id;');

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':com', $com, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 

$status = $stmt->execute(); 


if ($status === false) {
   
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
   
    header('Location: index.php');
    exit();
}