<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_register_confimation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>新規登録確認</title>

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
            $new_user_id=$_GET['new_user_id'];
            $new_user_name=$_GET['new_user_name'];
            $new_user_password=$_GET['new_user_password'];
            $new_user_email=$_GET['new_user_email'];
            $new_user_password_retype=$_GET['new_user_password_retype'];
            
            $existence =0;
            if($new_user_password != $new_user_password_retype){
                //print "<META http-equiv=Refresh content=1;URL=register.php>";
            }
            $new_user_password = md5($new_user_password_retype);
            session_start();
            $_SESSION['new_user_id']=$new_user_id;
            $_SESSION['new_user_name']=$new_user_name;
            $_SESSION['new_user_password']=$new_user_password;
            $_SESSION['new_user_email']=$new_user_email;
            try{
                $conn = "host=ec2-34-194-73-236.compute-1.amazonaws.com dbname=dl7k5i97ich1l user=vmarkahoqhzaaa password=432da7483948509568cbe6ee852bc3f3ae993e318323455efd363d5866623b17";
                $link = pg_connect($conn);
                if (!$link) {
                    die('接続失敗です。'.pg_last_error());
                } 
                // PostgreSQLに対する処理
                $result=pg_query("SELECT id FROM client WHERE id = '$new_user_id'");
                while($row=pg_fetch_array($result)){
                    $existence+=1;
    
                }
                if($existence == 0){
                    //同一IDがなかったときの処理   
                        print "<div class=space></div>";
                        print "<div class=con>";
                            print "<p class=s_title>ログインID</p>";
                            print "<p class=content>$new_user_id</p>";
                        print "</div>" ;   
                        print "<div class=con>";
                            print "<p class=s_title>ログインパスワード</p>";
                            print "<p class=content>$new_user_password_retype</p>";
                        print "</div>" ;   
                        print "<div class=con>";
                            print "<p class=s_title>氏名</p>";
                            print "<p class=content>$new_user_name</p>";
                        print "</div>" ;   
                        print "<div class=con>";
                            print "<p class=s_title>メールアドレス</p>";
                            print "<p class=content>$new_user_email</p>";
                        print "</div>";
                        print "<div class=space></div>";
                        print "<p class=s_p>以上の内容で登録いたします。よろしいですか。</p>";
                        print "<div class=space></div>";
                        print "<div class=btn_area>";
                            print "<button onClick=location.href='register.php' type=\"button\" class=\"btn btn-primary\">キャンセル</button>";
                            print "<div class=w_space></div>";
                            print "<button onClick=location.href='register_check.php' type=\"button\" class=\"btn btn-primary\">登録</button>";
                        print "</div>";
                        print "<div class=space></div>";
                }else{
                    print "アカウントIDが既に使用されています";
                    //print "<META http-equiv=Refresh content=1;URL=register.php>";
                }
            }catch (PDOException $e){
                print('Error:'.$e->getMessage());
                die();
            }
            
        ?>
        <div class="f_space"><div>
        <!-- メインコンテンツここまで -->
    </div>
    <div class="f_space"><div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>