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
        $user = 'root';
        $dbh = new PDO($dsn,$user);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT code,name FROM mst_staff WHERE 1';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $dbh = null;

        print'個人情報一覧<br /><br />';

        print'<form method="post" action="staff_edit.php">';
        while(true)
        {
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($rec==false) {
                break;
                }
                print'<input type="radio" name="staffcode" value="'.$rec['code'].'">';
                print $rec['name'];
                print'<br />';
                
        }
            print'<input type="submit" value="修正">';
            print'</form>';
    }

    catch(Exception $e)
    {
        print'ただいま障害により大変ご迷惑をお掛けしております。';
        print'<br />'.$e->getMessage();
        exit();
    }

    ?>

    </body>
</html>