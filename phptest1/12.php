<?php
require_once 'functions2.php';

$pdo = sample_db(); // 接続関数名は中身に合わせて変更してください

$affiliation = $_POST['affiliation'];
$name = $_POST['name'];
$age = (int)$_POST['age'];

$sql = "INSERT INTO members (affiliation, name, age) VALUES (:affiliation, :name, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':affiliation', $affiliation, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->execute();

echo "登録が完了しました。<a href='form.html'>戻る</a>";
