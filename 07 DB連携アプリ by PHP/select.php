<?php
//1.  DB接続します xxxにDB名を入れます
try {
    // xamppの人は'')　左は何も入れない
    //mamppの人 $pdo = new PDO('mysql:dbname=xxx;charset=utf8;host=localhost', 'root', 'root');
    $pdo = new PDO('mysql:dbname=a_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM a_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<p>";

        $view .= "　";
        $view .= '<a href="detail.php?id='.$result["id"].'">';
        $view .= $result["indate"];
        $view .= '</a>';
        $view .= "　";
        $view .= $result["name"]."（".$result["email"]."％）";
        // 隙間を空ける
        $view .= ' ';
        // 削除用のaタグ
        $view .= '<a href="delete.php?id='.$result["id"].'">';
        $view .= "[ 削除 ]";
        $view .= '</a>';

        $view .= "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>データ一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  div {padding: 10px; font-size:30px;}
  .navbar-brand {font-size: 30px; font-weight: bold; text-align: center;}
</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">😊 会話記録（新しい人との会話を登録する。）</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
