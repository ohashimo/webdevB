<?php
$people[] = ['name' => 'さとう', 'blood' => 'A'];
$people[] = ['name' => 'すずき', 'blood' => 'B'];
$people[] = ['name' => 'たなか', 'blood' => 'O'];

var_dump($people);

echo $people[0]['blood'] . "<br>"; #A
echo $people[1]['blood'] . "<br>"; #B
echo $people[2]['blood'] . "<br>"; #O

// foreach ($people as $key => $value) {
//   echo '順番は' . $people_key . "<br>";
//   echo '名前は' . $value['name'] . "<br>";
//   echo '血液型は' . $value['blood'] . "<br>";
//   echo "<br>";
// };

$people2 = [
  ['name' => 'さとう', 'blood' => 'A'],
  ['name' => 'すずき', 'blood' => 'B'],
  ['name' => 'たなか', 'blood' => 'O']
];

foreach ($people2 as $key => $value) {
  echo '順番は' . $key . "<br>";
  echo '名前は' . $value['name'] . "<br>";
  echo '血液型は' . $value['blood'] . "<br>";
  echo "<br>";
};
