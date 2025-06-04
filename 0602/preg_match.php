<?php
$str = "12345678";
$rtn = preg_match("/\A\d{7}\z/u", $str);
preg_match("/\d{7}/u", $str, $matche);
$str2 = "1234567あ";
preg_match("/\d{7}/u", $str2, $matche2);
