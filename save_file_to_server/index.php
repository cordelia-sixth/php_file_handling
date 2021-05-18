<?php
require_once('function.php');

// アップロード先のディレクトリ
// $uploaddir = 'uploads/';

// // 保存先のパス
// $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//  echo "File is valid, and was successfully uploaded.";
// }
?>

<html>
  <head>
    <title>File upload</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      <input name="upload_file" type="file" />
      <p><input type="submit" value="送信" /></p>
    </form>
  </body>
</html>
