<?php if($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img src="<?= $image->url() ?>"  style="max-height: 500px; max-width: 750px;" alt="featured image"/>
  </figure>
<?php endif ?>
