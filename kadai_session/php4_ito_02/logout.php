<?php
//以下はほぼテンプレ！


session_start();
//SESSIONを初期化（空っぽにする）
$_SESSION = array();

//Cookieに保存してある"SessionIDの保存期間を過去にして破棄
//なりすまし等が怖いので二重目の削除の動作！！
if (isset($_COOKIE[session_name()])) { //session_name()は、セッションID名を返す関数
    setcookie(session_name(), '', time() - 42000, '/');
}

//サーバ側での、セッションIDの破棄
//三重目の削除！
session_destroy();

//処理後、index.phpへリダイレクト
header("Location: login.php");
exit();
