<section class="g-columns">
   <div class="g-columns u-left">

   <article class="col-70pc">
      <?= kirbytext($page->text()) ?>
   </article>

   <?php $children = $page->children(); ?>

   <aside class="col-25pc">

      <?php snippet('about-person-sidebar') ?>

   </aside>

   </div>
</section>
