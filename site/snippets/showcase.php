<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($projects as $project): ?>

<!--    <li class="showcase-item column">-->
<!--        <a href="--><?//= $project->url() ?><!--" class="showcase-link">-->
<!--          --><?php //if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
<!--            <img src="--><?//= $thumb->url() ?><!--" alt="Thumbnail for --><?//= $project->title()->html() ?><!--" class="showcase-image" />-->
<!--          --><?php //endif ?>
<!--          <div class="showcase-caption">-->
<!--            <h3 class="showcase-title">--><?//= $project->title()->html() ?><!--</h3>-->
<!--          </div>-->
<!--        </a>-->
<!--    </li>-->


      <div class="row">
          <div class="col-md-6">
              <div class="top_article_img">
                  <a href="<?= $project->url() ?>">
                      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(300, 300); ?>
                          <img src="<?= $thumb->url() ?>"  class="img-responsive" alt="Thumbnail for <?= $project->title()->html() ?>"/>
                      <?php endif ?>
              </div>
              <!----top_article_img------>
          </div>
          <div class="col-md-6">
              <span class="tag purple">Projects</span>

              <div class="category_article_title">
                  <h2><a href="<?= $project->url() ?>" target="_self"> <?= $project->title()->html() ?> </a></h2>
              </div>
              <!----category_article_title------>
              <div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a
                          href="#">Eric joan</a></div>
              <!----category_article_date------>
              <div class="category_article_content">
                  Collaboratively administrate empowered markets via plug-and-play
                  networks. Dynamically procrastinate
                  B2C users after installed base benefits. Dramatically visualize customer
                  directed convergence
                  without revolutionary ROI.
              </div>
              <!----category_article_content------>
              <div class="media_social">
                  <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                  <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
              </div>
              <!----media_social------>
          </div>
      </div>

  <?php endforeach ?>

</ul>