<?php
    // 外部ファイル読込
    require_once 'cart_dao.php';
    require_once 'customer_dao.php';
    require_once 'purchase_dao.php';
    require_once 'item_dao.php';
    // セッション開始
    session_start();
    // ログイン者の情報保存
    $login_customer = $_SESSION['login_customer'];
    
    // ログイン者の選択した物　idを取得
    $my_carts = CartDAO::get_my_carts($login_customer->id);
    

    // var_dump($my_carts);
    //トランザクション処理を開始
    // $pdo = CartDAO::get_connection()
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $pdo->beginTransaction();
    
    // foreach($my_carts as $cart){
        
    //     $purchase = new Purchase($cart->customer_id, $cart->item_id, $cart->number);
    //     // var_dump($purchase);
    //     // 購入履歴登録
    //     PurchaseDAO::insert($purchase);
    //     // 在庫数減少
    //     ItemDAO::decrement_stock($cart);
    //      // カート情報削除
    //     CartDAO::delete_cart($cart->id);
    // }
    // 支払い銀行の確認メッセージ表示
    $_SESSION['pay_message'] = お支払い先確認;
    header('Location: purchase_transfer.php');
    exit;
    
    
    

?>