<?php if($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img src="<?= $image->url() ?>" alt="featured image"/>
  </figure>
<?php endif ?>
