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
        $phone_num = $_POST["phone_num"];
        $mail = $_POST["mail"];

        $id = htmlspecialchars($id, ENT_QUOTES,"utf-8");
        $name = htmlspecialchars($name, ENT_QUOTES,"utf-8");
        $name_letter = htmlspecialchars($name_letter, ENT_QUOTES,"utf-8");
        $address_num = htmlspecialchars($address_num, ENT_QUOTES,"utf-8");
        $address = htmlspecialchars($address, ENT_QUOTES,"utf-8");
        $phone_num = htmlspecialchars($phone_num, ENT_QUOTES,"utf-8");
        $mail = htmlspecialchars($mail, ENT_QUOTES,"utf-8");

        if($name == '') {
            print '名前が入力されていません。<br />';
        } else {
            print '名前';
            print $name;
            print '<br />';
        }

        if($name_letter == '') {
            print 'ふりがなが入力されていません。<br />';
        } else {
            print 'ふりがな';
            print $name_letter;
            print '<br />';
        }

        if($address_num == '') {
            print '郵便番号が入力されていません。<br />';
        } else {
            print '郵便番号';
            print $address_num;
            print '<br />';
        }

        if($address == '') {
            print '住所が入力されていません。<br />';
        } else {
            print '住所';
            print $address;
            print '<br />';
        }

        if($phone_num == '') {
            print '電話番号が入力されていません。<br />';
        } else {
            print '電話番号';
            print $phone_num;
            print '<br />';
        }

        if($mail == '') {
            print 'Eメールアドレスが入力されていません。<br />';
        } else {
            print 'Eメールアドレス';
            print $mail;
            print '<br />';
        }


        if($id == ''||$name==''||$name_letter==''||$address_num==''||$address==''||$phone_num==''||$mail=='') {
            print '<form>';
            print '<button type="button" onclick="history.back()">戻る</button>';
            print '</form>';
        } else {
         print '<form method="post" action="data_add_done.php">' ;
         print '<input type="hidden" name="id" value="$id">';
         print '<input type="hidden" name="name" value="$name">';
         print '<input type="hidden" name="name_letter" value="$name_letter">';
         print '<input type="hidden" name="address_num" value="$address_num">';
         print '<input type="hidden" name="address" value="$address">';
         print '<input type="hidden" name="phone_num" value="$phone_num">';
         print '<input type="hidden" name="mail" value="$mail">';
         print '<br />';
         print '<input type="button" onclick="history.back()" value="戻る">';
         print '<input type="submit" value="OK"?>';
        }
        ?>
    
    </body>
</html>