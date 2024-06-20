<?php
$name = $_POST["name"];
$email = $_POST["email"];
$seibetu = $_POST["seibetu"];
$work = $_POST["work"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];


$c =",";
$str = $name.$c.$email.$c.$seibetu.$c.$work.$c.$q3.$c.$q4.$c.$q5.$c.$q6;
// ↑これでカンマ区切りの文字列に。CSV

$file = fopen("data.csv","a");
// fopenの引数は2つ入れる。ファイル名と書き込み形式。
// "a"は追加書き込みAdd。"r"は読み込みRead。
fwrite($file,$str."\n");
//fwriteを使用して、fileにカンマ区切りで1データ1行ごとに書き込み。1データ1レコードで書き込み。
fclose($file);
//fcloseがないと、fileが閉じないので、file～fcloseの3行までが1セット

header("Location: index.php");
//header("Location: index.php);の部分の注意
//Locationの頭文字は大文字、：のあとは半角スペースを入れないと
//エラーの原因になるので注意。この書き方で送信後に最初のページにリロード
exit;

?>