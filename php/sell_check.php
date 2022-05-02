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
    <title>チェック</title>

</header>
<body>
    <?php
        session_start();
        $id=$_SESSION['user_id'];
        $new_item_id=uniqid();
        $new_item_name=$_SESSION['new_item_name'];
        $new_item_price=$_SESSION['new_item_price'];
        $new_item_detail=$_SESSION['new_item_detail'];
        $new_item_pic=$_SESSION['new_item_pic'];

        try{
            $conn = "host=ec2-34-194-73-236.compute-1.amazonaws.com dbname=dl7k5i97ich1l user=vmarkahoqhzaaa password=432da7483948509568cbe6ee852bc3f3ae993e318323455efd363d5866623b17";
            $link = pg_connect($conn);
            if (!$link) {
                die('接続失敗です。'.pg_last_error());
            } 
            // PostgreSQLに対する処理
            $sql="INSERT INTO item (item_id,item_name,item_pic,item_detail,item_price,item_seller,item_status) VALUES('$new_item_id','$new_item_name','$new_item_pic','$new_item_detail',$new_item_price,'$id',true)";
            $result = pg_query($link,$sql);
            print "<META http-equiv=Refresh content=1;URL=home.php>";
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
    ?>
</body>