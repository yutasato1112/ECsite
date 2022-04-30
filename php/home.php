<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>ホーム</title>

</header>
<body>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <button type="button" onclick="location.href='home.php'" class="title">ECサイト</button>
    <div class="log_and_reg_area">
        <button type="button" onclick="location.href='login.php'" class="btn btn-primary btn-lg log">ログイン</button>
        <button type="button" onclick="location.href='register.php'" class="btn btn-primary btn-lg reg">新規登録</button>
    </div>
    <div class="serch_area">
        <div class="space"></div>
        <form action="serch.php" method="GET" class="serch_keyword">
            <input class="form-control form-control-lg keyword" type="text" placeholder="検索キーワード" aria-label=".form-control-lg" name="res_name">
            <button type="submit" class="btn btn-secondary kensaku">検索</button>
        </form>
        <div class="space"></div>
    </div>

    <div class="main_contents">
        <!-- ここにメインコンテンツを記述 -->
        <div class="space"></div>
        <ul class="cardUnit">
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
            <li class="card">
                <img src="https://placehold.jp/400x300.png" alt="">
                <p>商品名</p>
                <p>価格</p>
            </li>
        </ul>

        <!-- メインコンテンツここまで -->
    </div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>