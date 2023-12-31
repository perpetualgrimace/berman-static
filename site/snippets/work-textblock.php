<?php if(isset($section)): ?>
<article class="work-textblock-section section g-columns">
  <div class="g-col g-8 u-margins-auto">

    <!-- optional subhead -->
    <?php if($section->subhead() != ''): ?>
      <h2 class="display"><?= $section->subhead() ?></h2>
    <?php endif ?>

    <!-- main text -->
    <div class="delta">
      <?= $section->text()->kirbytext() ?>
    </div>

  </div>
</article>
<?php endif ?>