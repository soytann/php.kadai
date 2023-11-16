<?php
$name = $_POST["name"];
$gender = filter_input(INPUT_POST,"gender");
$prefecture = $_POST["prefecture"];
$experience = implode('-',$_POST["experience"]);

$kikkake = implode('-',$_POST["kikkake"]);
$c = ",";

// echo $experience;
$str = date("Y/m/d H:i").$c.$name.$c.$gender.$c.$prefecture.$c.$experience.$c.$kikkake;
// echo $str;
$filename = "data/data.txt";
$fp = fopen($filename, "a");
fwrite($fp, $str."\n" );
fclose($fp);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
th{
    background-color: #ccc;
    border-radius: 5px;
}

</style>
</head>
<body>
アンケートのご協力ありがとうございます。
以下内容で送信しました。

<table>
<tr><th>お名前</th><th><?=$name;?></th></tr>
<tr><th>性別</th><th><?= htmlspecialchars($gender, ENT_QUOTES); ?></th></tr>
<tr><th>お住まいの都道府県</th><th><?=$prefecture?></th></tr>
<tr><th>興味のある体験</th><th><?php foreach($_POST['experience'] as $experience) {
    print(htmlspecialchars($experience, ENT_QUOTES) . ' ');}
?></th></tr>
<tr><th>本サービスをどこで知りましたか</th><th><?php foreach($_POST['kikkake'] as $kikkake) {
    print(htmlspecialchars($kikkake, ENT_QUOTES) . ' ');}
?></th></tr>
</table>

<script>




</script>


</body>
</html>