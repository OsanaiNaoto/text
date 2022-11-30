<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>個人情報</title>
    </head>

    <body>
    <?php
        
        $id  = $_POST["id"];
        $name= $_POST["name"];
        $name_letter = $_POST["name_letter"];
        $address_num = $_POST["address_num"];
        $address = $_POST["address"];
        $num = $_POST["num"];
        $mail = ["mail"];

        $id = htmlspecialchars($id, ENT_QUOTES,"utf-8");
        $name

        if($staff_name == '') {
            print 'スタッフ名が入力されていません。<br />';
        } else {
            print 'スタッフ名';
            print $staff_name;
            print '<br />';
        }

        if($staff_pass == '') {
            print 'パスワードが入力されていません。<br />';
        } 
        
        if($staff_pass != '') {
            print 'パスワードが一致しません。<br />';
        }

        if($staff_name==''||$staff_pass==''||$staff_pass != $staff_pass2) {
            print '<form>';
            print '<button type="button" onclick="history_back()">戻る</button>';
            print '</form>';
        } else {
         $staff_pass = md5($staff_pass);
         print '<form method="post" action="staff_add_done.php">' ;
         print '<input type="hidden" name="name" value=" .$staff_name">';
         print '<input type="hidden" name="pass" value=" .$staff_pass">';
         print '<br />';
         print '<input type="button" onclick="history.back()" value="戻る">';
         print '<input type="submit" value="OK"?>';
        }
        ?>
    
    </body>
</html>