<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_sell.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>出品</title>

</header>
<body>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <button type="button" onclick="location.href='home.php'" class="title">ECサイト</button>
    <?php
    session_start();
        $id=$_SESSION['user_id'];
        $pass=$_SESSION['user_pass'];
        $name=$_SESSION['user_name'];
        print "<div class=log_and_reg_area>";
            print "<button type=button onclick=location.href='login.php' class='btn btn-primary btn-lg log'>ログイン</button>";
            print "<button type=button onclick=location.href='register.php' class='btn btn-primary btn-lg reg'>新規登録</button>";
            if(isset($_SESSION["user_id"])){
                print "<p class=id>$name さん</p>";
            }
        print "</div>"
    ?>
    <div class="serch_area">
        <div class="space"></div>
        <form action="serch.php" method="GET" class="serch_keyword">
            <input class="form-control form-control-lg keyword" type="text" placeholder="検索キーワード" aria-label=".form-control-lg" name="res_name" pattern= "[^#&?=%\+_'.,]+">
            <button type="submit" class="btn btn-secondary kensaku">検索</button>
        </form>
        <div class="space"></div>
    </div>

    <div class="main_contents">
        <!-- ここにメインコンテンツを記述 -->
        <div class="space"></div>
        <form action="sell_confimation.php" method="POST" enctype="multipart/form-data" class="sell_res">
            <label for="formControlInput" class="form-label s_title">商品名</label>
            <input type="text" class="form-control" id="formControlInput" name="new_item_name" placeholder="商品名を入力" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <label for="formControlInput" class="form-label s_title">商品画像</label><br>
            <input type="file" name="new_item_pic" >
            <div class="space"></div>
            <label for="formControlInput" class="form-label s_title">価格</label>
            <input type="number" class="form-control" id="formControlInput" name="new_item_price" placeholder="価格を入力" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <label for="formControlInput" class="form-label s_title">詳細説明</label>
            <input type="text" class="form-control" id="formControlInput" name="new_item_detail" placeholder="商品の詳細説明を入力" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <button type="submit" class="btn btn-primary">確認</button>
            <div class="space"></div>
        </form>
        <!-- メインコンテンツここまで -->
    </div>
    <div class="f_space"></div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>