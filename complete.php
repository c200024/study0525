<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>完了画面</title>
</head>
<body>
<h1>完了画面</h1>
<p>こんにちは<?php print ($_SESSION['name']); ?>さん</p>
<p>趣味は<?php print ($_SESSION['hobby']);?>ですね</p>

<p>確認完了いたしました。</p>
<p></p>
</body>
</html>
