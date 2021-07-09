<?php

// ---------- 今回の追加分 ログイン状態を確認しているところ --------------
session_start();

// sesssionチェック
if (
  !isset($_SESSION['chk_ssid']) ||
  $_SESSION["chk_ssid"] != session_id()
) {
    echo "login Error";
    exit();
}
// ----------------------------------------------------------------


// Step1. GETを使って送られたidを取得する。

//この場合は、$_GET['id']を使う。
$id = $_GET['id'];


// Step.2 「insert.php」からDBに接続するコード一式を持ってくる。

//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
//mamppの方は
//$pdo = new PDO('mysql:dbname=xxx;charset=utf8;host=localhost', 'root', 'root');

try {
    $pdo = new PDO('mysql:dbname=a_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


// Step.3 IDをもとに、SQLを準備する。

//３．SELECT * FROM xxx WHERE id=:id
$sql = "SELECT * FROM a_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //idは数値なのでINT
$status = $stmt->execute();


// Step４．データ出力

$view=""; //受け取るための変数を事前に作ります。
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    //１データのみ抽出の場合はwhileループで取り出さない(一個しかデータが返ってこないので一レコード取得する)
    $row = $stmt->fetch();
}

?>



<!-- HTMLを書いていく（貼り付け） -->

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
    .input {margin: 0 40%}
    .navbar-brand {font-size: 30px; font-weight: bold; text-align: center;}
  </style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">＞記録一覧（戻る）</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからupdate.phpにデータを送ります -->
<form method="post" action="update.php">
  <div class="jumbotron">
    <fieldset>
    <legend>😙 [話したこと] と [知ってる度] を更新しよう🎵</legend>
      <label>話した人　　<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
      <label>知ってる度　<input type="text" name="email" value="<?=$row["email"]?>"></label><br>
      <label>話したこと　<textArea name="naiyou" rows="4" cols="40"><?=$row["naiyou"]?></textArea>
      </label><br>
      <input type='hidden' name="id" value="<?=$row["id"]?>">
      <input type="submit" value=" 更新する！" class="input">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>
