// myhome.js

// スタートボタン押下時
function start() {
  // 開始時間を現在の時刻に設定
  startTime = Date.now();

  // 時間計測
  measureTime();

  startButton.disabled = true;
  stopButton.disabled = false;
  resetButton.disabled = false;
  completeButton.disabled = true;
}

// ストップボタン押下時
function stop() {
  // タイマー停止
  clearInterval(timer);

  // 停止時間を保持
  holdTime += Date.now() - startTime;

  startButton.disabled = false;
  stopButton.disabled = true;
  resetButton.disabled = false;
  completeButton.disabled = false;
}

// リセットボタン押下時
function reset() {
  // タイマー停止
  clearInterval(timer);

  // 変数、表示を初期化
  elapsedTime = 0;
  holdTime = 0;
  showTime.textContent = "00:00.000";

  startButton.disabled = false;
  stopButton.disabled = true;
  resetButton.disabled = true;
  completeButton.disabled = true;
}

// 実績ボタン押下時
function complete() {
  // 実績時間に経過時間を加算
  achievementTime += elapsedTime;

  // 実績時間を表示
  var achievementDate = new Date(achievementTime);
  var achievementMinutes = achievementDate.getUTCMinutes();
  var achievementSeconds = achievementDate.getUTCSeconds();
  var achievementMilliseconds = achievementDate.getUTCMilliseconds();
  showAchievementTime.textContent = `${achievementMinutes.toString().padStart(2, '0')}:${achievementSeconds.toString().padStart(2, '0')}.${achievementMilliseconds.toString().padStart(3, '0')}`;

  // リセット処理
  reset();
}

// 時間を計測（再帰関数）
function measureTime() {
  // タイマーを設定
  timer = setTimeout(function () {
    // 経過時間を設定し、画面へ表示
    elapsedTime = Date.now() - startTime + holdTime;
    var date = new Date(elapsedTime);
    var minutes = date.getUTCMinutes();
    var seconds = date.getUTCSeconds();
    var milliseconds = date.getUTCMilliseconds();
    showTime.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}.${milliseconds.toString().padStart(3, '0')}`;

    // 関数を呼び出し、時間計測を継続する
    measureTime();
  }, 10);
}
