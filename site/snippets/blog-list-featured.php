<section>
  <article class="g-columns blog-list-featured">
    <a href="<?= $article->url() ?>" tabindex="-1">
     <div class="g-columns u-left">

        <div class="blog-thumb">
          <?php if($article->image('thumb.png')): ?>
            <img srcset="<?= $article->url() ?>/thumb.png 490w,
                         <?= thumb($article->image('thumb.png'), ['width' => 245, 'quality' => 90))->url(] ?> 245w"
                    sizes="90vw,
                      (min-width: 40em) 12rem"
                    src="<?= thumb($article->image('thumb.png'), ['width' => 245, 'quality' => 90))->url(] ?>"
                    alt="">
          <?php else: ?>
            <img srcset="<?= $article->url() ?>/thumb.jpg 490w,
                         <?= thumb($article->image('thumb.jpg'), ['width' => 245, 'quality' => 90))->url(] ?> 245w"
                    sizes="90vw,
                     (min-width: 40em) 12rem"
                    src="<?= thumb($article->image('thumb.jpg'), ['width' => 245, 'quality' => 90))->url(] ?>"
                    alt="">
          <?php endif ?>
        </div>

        <div class="blog-caption">
           <h2><?= html($article->title()) ?></h2>
           <ul class="attribution inline-list">
              <?php $author = $pages->find('about/people/' . $article->author()) ?>
              <li><?= $article->date()->toDate('m.d.Y') ?></li>
              <li> <?= $author->title() ?></li>
           </ul>

         <?php if($article->description() != ''): ?>

           <p><?= $article->description() ?></p>
           <a href="<?= $article->url() ?>" class="button">Read article</a>

         <?php else: ?>

           <p><?= $article->text()->chopper(150) ?></p>
           <a href="<?= $article->url() ?>" class="button">Read more</a>

         <?php endif ?>

        </div>
     </div>
   </a>
  </article>
</section>
