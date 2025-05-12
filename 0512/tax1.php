<?php
//関数の定義
//定義しただけれは、実行されない
//価格をパラメータに入力したら税込か下記を表示(echo)する関数
function tax($price)
{
  echo $price * 1.1;
}

//関数の実行
//関数名に続けて()をつけて、中にパラメータの値を入れる
tax(100);
//tax(200);

//変数の定義(戻り値・返り血がある関数)
function tax2($price)
{
  return $price * 1.1;
}
//関数の実行
tax2(100);
$sample_price = tax2('文字列');
echo '消費税込みの値段:' . $sample_price . '円';
