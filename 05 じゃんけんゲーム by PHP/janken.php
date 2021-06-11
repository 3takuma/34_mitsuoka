<link rel="stylesheet" href="style.css">

<?php

echo "<body>";


// １，タイトル
echo "<h1>リロード de じゃんけん <span class='small'>by PHP</span></h1>";


// ２，じゃんけん部分
echo "<div class='flex-wrap'>"; //フレックスボックス親要素

// ２−１，手の準備
$player01 = '<h2>あなた</h2>';
$lock01 = '<img src="img/ishi01.png" class="img01">';
$paper01 = '<img src="img/kami01.png" class="img01">';
$scissors01 = '<img src="img/hasami01.jpeg" class="img01">';

$player02 = '<h2>あいて</h2>';
$lock02 = '<img src="img/ishi02.png" class="img01">';
$paper02 = '<img src="img/kami02.png" class="img01">';
$scissors02 = '<img src="img/hasami02.jpeg" class="img01">';

// ２−２，自分の手（ランダム）
echo "<div>"; //フレックスボックス子要素
$anata =mt_rand(1,3);
if($anata === 1) {
  echo $player01;
  echo $lock01;
} elseif ($anata === 2) {
  echo $player01;
  echo $paper01;
  }
  else {
  echo $player01;
  echo $scissors01;
  }
echo "</div>";

// ２−３，相手の手（ランダム）
echo "<div>"; //フレックスボックス子要素
$aite =mt_rand(1,3);
if($aite === 1) {
  echo $player02;
  echo $lock02;
} elseif ($aite === 2) {
  echo $player02;
  echo $paper02;
} else {
  echo $player02;
  echo $scissors02;
}
echo "</div>";

echo "</div>"; //フレックスボックス親要素〆


// ３，結果部分

// ３−１，結果の準備
$win = '<img src="img/kachi.png" class="img02">';
$draw = '<img src="img/hikiwake.png" class="img02">';
$lose = '<img src="img/make.png" class="img02">';

// ３−２，結果判定（自分と相手の組み合わせ）
if ($anata === 1 && $aite === 1) {echo $draw;}
if ($anata === 1 && $aite === 2) {echo $lose;}
if ($anata === 1 && $aite === 3) {echo $win;}
if ($anata === 2 && $aite === 1) {echo $win;}
if ($anata === 2 && $aite === 2) {echo $draw;}
if ($anata === 2 && $aite === 3) {echo $lose;}
if ($anata === 3 && $aite === 1) {echo $lose;}
if ($anata === 3 && $aite === 2) {echo $win;}
if ($anata === 3 && $aite === 3) {echo $draw;}


echo "</body>";

?>
