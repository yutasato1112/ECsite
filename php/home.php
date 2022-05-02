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

    <script language="JavaScript">
        function Check(){
        if(document.serch_form.res_name.value==""){
            alert("検索キーワードを入力してください。");
            return false;
        }
            return true;
        }
    </script>

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
        <form action="serch.php" method="GET" class="serch_keyword" name="serch_form" onsubmit="return Check()">
            <input class="form-control form-control-lg keyword" type="text" placeholder="検索キーワード" aria-label=".form-control-lg" name="res_name" pattern= "[^#&?=%\+_'.,]+">
            <button type="submit" class="btn btn-secondary kensaku">検索</button>
        </form>
        <div class="space"></div>
    </div>

    <div class="main_contents">
        <!-- ここにメインコンテンツを記述 -->
        <div class="space"></div>
        <?php
            //テストエリア
            //ここまで 
            try{
                $conn = "host=ec2-34-194-73-236.compute-1.amazonaws.com dbname=dl7k5i97ich1l user=vmarkahoqhzaaa password=432da7483948509568cbe6ee852bc3f3ae993e318323455efd363d5866623b17";
                $link = pg_connect($conn);
                if (!$link) {
                    die('接続失敗です。'.pg_last_error());
                } 
                // PostgreSQLに対する処理
                $result = pg_query('SELECT * FROM item WHERE item_status is true');
                print "<ul class=cardUnit>";
                while($row=pg_fetch_array($result)){
                    $item_id=$row['item_id'];
                    print "<li class=card>";
                    print "<a href=detail.php?res_name=$item_id>";
                            $pic =$row['item_pic'];
                            $name=$row['item_name'];
                            $price=$row['item_price'];
                            print "<img src=$pic alt=>";
                            print "<p>商品名 $name</p>";
                            print "<p>価格 $price</p>";
                        print "</a>";
                    print "</li>";
                }
                print "</ul>";

            }catch (PDOException $e){
                print('Error:'.$e->getMessage());
                die();
            }
        ?>

        <!-- メインコンテンツここまで -->
    
    </div>
    <div class="space_f"></div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>