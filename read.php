<?php
//ファイルを開いて内容を読み込む
// $data = file_get_contents('data.csv');
// echo nl2br($data);

$data = file_get_contents('data.csv');

$row = explode("\n", $data);

echo "<table border ='1'>";
echo "<tr><th>名前</th><th>email</th><th>性別</th><th>職業</th><th>頻度</th><th>国内or海外</th><th>交通手段</th><th>目的</th></tr>";

foreach($row as $row){
    $cells = explode(',',$row);
    echo "<tr>";
    foreach ($cells as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
    
}

// echo "</table>";

// $data = file_get_contents('data.csv');
// echo nl2br($data);

// $rows = explode("\n", trim($data));

// echo "<table border='1'>";
// // 各行を処理

// foreach ($rows as $row) {
//     $cells = explode(',', $row);
//     echo "<tr>";
//     foreach ($cells as $cell) {
//         echo "<td>" . htmlspecialchars($cell) . "</td>";
//     }
//     echo "</tr>";
// }
?>
