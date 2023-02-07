
<?php


$name = $_POST['name'];
$url = $_POST['url'];
$com = $_POST['com'];


require_once('funcs.php');
$pdo = db_conn();


$stmt = $pdo->prepare("INSERT INTO
                        gs_bm_table(id, name, url, com, date)
                        VALUES(NULL, :name, :url, :com, sysdate() )");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':com', $com, PDO::PARAM_STR);


$status = $stmt->execute();


if ($status === false) {

    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
} else {

    header('Location: index.php');
}