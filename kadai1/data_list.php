<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>個人情報</title>
    </head>

    <body>

    <?php

    try
    {
        $dsn = 'mysql:dbname=kadai1;host=localhost;charset=utf8';
        $user = 'root'
        $dbh = new PDO($dsn,$user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql ='SELECT name FROM'
    }

    ?>

    </body>
</html>