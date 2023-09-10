// セレクトボックスのNodeListを取得
let userBirthdayYear = document.querySelectorAll('.birthday-year');
let userBirthdayMonth = document.querySelectorAll('.birthday-month');
let userBirthdayDay = document.querySelectorAll('.birthday-day');

/**
 * selectのoptionタグを生成するための関数
 * @param {Element} elem 変更したいselectの要素
 * @param {Number} val 表示される文字と値の数値
 */
function createOptionForElements(elem, val) {
  elem.forEach(function (select) {
    let option = document.createElement('option');
    option.text = val;
    option.value = val;
    select.appendChild(option);
  });
}

// 年の生成
for (let i = 1960; i <= 2020; i++) {
  createOptionForElements(userBirthdayYear, i);
}
// 月の生成
for (let i = 1; i <= 12; i++) {
  createOptionForElements(userBirthdayMonth, i);
}
// 日の生成
for (let i = 1; i <= 31; i++) {
  createOptionForElements(userBirthdayDay, i);
}

// デフォルトで最初の日を選択状態にする
userBirthdayDay.forEach(function (select) {
  select.querySelector('option').selected = true;
});

/**
 * 日付を変更する関数
 */
function changeTheDay() {
  // 各日付セレクトボックスの要素を削除
  userBirthdayDay.forEach(function (select) {
    select.innerHTML = '';
  });

  // 選択された年月の最終日を計算
  let lastDayOfTheMonth = new Date(userBirthdayYear[0].value, userBirthdayMonth[0].value, 0).getDate();

  // 選択された年月の日付を生成
  createOptionForElements(userBirthdayDay, i);
}

// 年と月の変更イベントに対してchangeTheDay関数をリスナーとして追加
userBirthdayYear.forEach(function (select) {
  select.addEventListener('change', function () {
    changeTheDay();
  });
});

userBirthdayMonth.forEach(function (select) {
  select.addEventListener('change', function () {
    changeTheDay();
  });
});




// 学歴の開始年月と終了年月を変更する関数
function changeEducationDates() {
  // 選択された開始年月と終了年月を取得
  let startYear = document.querySelector('.start-year').value;
  let startMonth = document.querySelector('.start-month').value;
  let endYear = document.querySelector('.end-year').value;
  let endMonth = document.querySelector('.end-month').value;

  // 選択された開始年月と終了年月を表示
  console.log('開始年月:', startYear, startMonth);
  console.log('終了年月:', endYear, endMonth);
}

// 開始年や終了年、開始月や終了月が変更されたらchangeEducationDatesを呼び出す
document.querySelectorAll('.start-year, .start-month, .end-year, .end-month').forEach(function (select) {
  select.addEventListener('change', function () {
    changeEducationDates();
  });
});

// 開始年の生成
for (let i = 1960; i <= 2020; i++) {
  createOptionForElements(document.querySelectorAll('.start-year'), i);
}

// 終了年の生成
for (let i = 1960; i <= 2020; i++) {
  createOptionForElements(document.querySelectorAll('.end-year'), i);
}

// 開始月と終了月の生成
for (let i = 1; i <= 12; i++) {
  createOptionForElements(document.querySelectorAll('.start-month, .end-month'), i);
}



var currentIndex = 1; // 現在表示中の要素のインデックス

  function addDiv() {
    var divElements = document.querySelectorAll('.my-div');
    if (currentIndex < divElements.length) {
      divElements[currentIndex].classList.remove('hidden');
      currentIndex++;

      if (currentIndex === divElements.length) {
        document.getElementById('error-message').style.display = 'block';
      }
    }
  }

  function removeDiv() {
    var divElements = document.querySelectorAll('.my-div');
    if (currentIndex > 0) {
      currentIndex--;
      divElements[currentIndex].classList.add('hidden');
      document.getElementById('error-message').style.display = 'none';
    }
  }

  var currentIndex = 1; // 現在表示中の要素のインデックス

  function addDivLi() {
    var divElements = document.querySelectorAll('.li-div');
    if (currentIndex < divElements.length) {
      divElements[currentIndex].classList.remove('hidden');
      currentIndex++;

      if (currentIndex === divElements.length) {
        document.getElementById('error-message').style.display = 'block';
      }
    }
  }

  function removeDivLi() {
    var divElements = document.querySelectorAll('.li-div');
    if (currentIndex > 0) {
      currentIndex--;
      divElements[currentIndex].classList.add('hidden');
      document.getElementById('error-message').style.display = 'none';
    }
  }