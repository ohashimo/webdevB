<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');

echo "{$name}さんのコメント：{$comment}";
