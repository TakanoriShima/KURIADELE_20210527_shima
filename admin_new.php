<?php
    require_once 'admin_dao.php';
    session_start();
    // var_dump($_POST);
    // 入力されたアドレスとパスワード表示　　確認ＯＫ
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    
    // var_dump($_POST);
    
    // 入力されたアドレス・パスワードをデータベースから抜き出す
    $admin = AdminDAO::get_admin($email_address, $password);
    // var_dump($admin);
    // // falseと$adminの値または型が等しくない 同じではない時
    if($admin !== false){
                    // セッション情報　login_adminというニックネームを保存
        $_SESSION['login_admin'] = $admin;
        header('Location: admin_index.php');
        exit;
        
    }else{ // いなければ
    
        $_SESSION['error'] = 'ログインできません';
        header('Location: admin_login.php');
        exit;
    }

    
?>