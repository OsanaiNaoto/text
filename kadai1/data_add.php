<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>個人情報</title>
    </head>

    <body>
        個人情報登録<br />
        <br />
        <form method="POST" action="data_add_check.php">
            情報を入力してください。<br />
            ID:<input type="text" name="id" style="width: 125px"><br />
            名前:<input type="text" name="name" style="width: 125px"><br />
            ふりがな:<input type="text" name="name_letter" style="width: 125px"><br />
            郵便番号:<input type="text" name="address_num" style="width: 125px"><br />
            住所:<input type="text" name="address" style="width: 200px"><br />
            電話番号:<input type="text" name="num" style="width: 125px"><br />
            Eメールアドレス:<input type="text" name="mail" style="width: 125px"><br />

            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">OK</button>

        </form>
    </body>
</html>