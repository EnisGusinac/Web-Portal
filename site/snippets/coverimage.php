<?php if($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img src="<?= $image->url() ?>"  style="max-height: 450px; max-width: 755px;" alt="featured image is not available"/>
  </figure>
<?php endif ?>
