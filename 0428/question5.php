<?php
# 1. 配列 ['赤', '青', '黄'] を作成し、foreach で各要素を1行ずつ表示してください。
$colors = ['赤', '青', '黄'];
foreach ($colors as $color) {
  echo $color . PHP_EOL;
}
# 2. ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100] の配列から「フルーツ名：価格円」と表示してください。
$fruits = ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100];
foreach ($fruits as $fruit => $price) {
  echo "フルーツ名：$fruit 価格：$price 円" . PHP_EOL;
}
# 3. [100, 200, 300] という配列の合計値を求めて表示してください（foreach を使って）。
$numbers = [100, 200, 300];
$sum = 0;
foreach ($numbers as $number) {
  $sum += $number;
}
echo "合計値は $sum です。" . PHP_EOL;
# 4. ['PHP', 'JavaScript', 'Python'] という配列に foreach を使って、インデックス番号と一緒に表示してください（例: 0: PHP）。
$languages = ['PHP', 'JavaScript', 'Python'];
foreach ($languages as $index => $language) {
  echo "$index: $language" . PHP_EOL;
}
# 5. ['A', 'B', 'C'] の各要素に「さん」を付けて表示してください（例: Aさん）。
$names = ['A', 'B', 'C'];
foreach ($names as $name) {
  echo $name . "さん" . PHP_EOL;
}
# 6. [10, 20, 30] の各値を2倍にして出力してください。
$numbers = [10, 20, 30];
foreach ($numbers as $number) {
  echo $number * 2 . PHP_EOL;
}
