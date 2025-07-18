<form action="" method="post">
  <p>生絵：<input type="text" name="name" /></p>
  <p>子麺都：<textarea name="comment" rows="4" cols="40"></textarea></p>
  <p>
    <input type="submit" value="投稿" />
  </p>
</form>

<hr />

<?php if (!empty($posts)): ?>
  <?php foreach ($posts as $post): ?>
    <div style="margin-bottom: 20px">
      <p>
        <strong><?= str2html($post['name']) ?></strong> さん
      </p>
      <p><?= nl2br(str2html($post['comment'])) ?></p>
      <p>
        <small><?= str2html($post['created_at']) ?></small>
      </p>
    </div>
  <?php endforeach; ?>
<?php else: ?>
  <p>投稿はまだありません。</p>
<?php endif; ?>