<?php
//ログイン有無を確認するコード！
session_start();

require_once("funcs.php");
loginCheck();

$id = $_GET["id"];
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ更新</title>
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
                <legend>編集中</legend>
                <label>氏名：<input type="text" name="name" value="<?= $row["name"] ?>"></label><br>
                <label>年齢：<input type="text" name="age" value="<?= $row["age"] ?>"></label><br>
                <label>性別：<input type="radio" name="gender" value="<?= $row["gender"] ?>"></label><br>
                <label>メールアドレス：<input type="text" name="email" value="<?= $row["email"] ?>"></label><br>
                <label>URL（任意）：<input type="text" name="url" value="<?= $row["url"] ?>"></label><br>
                <label>メッセージ：<br>
                <textArea name="message" rows="5" cols="50"><?= $row["message"] ?></textArea></label><br>
                <input type="submit" value="更新">

                <input type="hidden" name="id" value="<?= $id ?>">
            </fieldset>
        </div>
    </form>
</body>
</html>
