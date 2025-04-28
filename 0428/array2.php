<?php
$name = [
  'sato' => '佐藤',
  'suzuki' => '鈴木',
  'tanaka' => '田中',
];

var_dump($name);

echo $name['takahaashi'];

foreach ($name as $value) {
  echo $value . "<br>";
}

foreach ($name as $key => $value) {
  echo $key . "は" . $value . "<br>";
}
