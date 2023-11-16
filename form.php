

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
th{
    border: 1px solid;
}

</style>
</head>

<body>

    <form action="result.php" method="post">
        <table>
            <tr><th>お名前</th><th><input type="text" name="name" value=""></th></tr>
            <tr><th>性別</th>
            <th><input type="radio" name="gender" value="女">女
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="どちらでもない">どちらでもない
        </th></tr>

            <tr><th>お住まいの都道府県</th><th><input type="text" name="prefecture" value=""></th></tr>
            <tr><th>興味のある体験<br>※複数選択可</th>
                <th><label><input type="checkbox" name="experience[]" value="農業体験">農業体験</label>
            <label><input type="checkbox" name="experience[]" value="漁業体験">漁業体験</label>
            <label><input type="checkbox" name="experience[]" value="教育実習体験">教育実習体験</label>
            <label><input type="checkbox" name="experience[]" value="伝統工芸体験">伝統工芸体験</label>
            <label><input type="checkbox" name="experience[]" value="特産品市場就業体験">特産品市場就業体験</label>
        </th></tr>
            <tr><th>本サービスをどこで知りましたか</th>
            <th><label><input type="checkbox" name="kikkake[]" value="webサイト">webサイト</label>
            <label><input type="checkbox" name="kikkake[]" value="Google検索">Google検索</label>
            <label><input type="checkbox" name="kikkake[]" value="知人">知人</label>
            <label><input type="checkbox" name="kikkake[]" value="口コミサイト">口コミサイト</label>
            <label><input type="checkbox" name="kikkake[]" value="その他">その他</label>
        </th></tr>
            </table>
            <input type="submit" value="送信" >
    </form>
</body>

</html>