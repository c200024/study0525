<?php
  session_start();

  $name = $_POST['name'];
  $hobby = $_POST['hobby'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['hobby'] = $_POST['hobby'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
</head>
<body>
<h1>確認画面</h1>
<p>あなたの名前は<?php echo $name;?>さんです。</p>
<p>趣味は<?php echo $hobby;?>です。</p>
<p>こちらの情報でよろしいですか？</p>
<form action="complete.php" method="POST">
<input type="submit" value="はい"  class="btn-submit">
</form>
</body>
</html>
