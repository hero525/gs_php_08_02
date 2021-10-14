<?php

session_start();

$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

require_once("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare('SELECT * FROM gs_auth_table 
                       WHERE lid = :lid 
                       AND lpw = :lpw;' );
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    sql_error($stmt);
}

$val = $stmt->fetch(); 
//if(password_verify($lpw, $val["lpw"])){ //* PasswordがHash化の場合はこっちのIFを使う
if( $val["id"] != "" ){
    //Login成功
    echo $alert;
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    header('Location: select.php');
}else{
    //Login失敗
    header('Location: login.php');
}exit();
