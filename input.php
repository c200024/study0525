<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>入力画面</title>
</head>
<body>
<h1>入力画面</h1>
<p>次の画面にデータを渡します。</p>

<form action="confirm.php" method="POST">
<label>お名前</label>
<input type="text" name="name" value="" placeholder="山田 太郎">
<label>趣味</label>
<input type="text" name="hobby" value="" placeholder="音楽">
<input type="submit" value="確認"  class="btn-submit">
</form>
</body>
</html>
