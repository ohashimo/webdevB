
<?php
# connect1.php
require_once './functions.php';

try {
  $dbh = db_open();
  $sql = 'SELECT title,author FROM books';
  $statement = $dbh->prepare($sql);

  while ($row = $statement->fetch()) {
    // データを取得
    echo "書籍名:" . str2html($row[0]) . "<br>";
    echo "著者名:" . str2html($row[1]) . "<br><br>";
  }
} catch (PDOException $e) {
  //例外をcatchしてエラーメッセージを表示
  //XSS対策のためにエスケープ
  echo 'error: ' . str2html($e->getMessage()) . '<br>';
  exit;
}
