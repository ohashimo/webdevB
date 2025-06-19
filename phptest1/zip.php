<?php
$zip1 = htmlspecialchars($_POST['zip1'], ENT_QUOTES, 'UTF-8');
$zip2 = htmlspecialchars($_POST['zip2'], ENT_QUOTES, 'UTF-8');
$zip = $zip1 . '-' . $zip2;

if (preg_match('/^\d{3}-\d{4}$/', $zip)) {
  echo $zip . 'は正しい郵便番号です。';
} else {
  echo $zip . 'は正しい形式ではありません。';
}
