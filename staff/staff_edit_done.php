<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ろくまる農園</title>
    </head>
    <body>
    <?php

try{
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['pass'];
    
    $staff_code = $_POST['code'];
    $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, "utf-8");
    $staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, "utf-8");

    $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
    $user = "root";
    $password = "";
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "insert into mst_staff(name,password)values(?, ?)";
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_name;
    $data[] = $staff_pass;
    $data[] = $staff_code;
    $stmt->execute($data);

    $dbh = null;

    print $staff_name;
    print "さんを追加しました。<br />";
}
catch(Exception $e){
    print "ただいま障害により大変ご迷惑をお掛けしております。";
    exit();
}
        
?>

<a href="staff_list.php">戻る</a>
        
        スタッフ追加<br />
        <br />
        <form method="POST" action="staff_add_check.php">
            スタッフ名を入力してください<br />
            <input type="text" name="name" style="width:200px;"><br />
            パスワードを入力してください。<br />
            <input type="password" name="pass" style="width:100px;"><br />
            もう一度パスワードを入力してください。<br />
            <input type="password" name="pass2" style="width:100px;"><br />
            <br />
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">OK</button>
        </form>
    </body>
</html>