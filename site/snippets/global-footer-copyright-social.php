<div class="footer-copyright-text milli"><?= $site->copyright()->kirbytext() ?></div>

<h3 class="u-screenreader">Follow Berman:</h3>

<ul class="footer-social-list u-margin-top inline-list">
  <?php

  // define social media icons in an array
  $social_media = ['twitter', 'facebook', 'instagram'];

  foreach($social_media as $social):
    $snippet = 'global-nav-' . $social;

  ?>

    <li class="footer-social-item">
      <a class="footer-social-link footer-social-link-<?= $social ?>" href="http://<?= $social ?>.com/<?= $pages->find('contact')->$social() ?>">
        <?php snippet($snippet) ?><span class="u-screenreader"><?= $social ?></span>
      </a>
    </li>

  <?php endforeach ?>
</ul>
