<?php
    // 外部ファイル読込
    require_once 'admin.php';
    // セッション開始
    session_start();
    // セッション情報　login_adminというニックネーム取得
    $login_admin = $_SESSION['login_admin'];
    // $login_adminがnullの場合
    if($login_admin === null){
        header('Location: admin_login.php');
        exit;
    }
?>