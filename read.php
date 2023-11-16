<?php

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
// echo $fp;
//＊配列の準備
$txt = [];
// var_dump($txt);
while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp));
    // var_dump($txt);
}
fclose($fp);
//JSにデータを渡すため
$jsonData = json_encode($txt);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <style>
        td {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <div style="width:600px">
        <canvas id="myChart"></canvas>
    </div>
    <table>

        <?php
        //＊ここで表示処理
        for ($i = 0; $i < count($txt) - 1; $i++) {
            echo "<tr>";
            echo "<td>" . $txt[$i][0] . "</td>";
            echo "<td>" . $txt[$i][1] . "</td>";
            echo "<td>" . $txt[$i][2] . "</td>";
            echo "<td>" . $txt[$i][3] . "</td>";
            echo "<td>" . $txt[$i][4] . "</td>";
            echo "<td>" . $txt[$i][5] . "</td>";

            echo "</tr>";
        }


        ?>

        <script>
            const jsonData = <?php echo $jsonData; ?>;
// console.log(jsonData);

            //chartの設定
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        '農業体験',
                        '漁業体験 ',
                        '教育実習体験',
                        '伝統工芸体験',
                        '特産品市場就業体験',
                    ],
                    datasets: [{
                        // label: jsonData.map(item => item[4]),
                       
                        data: jsonData.map(item => parseFloat(item[4])),
                        
                        
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(153, 102, 255)',
                        ],
                        hoverOffset: 4
                    }]
                }
            });
        </script>
    </table>


</body>

</html>