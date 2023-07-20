// function set2fig(num) {
//   // 桁数が1桁だったら先頭に0を加えて2桁に調整する
//   var ret;
//   if (num < 10) {
//     ret = "0" + num;
//   } else {
//     ret = num;
//   }
//   return ret;
// }

// function showClock2() {
//   var nowTime = new Date();
//   var nowHour = set2fig(nowTime.getHours());
//   var nowMin = set2fig(nowTime.getMinutes());
//   var nowSec = set2fig(nowTime.getSeconds());
//   var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。";
//   document.getElementById("RealtimeClockArea").innerHTML = msg;
// }
// setInterval(showClock2, 1000);

// var startButton; // startボタン
// var stopButton; // stopボタン
// var resetButton; // resetボタン
// var showTime; // 表示時間

// var timer; // setinterval, clearTimeoutで使用
// var startTime; // 開始時間
// var elapsedTime = 0; // 経過時間
// var holdTime = 0; // 一時停止用に時間を保持

// document.addEventListener("DOMContentLoaded", function () {
//   startButton = document.getElementById("start");
//   stopButton = document.getElementById("stop");
//   resetButton = document.getElementById("reset");
//   showTime = document.getElementById("time");
// });

// // スタートボタン押下時
// function start() {
//   // 開始時間を現在の時刻に設定
//   startTime = Date.now();

//   // 時間計測
//   measureTime();

//   startButton.disabled = true;
//   stopButton.disabled = false;
//   resetButton.disabled = false;
// }

// // ストップボタン押下時
// function stop() {
//   // タイマー停止
//   clearInterval(timer);

//   // 停止時間を保持
//   holdTime += Date.now() - startTime;

//   startButton.disabled = false;
//   stopButton.disabled = true;
//   resetButton.disabled = false;
// }

// // リセットボタン押下時
// function reset() {
//   // タイマー停止
//   clearInterval(timer);

//   // 変数、表示を初期化
//   elapsedTime = 0;
//   holdTime = 0;
//   showTime.textContent = "00:00.000";

//   startButton.disabled = false;
//   stopButton.disabled = true;
//   resetButton.disabled = true;
// }

// // 時間を計測（再帰関数）
// function measureTime() {
//   // タイマーを設定
//   timer = setTimeout(function () {
//     // 経過時間を設定し、画面へ表示
//     elapsedTime = Date.now() - startTime + holdTime;
//     showTime.textContent = new Date(elapsedTime).toISOString().slice(14, 23);

//     // 関数を呼び出し、時間計測を継続する
//     measureTime();
//   }, 10);
// }
