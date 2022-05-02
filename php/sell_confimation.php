<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_sell_confimation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>出品確認</title>

</header>
<body>
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <button type="button" onclick="location.href='home.php'" class="title">ECサイト</button>
    <?php
    session_start();
        $id=$_SESSION['user_id'];
        $pass=$_SESSION['user_pass'];
        print "<div class=log_and_reg_area>";
            print "<button type=button onclick=location.href='login.php' class='btn btn-primary btn-lg log'>ログイン</button>";
            print "<button type=button onclick=location.href='register.php' class='btn btn-primary btn-lg reg'>新規登録</button>";
            if(isset($_SESSION["user_id"])){
                print "<p class=id>$id さん</p>";
            }
        print "</div>"
    ?>
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
        <?php
            $new_item_name=$_POST['new_item_name'];
            $new_item_price=$_POST['new_item_price'];
            $new_item_detail=$_POST['new_item_detail'];
            $new_item_seller=$id;
            $PATH="../picture/item/";
            $type= mime_content_type($_FILES['new_item_pic']['tmp_name']);
            $type_name=substr($type,6);
            $pic_name=uniqid().".".$type_name;
            move_uploaded_file($_FILES['new_item_pic']['tmp_name'], $PATH.$pic_name);
            $new_item_pic=$PATH.$pic_name;
            $_SESSION['new_item_name']=$new_item_name;
            $_SESSION['new_item_price']=$new_item_price;
            $_SESSION['new_item_detail']=$new_item_detail;
            $_SESSION['new_item_pic']=$new_item_pic;

            print "<div class=space></div>";
                    print "<p class=item_title>商品名 : $new_item_name</p>";
                    print "<div class=space></div>";
                    print "<img src=$new_item_pic alt=>";
                    print "<div class=space></div>";
                    print "<div class=price_buy_area>";
                        print "<p class=item_price>価格 : $new_item_price</p>";
                        print "<div class=space_w></div>";
                        print "<button type=button class='btn btn-primary btn-lg buy'>購入</button>";
                    print "</div>";
                    print "<div class=space_lg></div>";
                    print "<p class=detail>詳細</p>";
                    print "<p class=detail_content>$new_item_detail</p>";
                    print "<div class=space_lg></div>";
                    print "<p class=seller>出品者 : $new_item_seller</p>";
                    print "<div class=space_lg></div>";
                    print "<div class=price_buy_area>";
                        print "<button onClick=location.href='sell.php' type=button class='btn btn-primary btn-lg buy'>キャンセル</button>";
                        print "<div class=space_w></div>";
                        print "<button onClick=location.href='sell_check.php' type=button class='btn btn-primary btn-lg buy'>出品</button>";
                    print "</div>";
        ?>
        <div class="space_f"></div>
        <!-- メインコンテンツここまで -->
    </div>
    <div class="space_f"></div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>