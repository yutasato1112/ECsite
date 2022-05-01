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
    <?php
    session_start();
        $id=$_SESSION['user_id'];
        $pass=$_SESSION['user_pass'];
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
                $sql="UPDATE item SET item_buyer='$id', item_status=false WHERE item_id='$res'";
                $result = pg_query($link,$sql);
                print "<META http-equiv=Refresh content=1;URL=home.php>";
            }catch (PDOException $e){
                print('Error:'.$e->getMessage());
                die();
            }
    ?>
        
        <!-- メインコンテンツここまで -->
</body>