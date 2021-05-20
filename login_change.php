<?php
    // ログインフィルター
    require_once 'login_filter.php';
    // 外部ファイル読込
    require_once 'daos/customer_dao.php';
    // ログイン者の情報取得
    $login_customer = $_SESSION['login_customer'];
    // エラーメッセージの取得
    $error_message = $_SESSION['error_message'];
    // 1度のみ表示
    $_SESSION['error_message'] = null;
    // 顧客情報更新後情報取得
    $customer = CustomerDAO::get_customer_by_id($login_customer->id);
    // viewファイルの表示
    include_once 'views/login_change_view.php';
?>