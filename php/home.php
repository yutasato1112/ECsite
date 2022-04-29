<!DOCTYPE html>
<html lang="ja">
<header>
    <meta name="description" content="ECサイト">
    <link rel="icon" type="image/svg+xml" href="../picture/general/shopping_favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/css_home.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title>ホーム</title>

</header>
<body>
    <script src="js/bootstrap.min.js"></script>

    <?php
        $dsn = 'pgsql:dbname=dl7k5i97ich1l host=ec2-34-194-73-236.compute-1.amazonaws.com port=5432';
        $user = 'vmarkahoqhzaaa';
        $password = '432da7483948509568cbe6ee852bc3f3ae993e318323455efd363d5866623b17';
        
        try{
            $dbh = new PDO($dsn, $user, $password);
            print "ok";
        }catch (PDOException $e){
            print('Error:'.$e->getMessage());
            die();
        }
    ?>

</body>