<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <link rel="stylesheet" href="style.css">

  <style>
    .hidden {
      display: none;
    }
  </style>

  <title>Document</title>
</head>

<body>
  <div class="Form">
    <form action="receive.php" method="post" class="mt-4">
      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>氏名
        </p>
        <input type="text" name="my_name" class="Form-Item-Input" placeholder="例）山田 太郎">
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>かな名
        </p>
        <input type="text" class="Form-Item-Input" name="kana_name" placeholder="例）ヤマダ タロウ">
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>メールアドレス
        </p>
        <input type="email" class="Form-Item-Input" name="email" placeholder="例）you@example.com">
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>電話番号
        </p>
        <input type="number" class="Form-Item-Input" name="tel" placeholder="例）000-0000-0000">
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>郵便番号
        </p>
        <input type="text" class="Form-Item-Input" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" placeholder="例）123-4567">
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>住所
        </p>
        <input type="text" class="Form-Item-Input" name="addr11" size="60" placeholder="例）東京都渋谷区渋谷1-1-1　第一ビル101号室">
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>生年月日
        </p>
        <div class="form-select-wrap">
          <select class="birthday-year" name="year">
          </select>
          /
          <select class="birthday-month" name="month">
          </select>
          /
          <select class="birthday-day" name="day">
          </select>
        </div>
      </div>




      <div class="Form-Item">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">必須</span>性別
        </p>
        <input type="text" class="Form-Item-Input" name="gender" placeholder="例）男">
      </div>




      <div class="Form-Item my-div his1">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴1
        </p>
        <input type="text" class="Form-Item-Input" name="history_1" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year1"></select>/
          <select class="start-month" name="start_month1"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year1">
          </select>
          /
          <select class="end-month" name="end_month1">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his2 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴2
        </p>
        <input type="text" class="Form-Item-Input" name="history_2" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year2"></select>/
          <select class="start-month" name="start_month2"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year2">
          </select>
          /
          <select class="end-month" name="end_month2">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his3 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴3
        </p>
        <input type="text" class="Form-Item-Input" name="history_3" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year3"></select>/
          <select class="start-month" name="start_month3"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year3">
          </select>
          /
          <select class="end-month" name="end_month3">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his4 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴4
        </p>
        <input type="text" class="Form-Item-Input" name="history_4" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year" 4></select>/
          <select class="start-month" name="start_month4"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year4">
          </select>
          /
          <select class="end-month" name="end_month4">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his5 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴5
        </p>
        <input type="text" class="Form-Item-Input" name="history_5" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year5"></select>/
          <select class="start-month" name="start_month5"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year5">
          </select>
          /
          <select class="end-month" name="end_month5">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his6 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴6
        </p>
        <input type="text" class="Form-Item-Input" name="history_6" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year6"></select>/
          <select class="start-month" name="start_month6"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year6">
          </select>
          /
          <select class="end-month" name="end_month6">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his7 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴7
        </p>
        <input type="text" class="Form-Item-Input" name="history_7" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year7"></select>/
          <select class="start-month" name="start_month7"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year7">
          </select>
          /
          <select class="end-month" name="end_month7">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his8 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴8
        </p>
        <input type="text" class="Form-Item-Input" name="history_8" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year8"></select>/
          <select class="start-month" name="start_month8"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year8">
          </select>
          /
          <select class="end-month" name="end_month8">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his9 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴9
        </p>
        <input type="text" class="Form-Item-Input" name="history_9" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year9"></select>/
          <select class="start-month" name="start_month9"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year9">
          </select>
          /
          <select class="end-month" name="end_month9">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his10 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴10
        </p>
        <input type="text" class="Form-Item-Input" name="history_10" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year10"></select>/
          <select class="start-month" name="start_month10"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year10">
          </select>
          /
          <select class="end-month" name="end_month10">
          </select>
        </div>
      </div>

      <div class="Form-Item my-div his11 hidden">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>学歴・職歴11
        </p>
        <input type="text" class="Form-Item-Input" name="history_11" placeholder="例）私立第一高校　普通科">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">開始</span>
          <select class="start-year" name="start_year11"></select>/
          <select class="start-month" name="start_month11"></select>
        </div>
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">終了</span>
          <select class="end-year" name="end_year11">
          </select>
          /
          <select class="end-month" name="end_month11">
          </select>
        </div>
      </div>

      <div id="error-message" style="display: none; color: red;">これ以上学歴・職歴を追加できません</div>

      <div class="Form-Item">
        <p class="add-btn">
          <button type="button" onclick="addDiv()" class="Form-Add">学歴・職歴追加</button>
          <button type="button" onclick="removeDiv()" class="Form-Add">削除</button>
        </p>
      </div>



      <div class="Form-Item li-div li1">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>資格1
        </p>
        <input type="text" class="Form-Item-Input" name="license_1" placeholder="例）第一種普通自動車運転免許">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">取得</span>
          <select class="start-year" name="start_year12"></select>/
          <select class="start-month" name="start_month12"></select>
        </div>
      </div>

      <div class="Form-Item hidden li-div li2">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>資格2
        </p>
        <input type="text" class="Form-Item-Input" name="license_2" placeholder="例）第一種普通自動車運転免許">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">取得</span>
          <select class="start-year" name="start_year13"></select>/
          <select class="start-month" name="start_month13"></select>
        </div>
      </div>

      <div class="Form-Item hidden li-div li3">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>資格3
        </p>
        <input type="text" class="Form-Item-Input" name="license_3" placeholder="例）第一種普通自動車運転免許">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">取得</span>
          <select class="start-year" name="start_year14"></select>/
          <select class="start-month" name="start_month14"></select>
        </div>
      </div>

      <div class="Form-Item hidden li-div li4">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>資格4
        </p>
        <input type="text" class="Form-Item-Input" name="license_4" placeholder="例）第一種普通自動車運転免許">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">取得</span>
          <select class="start-year" name="start_year15"></select>/
          <select class="start-month" name="start_month15"></select>
        </div>
      </div>

      <div class="Form-Item hidden li-div li5">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>資格5
        </p>
        <input type="text" class="Form-Item-Input" name="license_5" placeholder="例）第一種普通自動車運転免許">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">取得</span>
          <select class="start-year" name="start_year16"></select>/
          <select class="start-month" name="start_month16"></select>
        </div>
      </div>

      <div class="Form-Item hidden li-div li6">
        <p class="Form-Item-Label">
          <span class="Form-Item-Label-Required">任意</span>資格6
        </p>
        <input type="text" class="Form-Item-Input" name="license_6" placeholder="例）第一種普通自動車運転免許">
        <div class="form-select-wrap">
          <span class="Form-Item-Label-Required">取得</span>
          <select class="start-year" name="start_year17"></select>/
          <select class="start-month" name="start_month17"></select>
        </div>
      </div>


      <div class="Form-Item">
        <p class="add-btn">
          <button type="button" onclick="addDivLi()" class="Form-Add">資格追加</button>
          <button type="button" onclick="removeDivLi()" class="Form-Add">削除</button>
        </p>
      </div>




      <div class="Form-Item">
        <input type="submit" class="Form-Item-Input" value="データの送信">
      </div>
    </form>
  </div>
  <script src="main.js"></script>
</body>

</html>