<!doctype html>
<html lang='ja'>
    <head>
        <meta charset='UTF-8'>
        <title>お客様情報変更</title>
        <link rel='stylesheet' href='index.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class='container-fluid sticky-top'>
            <div class='row header'>
                <a href='mypage.php' class='logo'><span class='col-lg-2'>KURIADELE</span></a>
                <span class='col-lg-5 offset-lg-2 px-0 span_a'>
                    <a href='login_contact.php' class='span_d'>お問い合わせ</a>
                    <a href='login_product.php' class='span_d'>商品一覧</a>
                    <a href='cart.php' class='span_d'>カート</a>
                    <a href='purchases.php' class='span_d'>購入履歴</a>
                    <a href='logout.php' class='span_d'>ログアウト</a>
                </span>
                <span class='col-lg-1 px-0 info'>
                    <form method='GET' action='login_search.php' class='info'>
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
        <p class='customer'>お客様情報変更</p>
        <!--顧客情報更新完了メッセージ 表示-->
        <?php if($flash_message !== null): ?>
            <p class='message'><?= $flash_message ?></p>
        <?php endif; ?>
        <p class='customer'>お客様登録状況</p>
        <table class='container-fluid list table col-lg-6 col-6'>
            <div class='row'> 
                <tbody>
                    <tr>
                        <th>お名前</th><td><?= $customer->name ?></td>
                    </tr>
                    <tr>
                        <th>カタカナ</th><td><?= $customer->kana_name ?></td>
                    </tr>
                    <tr>
                        <th>郵便番号</th><td><?= $customer->postal_code ?></td>
                    </tr>
                    <tr>
                        <th>住所</th><td><?= $customer->address ?></td>
                    </tr>
                    <tr>
                        <th>お電話番号</th><td><?= $customer->tel ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th><td><?= $customer->email_address ?></td>
                    </tr>
                    <tr>
                        <th>パスワード</th><td><?= $customer->password ?></td>
                    </tr>
                </tbody>
            </div>
        </table>
        <div class='footer'>
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