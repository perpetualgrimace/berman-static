<?php

if(isset($section)):

// First, check for screenshots field.
if ($section->screenshots() != '') {
  $images = $section->screenshots()->toStructure();
}
// Otherwise, just grab all the images.
else {
  $images = $section->images()->limit(8);
}

// get a count of the images
$imgCount = $images->count();
// assign the appropriate grid class
if ($imgCount < 5) {
  $gridClass = 'g-' . (12 / $images->count()); // divide 12 columns by number of images to display, up to 4
} else {
  $gridClass = 'g-3';
}

// background color
$primaryMedia = $section->primaryMedia();

if ($primaryMedia == '' || $primaryMedia == 'multiple') {
  $sectionBg = 'default-background';
} else {
  $sectionBg = strtolower($primaryMedia) . '-background';
}

$count = $images->count();

?>

<div class="work-screenshot-section section u-fullwidth <?= $sectionBg; /* if there are more than 2 screenshots, display them inline with horizontal overflow on smaller screens */ e($count > 2, ' work-screenshots-inline') ?>">
  <ul class="screenshot-list g-columns g-doubling u-margin-top-off-children">

    <?php foreach($images as $image):
      $imgUrl = $image->url();
    ?>

      <li class="screenshot-item g-col <?= $gridClass ?>">
        <?php if ($image->link() != ''): ?><a class="screenshot-link" href="<?= $image->link() ?>"><?php endif ?>
        <img class="screenshot-img" data-src="<?= $imgUrl ?>" alt="" draggable="false">
        <noscript>
          <img class="screenshot-img" src="<?= $imgUrl ?>" alt="" draggable="false">
        </noscript>
        <?php if ($image->link() != ''): ?></a><?php endif ?>
      </li>

    <?php endforeach ?>
  </ul>
</div>

<?php endif ?>
