<?php


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
<div style="width:600px">
  <canvas id="myChart"></canvas>
</div>

<script>
    const data = {
  labels: [
    '農業体験',
    '漁業体験 ',
    '教育実習体験',
    '伝統工芸体験',
    '特産品市場就業体験',
  ],
  datasets: [{
    label: 'My First Dataset',a
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};
</script>
</body>
</html>