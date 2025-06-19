<?php
$score = rand(0, 100);
?>

スコア: <?= $score ?><br>

<?php if ($score >= 80): ?>
  優
<?php elseif ($score >= 60): ?>
  良
<?php else: ?>
  可
<?php endif; ?>