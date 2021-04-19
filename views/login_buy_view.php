<!doctype html>
<html lang='ja'>
    <head>
        <meta charset='UTF-8'>
        <title>商品情報 詳細</title>
        <link rel='stylesheet' href='index.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class='container-fluid sticky-top'>
            <div class='row header'>
                <a href='mypage.php' class='logo'><span class='col-lg-2 '>KURIADELE</span></a>
                <span class='offset-lg-4 col-lg-3 px-0 span_c'>
                    <a href='login_contact.php' class='span_d'>お問い合わせ</a>
                    <a href='cart.php' class='span_d'>カート</a>
                    <a href='purchases.php' class='span_d'>購入履歴</a>
                    <a href='logout.php' class='span_d'>ログアウト</a>
                </span>
                
                <span class='col-lg-1 px-0 info'>
                    <form method='GET' action='search.php' class='info'>
                        <input type='search' name='name'/>
                        <input type='submit' value='検索'/>
                    </form>
                
            
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class='dropdown-item' href='#'><a href='login_company.php'>KURIADELEについて</a>
                        <a class='dropdown-item' href='#'><a href='login_product.php'>取扱商品</a>
                        <a class='dropdown-item' href='#'><a href='login_contact.php'>サポート</a>
                    </div>
                </span>
            </div>
        </div>

        <p class='customer'>商品情報 詳細</p>
        <table class='container-fluid table col-lg-6'>
            <div class='row'>
                <tbody>
                    
                    
                    <tr>
                        <td class='table_td'><?= $item->id ?></td>
                        <td><img src='upload/items/<?= $item->image ?>' class='img_td'></img></td>
                        <td class='table_td'>商品名：&emsp;<?= $item->name ?></td>
                        <td class='table_td'>在庫：&emsp;&emsp;<?= $item->stock ?>個</td>
                        <td class='table_td'>金額：&emsp;&emsp;￥<?= $item->price ?></td>
                        <td class='table_td'>商品説明：<?= $item->description ?></td>
                        <td class='table_td'>
                        <!--商品の在庫が0より小さい場合時に実行-->
                        <?php if($item->stock > 0): ?>
                        <!--$login_customerがnull空でない時に実行-->
                        <?php if($login_customer !== null): ?>
                          
                            <form method='POST' action='cart_in.php'>
                                <select class='select_box' name="number">
                                    <?php for($i = 1; $i <= $item->stock; $i++): ?>
                                        <option value='<?= $i ?>'><?= $i ?></option>
                                    <?php endfor; ?>
                                    
                                個</select>
                                <input type='submit' value='カートに入れる'>
                                <input type="hidden" name='item_stock' value="<?= $item->stock ?>">
                                <input type="hidden" name="item_id" value="<?= $item->id ?>">
                            </form>
                        </td>
                        <?php endif; ?>
                        <?php else: ?>
                        <p>現在、在庫はありません。入荷をお待ちください。</p>
                        <?php endif; ?> 

                    </tr>
                    
                </tbody>
            </div>
        </table>
    

        <div class='footer '>
            <ul><span>KURIADELEについて</span><br>
                <li><a href='login_company.php'>企業紹介</a></li>

            </ul>
            <ul><span>取扱商品</span>
                <li><a href='login_product.php'>商品一覧</a></li>
            </ul>
            <ul><span>サポート</span>
                <li><a href='login_contact.php'>お問い合わせ</a></li>
                <li><a href='login_change.php'>お客様情報変更</a></li>
            </ul>
        </div>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
    </body>
</html>
