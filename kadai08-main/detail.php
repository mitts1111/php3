<?php



 $id = $_GET['id'];

 require_once('funcs.php');
 $pdo = db_conn();


$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();



if ($status === false) {
  
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ブックマーク</legend>
                <label>書籍タイトル：<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
                <label>URL:<input type="text" name="url" value="<?= $result['url'] ?>"></label><br>
                <label><textArea name="com" rows="4" cols="40"><?= $result['com'] ?></textArea></label><br>
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <input type="submit" value="修正">
            </fieldset>
        </div>
    </form>
</body>

</html>
