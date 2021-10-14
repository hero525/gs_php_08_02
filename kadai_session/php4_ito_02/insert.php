<?php

$name   = $_POST["name"];
$age    = $_POST["age"];
$gender    = $_POST["gender"];
$email  = $_POST["email"];
$url    = $_POST["url"];
$message = $_POST["message"];

require_once("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,age,gender,email,url,message,date)
                       VALUES(:name,:age,:gender,:email,:url,:message,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);
$status = $stmt->execute();


if ($status == false) {
    sql_error($stmt);
} else {
    redirect("index.php");
}
