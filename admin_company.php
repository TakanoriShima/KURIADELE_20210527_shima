<?php
    // ログインフィルター
    require_once 'admin_login_filter.php';
    // 外部ファイル読込
    require_once 'daos/customer_dao.php';
    require_once 'admin_daos/company_dao.php';

    // idをGETで取得
    // $idをnullにする
    $id = null;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    // 現在の企業情報表示
    $company = CompanyDAO::get_companys_id($id);
    // viewファイルの表示
    include_once 'admin_views/admin_company_view.php';
?>