<?php
# connect1.php
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__ . '/inc/header.php';

try {
  $user = 'phpuser';
  $password = 'Irohani1682'; // 任意のパスワード
  $opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
  ];
  $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
  $sql = "INSERT INTO books(id,title,isbn,price,publish,author)
VALUES(NULL,:title,:isbn,:price,:publish,:author)";
  $stmt = $dbh->prepare($sql);
  // var_dump($stmt);
  $stmt->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
  $stmt->bindValue(':isbn', $_POST['isbn'], PDO::PARAM_STR);
  $stmt->bindValue(':price', $_POST['price'], PDO::PARAM_INT);
  $stmt->bindValue(':publish', $_POST['publish'], PDO::PARAM_STR);
  $stmt->bindValue(':author', $_POST['author'], PDO::PARAM_STR);

  $stmt->execute();
  echo 'データが追加されました。<br>';
  echo '<a href="./index.php">リストへ戻る</a><br>';
} catch (PDOException $e) {
  echo 'えらー！: ' . str2html($e->getMessage()) . '<br>';
  exit;
}
?>
<?php require_once __DIR__ . '/inc/footer.php'; ?>
