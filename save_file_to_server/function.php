<?php

$contents;
if (is_uploaded_file($_FILES['upload_file']['tmp_name'])) {
  echo $_FILES['upload_file']['name'] . " のアップロードに成功しました". "<br>";

  // ファイルの内容を取得
  $contents = file_get_contents($_FILES['upload_file']['tmp_name']);

  // 配列に1文字ずつ格納
  $chars = str_split($contents);

  // asciiの場合、10進数の文字コードに変換する
  $codes;
  foreach ($chars as $char) {
    $codes[] = ord($char);
  }

  $bins;
  foreach ($codes as $code) {
    $bins[] = decbin($code);
  }

  foreach ($bins as $index => $value) {
    $bins[$index] = $value . "\n";
  }
}
