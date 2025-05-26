<?php
//weight3.php
$height = (float)$_POST['height'];
$weight = (float)$_POST['weight'];

if (!((0 < $height) && ($height < 3))) {
    echo "身長を正しく入力してください";
    exit;
}
if (($weight < 30) || (200 < $weight)) {
    echo "体重を正しく入力してください";
    exit;
}

$goal_weight = $height * $height * 22;

$difference = abs($goal_weight - $weight);
