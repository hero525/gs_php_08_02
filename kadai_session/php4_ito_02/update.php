<?php

$name   = $_POST["name"];
$age    = $_POST["age"];
$gender    = $_POST["gender"];
$email  = $_POST["email"];
$url   = $_POST["url"];
$message = $_POST["message"];
//idも追加忘れずに。
$id     = $_POST["id"];

require_once("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE gs_bm_table 
                       SET name=:name,age=:age,gender=:gender,email=:email,url=:url,message=:message 
                       WHERE id=:id");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);

$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();

//登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect("select.php");
}
