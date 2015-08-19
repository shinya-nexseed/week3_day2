<?php
    echo "test";
?>

<!-- htmlのコード -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPサンプル</title>
</head>
<body>
  <h1>Hello World</h1>
  <?php
      echo "ほげほげ"; // これはプレーンな文字列をechoで吐き出しているだけ
      echo "<h2>こんにちは</h2>"; // echoの""の中に、htmlのタグごと書く
      $members = array("Rei","Yasu","Shogo","Yutaka","Yusuke","Reon","Takuya");

      $count = count($members);

      echo "<ul>";
      for ($i = 0; $i < $count; $i++) {
          echo "<li>";
          echo "MemberID:";
          echo $i;
          echo " ";
          // 配列(array)からひとつの要素を取り出すときは、配列[index番号]でアクセス
          echo $members[$i];
          echo "</li>";
      }
      echo "</ul>";
  ?>
</body>
</html>
