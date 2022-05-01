<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>チェック</title>

</header>
<body>
    <?php
        $id=$_GET['login_id'];
        $pass=$_GET['login_pass'];
        $hash_pass=md5($pass);
        $existence=0;

        try{
            $conn = "host=ec2-34-194-73-236.compute-1.amazonaws.com dbname=dl7k5i97ich1l user=vmarkahoqhzaaa password=432da7483948509568cbe6ee852bc3f3ae993e318323455efd363d5866623b17";
            $link = pg_connect($conn);
            if (!$link) {
                die('接続失敗です。'.pg_last_error());
            } 
            // PostgreSQLに対する処理
            $result=pg_query("SELECT id, password FROM client WHERE id = '$id'");
            while($row=pg_fetch_array($result)){
                $existence+=1;
                $user_id=$row['id'];
                $user_pass=$row['password'];

            }
            if($existence >0){
                if(strcmp($id,$user_id) ==0){
                    if(strcmp($hash_pass,$user_pass) == 0){
                        echo "succcess";
                        session_start();
                        $_SESSION['user_id']=$id;
                        $_SESSION['user_pass']=$hash_pass;
                        print "<META http-equiv=Refresh content=1;URL=account.php>";
                    }else{
                        print "<META http-equiv=Refresh content=1;URL=login.php>";
                    }
                }
            }else{
                print "<META http-equiv=Refresh content=1;URL=login.php>";
            }
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
    ?>
</body>