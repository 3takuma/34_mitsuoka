/*
■jQuery基本
セレクタ（対象）→メソッド（処理）→イベント（いつ）
*/


// １．自分の手(選んだ手)を表示する

$("#btn1").on("click", function () { //クリック時
  $("#you").text("✊🏻"); //表示(置き換え)
});
$("#btn2").on("click", function () { //クリック時
  $("#you").text("✌🏻"); //表示(置き換え)
});
$("#btn3").on("click", function () { //クリック時
  $("#you").text("🖐🏻"); //表示(置き換え)
});


// ２．相手の手(ランダム)と結果(３パターン)を表示する

// ①ボタン１（グー）
  // １．クリック時
  $("#btn1").on("click", function () {
  // ２．相手の手(ランダム)と結果
    // ２−１．乱数生成
    const num = Math.ceil(Math.random() * 3);
    // ２−２．表示の関数を設定
    let aite = "";
    let kekka = "";
    // ２−３．乱数を手と結果に変換＋それらを関数に割当
    if (num == 1) {
      aite = "✊🏻"; kekka = "😐";}
    else if (num == 2) {
      aite = "✌🏻"; kekka = "✨😆✨";}
    else if (num == 3) {
      aite = "🖐🏻"; kekka = "　😭💦";}
  // ３．表示(置き換え)
  $("#enemy").text(aite); //aite(=関数)を表示
  $("#result").text(kekka).fadeOut(0).fadeIn(2600); //kekka(=関数)を表示＋アニメーション
  $("h3").show(0); //おまけ：h3の文字を出す。
  });

// ②ボタン2（チョキ）
  $("#btn2").on("click", function () {
    const num = Math.ceil(Math.random() * 3);
    let aite = "";
    let kekka = "";
    if (num == 1) {
      aite = "✊🏻"; kekka = "　😭💦";}
    else if (num == 2) {
      aite = "✌🏻"; kekka = "😐";}
    else if (num == 3) {
      aite = "🖐🏻"; kekka = "✨😆✨";}
  $("#enemy").text(aite);
  $("#result").text(kekka);
  $("#result").text(kekka).fadeOut(0).fadeIn(2600);
  $("h3").show(0);
  });

// ③ボタン３（パー）
  $("#btn3").on("click", function () {
    const num = Math.ceil(Math.random() * 3);
    let aite = "";
    let kekka = "";
    if (num == 1) {
      aite = "✊🏻"; kekka = "✨😆✨";}
    else if (num == 2) {
      aite = "✌🏻"; kekka = "　😭💦";}
    else if (num == 3) {
      aite = "🖐🏻"; kekka = "😐";}
  $("#enemy").text(aite);
  $("#result").text(kekka);
  $("#result").text(kekka).fadeOut(0).fadeIn(2600);
  $("h3").show(0);
  });


// ---------- その他 ----------

$("h3").hide(0); //最初に文字を消しておく。
