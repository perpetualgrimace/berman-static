<section class="g-columns">
   <div class="g-columns u-left">

   <article class="col-70pc">
      <?= kirbytext($page->text()) ?>

      <div class="in-article">

        <div class="grid-2-1 u-margin-top">
          <?= kirbytext($page->col1()) ?>
        </div>

        <div class="grid-2-1 u-margin-top">
          <?= kirbytext($page->col2()) ?>
        </div>

      </div>

      <?= kirbytext($page->logos()) ?>

      <div class="in-article">

        <?php foreach ($page->images() as $logo): ?>
          <div class="grid-4-3-2">
            <img src="<?= $logo->url() ?>" alt="" />
          </div>
        <?php endforeach; ?>

      </div>

      <?= kirbytext($page->branding_services()) ?>

      <div class="in-article">

        <div class="grid-2-1 u-margin-top">
         <?= kirbytext($page->col3()) ?>
        </div>

        <div class="grid-2-1 u-margin-top">
         <?= kirbytext($page->col4()) ?>
        </div>

      </div>

   </article>

   <?php $siblings = $page->siblings($self = false); ?>

   <?php if($siblings != ''): ?>

   <aside class="col-25pc">
      <div class="container series u-margin-top-off">

         <h3><?= $page->sidebarTitle() ?></h3>

         <ul class="vertical-list u-margin-top-off-children">

          <?php foreach($siblings as $sibling): ?>
            <li>
              <a class="milli" href="<?= $sibling->url() ?>"><?= $sibling->title() ?></a>
            </li>
          <?php endforeach ?>

         </ul>

      </div>
   </aside>

 <?php endif ?>

   </div>
</section>
