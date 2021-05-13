<?php

$file = fopen('test.txt', 'r')
  or die("Unable to open file!");

// 1行読み込む
// 読み込んだ後はファイルポインターが次の行に1つ移動する
echo fgets($file);
fclose($file);

echo "\n";

$file = fopen('test.txt', 'r') or die('Unable to open file!');

// EOFまで1行ずつ読み込み
while (!feof($file)) {
  echo fgets($file);
}
fclose($file);

echo "\n";

// テキストを1文字ずつ読み込む
$file = fopen("test.txt", "r");
while (!feof($file)) {
  echo fgetc($file);
}
fclose($file);


// ファイルに書き込む
// 存在しないファイルであれば作成する
$file = fopen("name.txt", "w") or die("error");
$txt = "Alice\n";
fwrite($file, $txt);
$txt = "Bob\n";
fwrite($file, $txt);
fclose($file);


// 既存のファイルに上書きする
// 1度fcloseで閉じたファイルを再度fopenしてから
// fwriteすると既存データを全て削除されて
// 新しいデータが上書きされる
$file = fopen("name.txt", "w");
$txt = "Chairle\n";
fwrite($file, $txt);
fclose($file);
