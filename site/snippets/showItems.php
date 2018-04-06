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

if (isset($limit)) $projects = $projects->limit($limit);

?>

<?php foreach ($projects as $project): ?>

    <div class="col-md-6">
        <div class="media">
            <div class="media-left">
                <a href="<?= $project->url() ?>"><img class="media-object"
                                                      src="assets/img/cat-mobi-sm4.jpg"
                                                      alt="Generic placeholder image"></a>
            </div>
            <div class="media-body">
                <span class="tag purple">Mobile</span>

                <h3 class="media-heading"><a href="<?= $project->url() ?>"
                                             target="_self"><?= $project->title()->html() ?></a></h3>
                <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a
                            href="#">Eric joan</a></span>

                <div class="media_social">
                    <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                    <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

