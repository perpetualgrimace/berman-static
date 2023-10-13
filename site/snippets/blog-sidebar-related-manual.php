<!-- NOTE: Currently not used by the template -->
<div class="container related u-margin-top-off">
  <h3 class="delta">Related:</h3>
  <ul class="vertical-list u-margin-top-off-children">

    <?php foreach($articles as $articlePath):
      $article = $pages->find($articlePath);
    ?>
      <li class="milli">
        <a href="<?= $article->url() ?>"><?php e($article->series() != '', $article->series() . ': ') ?><?= $article->title() ?></a>
      </li>
    <?php endforeach ?>

  </ul>
</div>
