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
<<<<<<< HEAD
    $id = $_POST['id'];
    $name= $_POST["name"];
    $name_letter = $_POST["name_letter"];
    $address_num = $_POST["address_num"];
    $address = $_POST["address"];
    $phone_num = $_POST["phone_num"];
    $mail = $_POST["mail"];
=======
    $id = $_GET['id'];

>>>>>>> 04189b936e2892c264ecd9bf4244eded174fef5a
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT name FROM mst_staff WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$id;
    $data[]=$name;
    $data[]=$name_letter;
    $data[]=$address_num;
    $data[]=$phone_num;
    $data[]=$mail;

    $stmt->execute($data);

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
<<<<<<< HEAD
    
    $id  = $rec["id"];
    $name= $rec["name"];
    $name_letter = $rec["name_letter"];
    $address_num = $rec["address_num"];
    $address = $rec["address"];
    $phone_num = $rec["phone_num"];
    $mail = $rec["mail"];
=======
    $name=$rec['name'];
>>>>>>> 04189b936e2892c264ecd9bf4244eded174fef5a

    $dbh=null;

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}

?>

スタッフ修正<br />
<br />
スタッフコード<br />
<?php print $id; ?>
<br />
<br />
<form method="post" action="staff_edit_check.php">
<input type="hidden" name="code" value="<?php print $id; ?>">
スタッフ名<br />

<input type="text" name="name" style="width:100px"><br />
パスワードを入力してください。<br />
<input type="password" name="pass" style="width:100px"><br />
パスワードをもう一度入力してください。<br />
<input type="password" name="pass2" style="width:100px"><br />
<br />
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>

    </body>
</html>