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

            $id  = $_POST["id"];
            $name= $_POST["name"];
            $name_letter = $_POST["name_letter"];
            $address_num = $_POST["address_num"];
            $address = $_POST["address"];
            $phone_num = $_POST["phone_num"];
            $mail = $_POST["mail"]; 

            $id  = htmlspecialchars($id,ENT_QUOTES,'UTF-8');
            $name= htmlspecialchars($name,ENT_QUOTES,'UTF-8');
            $name_letter = htmlspecialchars($name_letter,ENT_QUOTES,'UTF-8');
            $address_num = htmlspecialchars($address_num,ENT_QUOTES,'UTF-8');
            $address = htmlspecialchars($address,ENT_QUOTES,'UTF-8');
            $phone_num = htmlspecialchars($phone_num,ENT_QUOTES,'UTF-8');
            $mail = htmlspecialchars($mail,ENT_QUOTES,'UTF-8');

            $dsn = 'mysql:dbname=kadai1;host=localhost;charset=utf8';
            $user = 'root';
            $dbh = new PDO($dsn,$user);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "insert into personal_data(id,name,name_letter,address_num,address,phone_num,email_address)values(?, ?)";
            $stmt = $dbh->prepare($sql);
            $data[] = $name;
            $data[] = $name_letter;
            $data[] = $address_num;
            $data[] = $address;
            $data[] = $phone_num;
            $stmt->execute($data);

            $dbh = null;

            print $name;
            print "さんを追加しました。<br />";
        }

        catch(Exception $e){
            print "ただいま障害により大変ご迷惑をお掛けしております。";
            exit();
        }



    ?>

    </body>
</html>