<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    div {padding: 10px; font-size:30px;}
    legend {font-size: 40px; font-weight:bold;}
    fieldset {margin: 0 30px;}
    label {margin: 5px 0;}
    /* input {margin: 10px 0;} */
    .input {margin: 0 50%}
    .navbar-brand {font-size: 30px; font-weight: bold; text-align: center;}
  </style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="select.php">入力画面</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="jumbotron">
    <fieldset>
      <legend>📚良かった本</legend>
      <label>書名：　　<input type="text" name="name"></label><br>
      <label>著者：　　<input type="text" name="author"></label><br>
      <label>一言感想：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
      <input type="submit" value="送信" class="input">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
