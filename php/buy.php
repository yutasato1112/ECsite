<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_buy.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>購入</title>

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
                    print "<p class=s_title>商品名</p>";
                    print "<p class=name>$name</p>";
                    print "<p class=s_title>価格</p>";
                    print "<p class=price>$price</p>";
                    print "<p class=s_title>お届け先情報</p>";

                    
                    echo "<form class=\"row g-3 needs-validation\" novalidate=\"\">\n";
                    echo "  <div class=\"col-md-4\">\n";
                    echo "    <label for=\"validationCustom01\" class=\"form-label\">名字</label>\n";
                    echo "    <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"\" required=\"\">\n";
                    echo "    <div class=\"valid-feedback\">\n";
                    echo "      Looks good!\n";
                    echo "    </div>\n";
                    echo "  </div>\n";
                    echo "  <div class=\"col-md-4\">\n";
                    echo "    <label for=\"validationCustom02\" class=\"form-label\">名前</label>\n";
                    echo "    <input type=\"text\" class=\"form-control\" id=\"validationCustom02\" value=\"\" required=\"\">\n";
                    echo "    <div class=\"valid-feedback\">\n";
                    echo "      Looks good!\n";
                    echo "    </div>\n";
                    echo "  </div>\n";
                    echo "  <div class=\"col-md-3\">\n";
                    echo "    <label for=\"validationCustom05\" class=\"form-label\">郵便番号</label>\n";
                    echo "    <input type=\"text\" class=\"form-control\" id=\"validationCustom05\" required=\"\">\n";
                    echo "    <div class=\"invalid-feedback\">\n";
                    echo "      Please provide a valid zip.\n";
                    echo "    </div>\n";
                    echo "  </div>\n";
                    echo "  <div class=\"col-md-3\">\n";
                    echo "    <label for=\"validationCustom04\" class=\"form-label\">都道府県</label></label>\n";
                    echo "    <select class=\"form-select\" id=\"validationCustom04\" required=\"\">\n";
                    echo "      <option selected=\"\" disabled=\"\" value=\"\">選択してください</option>\n";
                    echo "      <option>北海道</option>\n";
                    echo "      <option>青森県</option>\n";
                    echo "      <option>岩手県</option>\n";
                    echo "      <option>宮城県</option>\n";
                    echo "      <option>秋田県</option>\n";
                    echo "      <option>山形県</option>\n";
                    echo "      <option>福島県</option>\n";
                    echo "      <option>茨城県</option>\n";
                    echo "      <option>栃木県</option>\n";
                    echo "      <option>群馬県</option>\n";
                    echo "      <option>埼玉県</option>\n";
                    echo "      <option>千葉県</option>\n";
                    echo "      <option>東京都</option>\n";
                    echo "      <option>神奈川県</option>\n";
                    echo "      <option>新潟県</option>\n";
                    echo "      <option>富山県</option>\n";
                    echo "      <option>石川県</option>\n";
                    echo "      <option>福井県</option>\n";
                    echo "      <option>山梨県</option>\n";
                    echo "      <option>長野県</option>\n";
                    echo "      <option>岐阜県</option>\n";
                    echo "      <option>静岡県</option>\n";
                    echo "      <option>愛知県</option>\n";
                    echo "      <option>三重県</option>\n";
                    echo "      <option>滋賀県</option>\n";
                    echo "      <option>京都府</option>\n";
                    echo "      <option>大阪府</option>\n";
                    echo "      <option>兵庫県</option>\n";
                    echo "      <option>奈良県</option>\n";
                    echo "      <option>和歌山県</option>\n";
                    echo "      <option>鳥取県</option>\n";
                    echo "      <option>島根県</option>\n";
                    echo "      <option>岡山県</option>\n";
                    echo "      <option>広島県</option>\n";
                    echo "      <option>山口県</option>\n";
                    echo "      <option>徳島県</option>\n";
                    echo "      <option>香川県</option>\n";
                    echo "      <option>愛媛県</option>\n";
                    echo "      <option>高知県</option>\n";
                    echo "      <option>福岡県</option>\n";
                    echo "      <option>佐賀県</option>\n";
                    echo "      <option>長崎県</option>\n";
                    echo "      <option>熊本県</option>\n";
                    echo "      <option>大分県</option>\n";
                    echo "      <option>宮崎県</option>\n";
                    echo "      <option>鹿児島県</option>\n";
                    echo "      <option>沖縄県</option>\n";
                    echo "    </select>\n";
                    echo "    <div class=\"invalid-feedback\">\n";
                    echo "      Please select a valid state.\n";
                    echo "    </div>\n";
                    echo "  </div>\n";
                    echo "  <div class=\"col-md-6\">\n";
                    echo "    <label for=\"validationCustom03\" class=\"form-label\">住所</label>\n";
                    echo "    <input type=\"text\" class=\"form-control\" id=\"validationCustom03\" required=\"\">\n";
                    echo "    <div class=\"invalid-feedback\">\n";
                    echo "      Please provide a valid city.\n";
                    echo "    </div>\n";
                    echo "  </div>\n";
                    echo "</form>";

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