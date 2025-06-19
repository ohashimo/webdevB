<?php
$users = [
  ['name' => 'Ken', 'age' => 20, 'score' => 85],
  ['name' => 'Yui', 'age' => 22, 'score' => 78],
  ['name' => 'Taro', 'age' => 19, 'score' => 55]
];

foreach ($users as $user) {

  if ($user['score'] >= 80) {
    $judge = "優";
  } elseif ($user['score'] >= 60) {
    $judge = "良";
  } else {
    $judge = "可";
  }

  echo "名前: {$user['name']}, 年齢: {$user['age']}歳, スコア: {$user['score']}, 判定: {$judge}<br>";
}
