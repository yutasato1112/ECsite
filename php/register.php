<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap"
        rel="stylesheet">
    <title>新規登録</title>

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
        print "</div>";
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
        <form action="register_confimation.php" method="GET" class="register_area">
            <label for="formControlInput" class="form-label">ログインID</label>
            <input type="text" class="form-control" id="formControlInput" placeholder="Login ID" name="new_user_id" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <label for="formControlInput" class="form-label">氏名</label>
            <input type="text" class="form-control" id="formControlInput" placeholder="Your name" name="new_user_name" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <label for="formControlInput" class="form-label">パスワード</label>
            <input type="password" class="form-control" id="formControlInput" placeholder="Password" name="new_user_password" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <label for="formControlInput" class="form-label">再入力</label>
            <input type="password" class="form-control" id="formControlInput" placeholder="Re-typing" name="new_user_password_retype" pattern= "[^#&?=%\+_'.,]+">
            <div class="space"></div>
            <label for="formControlInput" class="form-label">メールアドレス</label>
            <input type="email" class="form-control" id="formControlInput" placeholder="Email address" name="new_user_email" pattern= "[^#&?=%\+_',]+">
            <div class="space"></div>
            <button type="submit" class="btn btn-secondary">OK</button>
        </form>
        <div class="space"></div>

        <!-- メインコンテンツここまで -->
    </div>
    <div class="footer">
        <p class="copy_right">©yutasato & yukioda</p>
    </div>
</body>