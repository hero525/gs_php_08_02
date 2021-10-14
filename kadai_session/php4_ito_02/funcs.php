<?php
//XSS対応
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
    try {
        $db_name = "gs_hero_login";
        $db_id   = "root";
        $db_pw   = "root";
        $db_host = "localhost";
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;port=8889;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

//SQLエラー
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:" . $error[2]);
}
//リダイレクト
function redirect($file_name){
    header("Location: " . $file_name);
    exit();
}

//ログインチェック処理
function loginCheck(){
    if ($_SESSION["chk_ssid"] === session_id()){
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    } else{
        exit('ログインしてからやり直してください');
    }
}