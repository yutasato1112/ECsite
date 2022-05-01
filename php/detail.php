<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>商品詳細</title>

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
        <div class="space"></div>
        <?php
            $res=$_GET['res_name'];
            //テストエリア
            //ここまで 
            try{
                $conn = "host=ec2-34-194-73-236.compute-1.amazonaws.com dbname=dl7k5i97ich1l user=vmarkahoqhzaaa password=432da7483948509568cbe6ee852bc3f3ae993e318323455efd363d5866623b17";
                $link = pg_connect($conn);
                if (!$link) {
                    die('接続失敗です。'.pg_last_error());
                } 
                // PostgreSQLに対する処理
                $result = pg_query("SELECT * FROM item WHERE item_id='$res'");
                while($row=pg_fetch_array($result)){
                    $item_id=$row['item_id'];
                    $pic =$row['item_pic'];
                    $name=$row['item_name'];
                    $price=$row['item_price'];
                    $detail=$row['item_detail'];
                    $seller=$row['item_seller'];
                    print "<div class=space></div>";
                    print "<p class=item_title>商品名 : $name</p>";
                    print "<div class=space></div>";
                    print "<img src=$pic alt=>";
                    print "<div class=space></div>";
                    print "<div class=price_buy_area>";
                        print "<p class=item_price>価格 : $price</p>";
                        print "<div class=space_w></div>";
                        print "<button type=button onClick=location.href='buy.php?$item_id' class='btn btn-primary btn-lg buy'>購入</button>";
                    print "</div>";
                    print "<div class=space_lg></div>";
                    print "<p class=detail>詳細</p>";
                    print "<p class=detail_content>$detail</p>";
                    print "<div class=space_lg></div>";
                    print "<p class=seller>出品者 : $seller</p>";
                }
            }catch (PDOException $e){
                print('Error:'.$e->getMessage());
                die();
            }
        ?>
        <div class="space_f"></div>
        <!-- メインコンテンツここまで -->
    </div>
    <div class="space_f"></div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>