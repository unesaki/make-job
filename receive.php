<?php

require 'vendor/autoload.php';

// 受け取ったデータを変数に格納
$my_name = isset($_POST['my_name']) ? $_POST['my_name'] : '';
$kana_name = isset($_POST['kana_name']) ? $_POST['kana_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$zip11 = isset($_POST['zip11']) ? $_POST['zip11'] : '';
$addr11 = isset($_POST['addr11']) ? $_POST['addr11'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$day = isset($_POST['day']) ? $_POST['day'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$history_1 = isset($_POST['history_1']) ? $_POST['history_1'] : '';
$history_2 = isset($_POST['history_2']) ? $_POST['history_2'] : '';
$history_3 = isset($_POST['history_3']) ? $_POST['history_3'] : '';
$history_4 = isset($_POST['history_4']) ? $_POST['history_4'] : '';
$history_5 = isset($_POST['history_5']) ? $_POST['history_5'] : '';
$history_6 = isset($_POST['history_6']) ? $_POST['history_6'] : '';
$history_7 = isset($_POST['history_7']) ? $_POST['history_7'] : '';
$history_8 = isset($_POST['history_8']) ? $_POST['history_8'] : '';
$history_9 = isset($_POST['history_9']) ? $_POST['history_9'] : '';
$history_10 = isset($_POST['history_10']) ? $_POST['history_10'] : '';
$history_11 = isset($_POST['history_11']) ? $_POST['history_11'] : '';
$start_year1 = isset($_POST['start_year1']) ? $_POST['start_year1'] : '';
$start_year2 = isset($_POST['start_year2']) ? $_POST['start_year2'] : '';
$start_year3 = isset($_POST['start_year3']) ? $_POST['start_year3'] : '';
$start_year4 = isset($_POST['start_year4']) ? $_POST['start_year4'] : '';
$start_year5 = isset($_POST['start_year5']) ? $_POST['start_year5'] : '';
$start_year6 = isset($_POST['start_year6']) ? $_POST['start_year6'] : '';
$start_year7 = isset($_POST['start_year7']) ? $_POST['start_year7'] : '';
$start_year8 = isset($_POST['start_year8']) ? $_POST['start_year8'] : '';
$start_year9 = isset($_POST['start_year9']) ? $_POST['start_year9'] : '';
$start_year10 = isset($_POST['start_year10']) ? $_POST['start_year10'] : '';
$start_year11 = isset($_POST['start_year11']) ? $_POST['start_year11'] : '';
$start_month1 = isset($_POST['start_month1']) ? $_POST['start_month1'] : '';
$start_month2 = isset($_POST['start_month2']) ? $_POST['start_month2'] : '';
$start_month3 = isset($_POST['start_month3']) ? $_POST['start_month3'] : '';
$start_month4 = isset($_POST['start_month4']) ? $_POST['start_month4'] : '';
$start_month5 = isset($_POST['start_month5']) ? $_POST['start_month5'] : '';
$start_month6 = isset($_POST['start_month6']) ? $_POST['start_month6'] : '';
$start_month7 = isset($_POST['start_month7']) ? $_POST['start_month7'] : '';
$start_month8 = isset($_POST['start_month8']) ? $_POST['start_month8'] : '';
$start_month9 = isset($_POST['start_month9']) ? $_POST['start_month9'] : '';
$start_month10 = isset($_POST['start_month10']) ? $_POST['start_month10'] : '';
$start_month11 = isset($_POST['start_month11']) ? $_POST['start_month11'] : '';
$end_year1 = isset($_POST['end_year1']) ? $_POST['end_year1'] : '';
$end_year2 = isset($_POST['end_year2']) ? $_POST['end_year2'] : '';
$end_year3 = isset($_POST['end_year3']) ? $_POST['end_year3'] : '';
$end_year4 = isset($_POST['end_year4']) ? $_POST['end_year4'] : '';
$end_year5 = isset($_POST['end_year5']) ? $_POST['end_year5'] : '';
$end_year6 = isset($_POST['end_year6']) ? $_POST['end_year6'] : '';
$end_year7 = isset($_POST['end_year7']) ? $_POST['end_year7'] : '';
$end_year8 = isset($_POST['end_year8']) ? $_POST['end_year8'] : '';
$end_year9 = isset($_POST['end_year9']) ? $_POST['end_year9'] : '';
$end_year10 = isset($_POST['end_year10']) ? $_POST['end_year10'] : '';
$end_year11 = isset($_POST['end_year11']) ? $_POST['end_year11'] : '';
$end_month1 = isset($_POST['end_month1']) ? $_POST['end_month1'] : '';
$end_month2 = isset($_POST['end_month2']) ? $_POST['end_month2'] : '';
$end_month3 = isset($_POST['end_month3']) ? $_POST['end_month3'] : '';
$end_month4 = isset($_POST['end_month4']) ? $_POST['end_month4'] : '';
$end_month5 = isset($_POST['end_month5']) ? $_POST['end_month5'] : '';
$end_month6 = isset($_POST['end_month6']) ? $_POST['end_month6'] : '';
$end_month7 = isset($_POST['end_month7']) ? $_POST['end_month7'] : '';
$end_month8 = isset($_POST['end_month8']) ? $_POST['end_month8'] : '';
$end_month9 = isset($_POST['end_month9']) ? $_POST['end_month9'] : '';
$end_month10 = isset($_POST['end_month10']) ? $_POST['end_month10'] : '';
$end_month11 = isset($_POST['end_month11']) ? $_POST['end_month11'] : '';
$history_11 = isset($_POST['history_11']) ? $_POST['history_11'] : '';
$license1 = isset($_POST['license1']) ? $_POST['license1'] : '';
$license2 = isset($_POST['license2']) ? $_POST['license2'] : '';
$license3 = isset($_POST['license3']) ? $_POST['license3'] : '';
$license4 = isset($_POST['license4']) ? $_POST['license4'] : '';
$license5 = isset($_POST['license5']) ? $_POST['license5'] : '';
$license6 = isset($_POST['license6']) ? $_POST['license6'] : '';
$start_year12 = isset($_POST['start_year12']) ? $_POST['start_year12'] : '';
$start_year13 = isset($_POST['start_year13']) ? $_POST['start_year13'] : '';
$start_year14 = isset($_POST['start_year14']) ? $_POST['start_year14'] : '';
$start_year15 = isset($_POST['start_year15']) ? $_POST['start_year15'] : '';
$start_year16 = isset($_POST['start_year16']) ? $_POST['start_year16'] : '';
$start_year17 = isset($_POST['start_year17']) ? $_POST['start_year17'] : '';
$start_month12 = isset($_POST['start_month12']) ? $_POST['start_month12'] : '';
$start_month13 = isset($_POST['start_month13']) ? $_POST['start_month13'] : '';
$start_month14 = isset($_POST['start_month14']) ? $_POST['start_month14'] : '';
$start_month15 = isset($_POST['start_month15']) ? $_POST['start_month15'] : '';
$start_month16 = isset($_POST['start_month16']) ? $_POST['start_month16'] : '';
$start_month17 = isset($_POST['start_month17']) ? $_POST['start_month17'] : '';



$temp_file = 'job.xlsx';
$gen_file = 're_job.xlsx';

$input_contents = array(
  "C9" => $my_name,
  "C6" => $kana_name,
  "H21" => $email,
  "I16" => $tel,
  "D19" => $zip11,
  "B21" => $addr11,
  "B14" => $year . "年" . $month . "月" . $day . "日",
  "F15" => $gender,

  "B38" => $start_year1,
  "C38" => $start_month1,
  "D38" => $history_1 . "入",

  "B41" => $end_year1,
  "C41" => $end_month1,
  "D41" => $history_1 . "卒",

  "B44" => $start_year2,
  "C44" => $start_month2,
  "D44" => $history_2 . "入",

  "B47" => $end_year2,
  "C47" => $end_month2,
  "D47" => $history_2 . "卒",

  "B50" => $start_year3,
  "C50" => $start_month3,
  "D50" => $history_3 . "入",

  "B53" => $end_year3,
  "C53" => $end_month3,
  "D53" => $history_3 . "卒",

  "B56" => $start_year4,
  "C56" => $start_month4,
  "D56" => $history_4 . "入",

  "B59" => $end_year4,
  "C59" => $end_month4,
  "D59" => $history_4 . "卒",

  "B62" => $start_year5,
  "C62" => $start_month5,
  "D62" => $history_5 . "入",

  "B65" => $end_year5,
  "C65" => $end_month5,
  "D65" => $history_5 . "卒",

  "B68" => $start_year6,
  "C68" => $start_month6,
  "D68" => $history_6 . "入",

  "B71" => $end_year6,
  "C71" => $end_month6,
  "D71" => $history_6 . "卒",

  "B74" => $start_year7,
  "C74" => $start_month7,
  "D74" => $history_7 . "入",

  "B77" => $end_year7,
  "C77" => $end_month7,
  "D77" => $history_7 . "卒",

  "B80" => $start_year8,
  "C80" => $start_month8,
  "D80" => $history_8 . "入",

  "B83" => $end_year8,
  "C83" => $end_month8,
  "D83" => $history_8 . "卒",

  "L5" => $start_year9,
  "M5" => $start_month9,
  "N5" => $history_9 . "入",

  "L8" => $end_year9,
  "M8" => $end_month9,
  "N8" => $history_9 . "卒",

  "L11" => $start_year10,
  "M11" => $start_month10,
  "N11" => $history_10 . "入",

  "L14" => $end_year10,
  "M14" => $end_month10,
  "N14" => $history_10 . "卒",

  "L16" => $start_year11,
  "M16" => $start_month11,
  "N16" => $history_11 . "入",

  "L19" => $end_year11,
  "M19" => $end_month11,
  "N19" => $history_11 . "卒",

  "L25" => $start_year12,
  "M25" => $start_month12,
  "N25" => $license_1,

  "L28" => $end_year13,
  "M28" => $start_month13,
  "N28" => $license_2,

  "L31" => $start_year14,
  "M31" => $start_month14,
  "N31" => $license_3,

  "L34" => $start_year15,
  "M34" => $start_month15,
  "N34" => $license_4,

  "L37" => $start_year16,
  "M37" => $start_month16,
  "N37" => $license_5,

  "L40" => $start_year17,
  "M40" => $start_month17,
  "N40" => $license_6,
);

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($temp_file);
$worksheet = $spreadsheet->getActiveSheet();

// 書き込み
foreach ($input_contents as $cell => $content) {
  $worksheet->getCell($cell)->setValue($content);
}

// 別名で保存
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($gen_file);

echo "データが正常に更新されました。";

?>
