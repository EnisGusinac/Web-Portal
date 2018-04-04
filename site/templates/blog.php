<?php snippet('header') ?>

<!---->
<!--    <header class="wrap">-->
<!--        <h1>--><?//= $page->title()->html() ?><!--</h1>-->
<!---->
<!--        --><?php
//        // This page uses a separate controller to set variables, which can be used
//        // within this template file. This results in less logic in your templates,
//        // making them more readable. Learn more about controllers at:
//        // https://getkirby.com/docs/developer-guide/advanced/controllers
//        if ($pagination->page() == 1):
//            ?>
<!--            <div class="intro text">-->
<!--                --><?//= $page->text()->kirbytext() ?>
<!--            </div>-->
<!--        --><?php //endif ?>
<!---->
<!--        <hr/>-->
<!--    </header>-->
<!---->
<!--    <section class="wrap">-->
<!--        --><?php //if ($articles->count()): ?>
<!--            --><?php //foreach ($articles as $article): ?>
<!---->
<!--                <article class="article index">-->
<!---->
<!--                    <header class="article-header">-->
<!--                        <h2 class="article-title">-->
<!--                            <a href="--><?//= $article->url() ?><!--">--><?//= $article->title()->html() ?><!--</a>-->
<!--                        </h2>-->
<!---->
<!--                        <p class="article-date">--><?//= $article->date('F jS, Y') ?><!--</p>-->
<!--                    </header>-->
<!---->
<!--                    --><?php //snippet('coverimage', $article) ?>
<!---->
<!--                    <div class="text">-->
<!--                        <p>-->
<!--                            --><?//= $article->text()->kirbytext()->excerpt(50, 'words') ?>
<!--                            <a href="--><?//= $article->url() ?><!--" class="article-more">read more</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!---->
<!--                </article>-->
<!---->
<!--                <hr/>-->
<!---->
<!--            --><?php //endforeach ?>
<!--        --><?php //else: ?>
<!--            <p>This blog does not contain any articles yet.</p>-->
<!--        --><?php //endif ?>
<!--    </section>-->
    ----------------------------------------------------------------------------------------------------
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="entity_wrapper">
                        <?php if ($articles->count()): ?>
                            <?php foreach ($articles as $article): ?>

                                <div class="entity_title">
                                    <h1><a href="<?= $article->url() ?>"
                                           target="_self"><?= $article->title()->html() ?></a>
                                    </h1>
                                </div>
                                <!-- entity_title -->

                                <div class="entity_meta">
                                    <a href="#"><?= $article->date('F jS, Y') ?></a>, by: <a href="#">Eric joan</a>
                                </div>
                                <!-- entity_meta -->

                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                </div>
                                <!-- rating -->

                                <div class="entity_social">
                                    <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                                        <span class="share_ic">Shares</span>
                                    </a>
                                    <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                    <!--Twitter-->
                                    <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                    <!--Google +-->
                                    <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                                    <!--Linkedin-->
                                    <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                                    <!--Pinterest-->
                                    <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                    <span class="arrow">&raquo;</span>
                                </div>
                                <!-- entity_social -->

                                <div class="entity_thumb">

                                        <div class="img-responsive" >
                                            <?php snippet('coverimage', $article) ?>
                                        </div>

                                </div>

                                <!-- entity_thumb -->

                                <div class="entity_content">
                                    <p>
                                        <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                                    </p>
                                </div>
                                <!-- entity_content -->
                            <?php endforeach ?>
                        <?php else: ?>
                            <p>This blog does not contain any articles yet.</p>
                        <?php endif ?>
                    </div>
                    <!-- entity_wrapper -->

                    <div class="entity_wrapper">
                        <div class="entity_title">
                            <h1><a href="single.html" target="_self">Airbnb launches photo-centric app for iPads and
                                    Android tablets.</a>
                            </h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                        </div>
                        <!-- entity_meta -->

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <!-- rating -->

                        <div class="entity_social">
                            <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                                <span class="share_ic">Shares</span>
                            </a>
                            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                            <!--Linkedin-->
                            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                            <!--Pinterest-->
                            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            <span class="arrow">&raquo;</span>
                        </div>
                        <!-- entity_social -->

                        <div class="entity_content">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I
                                will give you a complete account of the system, and expound the actual teachings of the
                                great explorer of
                                the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                                pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rationally encounter
                                consequences that are extremely painful. </p>
                        </div>
                        <!-- entity_content -->

                    </div>
                    <!-- entity_wrapper -->

                    <div class="category_article_wrapper">
                        <div class="entity_title">
                            <h1><a href="single.html" target="_self">Airbnb launches photo-centric app for iPads and
                                    Android tablets.</a>
                            </h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                        </div>
                        <!-- entity_meta -->

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <!-- rating -->

                        <div class="entity_social">
                            <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                                <span class="share_ic">Shares</span>
                            </a>
                            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                            <!--Linkedin-->
                            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                            <!--Pinterest-->
                            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            <span class="arrow">&raquo;</span>
                        </div>
                        <!-- entity_social -->

                        <div class="row">
                            <div class="col-md-7">
                                <div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="img-responsive" src="assets/img/category_img9.jpg" alt="Chania">
                                        </div>
                                        <!--feature_news_item-->
                                        <div class="item">
                                            <img class="img-responsive" src="assets/img/category_img13.jpg"
                                                 alt="Chania">
                                        </div>
                                        <!--feature_news_item-->
                                        <div class="item">
                                            <img class="img-responsive" src="assets/img/category_img14.jpg"
                                                 alt="Chania">
                                        </div>
                                        <!--feature_news_item-->
                                        <div class="item">
                                            <img class="img-responsive" src="assets/img/category_img15.jpg"
                                                 alt="Chania">
                                        </div>
                                        <!--feature_news_item-->

                                        <!-- Left and right controls -->
                                        <div class="control-wrapper">
                                            <a class="left carousel-control" href="#featured-news-carousal"
                                               role="button" data-slide="prev">
                                                <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
                                            <a class="right carousel-control" href="#featured-news-carousal"
                                               role="button"
                                               data-slide="next"> <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <!--carousel-inner-->

                                </div>
                                <!--carousel-->

                            </div>
                            <!-- col-md-7 -->

                            <div class="col-md-5">
                                <div class="right_category_image">
                                    <img class="img-responsive" src="assets/img/category_img10.jpg" alt="feature-top">
                                </div>
                                <!--carousel-->

                                <div class="right_category_image">
                                    <img class="img-responsive" src="assets/img/category_img11.jpg" alt="feature-top">
                                </div>
                                <!--carousel-->

                            </div>
                            <!-- col-md-5 -->

                        </div>
                        <!-- row -->

                        <div class="entity_content">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I
                                will give you a complete account of the system, and expound the actual teachings of the
                                great explorer of
                                the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                                pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rationally encounter
                                consequences that are extremely painful. </p>
                        </div>
                        <!--entity_content-->

                    </div>
                    <!-- entity_wrapper -->

                    <div class="entity_wrapper">
                        <div class="entity_title">
                            <h1><a href="single.html" target="_self">Airbnb launches photo-centric app for iPads and
                                    Android tablets.</a>
                            </h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                        </div>
                        <!-- entity_meta -->

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <!-- rating -->

                        <div class="entity_social">
                            <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                                <span class="share_ic">Shares</span>
                            </a>
                            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                            <!--Linkedin-->
                            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                            <!--Pinterest-->
                            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            <span class="arrow">&raquo;</span>
                        </div>
                        <!-- entity_social -->

                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/h5Jni-vy_5M"></iframe>
                        </div>
                        <!-- entity_social -->

                        <div class="entity_content">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I
                                will give you a complete account of the system, and expound the actual teachings of the
                                great explorer of
                                the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                                pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rationally encounter
                                consequences that are extremely painful. </p>
                        </div>
                        <!--entity_content-->

                    </div>
                    <!-- entity_wrapper -->

                    <div class="entity_wrapper">
                        <div class="entity_title">
                            <h1><a href="single.html" target="_self">Airbnb launches photo-centric app for iPads and
                                    Android tablets.</a>
                            </h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                        </div>
                        <!-- entity_meta -->

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <!-- rating -->

                        <div class="entity_social">
                            <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                                <span class="share_ic">Shares</span>
                            </a>
                            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                            <!--Linkedin-->
                            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                            <!--Pinterest-->
                            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            <span class="arrow">&raquo;</span>
                        </div>
                        <!-- entity_social -->

                        <div class="entity_thumb">
                            <img class="img-responsive" src="assets/img/category_img12.jpg" alt="feature-top">
                        </div>
                        <!-- entity_thumb -->

                        <div class="entity_content">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I
                                will give you a complete account of the system, and expound the actual teachings of the
                                great explorer of
                                the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                                pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rationally encounter
                                consequences that are extremely painful. </p>
                        </div>
                        <!-- entity_content -->

                    </div>
                    <!-- entity_wrapper -->

                    <div class="entity_wrapper">
                        <div class="entity_title">
                            <h1><a href="single.html" target="_self">Airbnb launches photo-centric app for iPads and
                                    Android tablets.</a>
                            </h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                        </div>
                        <!-- entity_meta -->

                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </div>
                        <!-- rating -->

                        <div class="entity_social">
                            <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                                <span class="share_ic">Shares</span>
                            </a>
                            <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                            <!--Linkedin-->
                            <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                            <!--Pinterest-->
                            <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            <span class="arrow">&raquo;</span>
                        </div>
                        <!-- entity_social -->

                        <div class="entity_content">
                            <p class="blockquote">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I
                                will give you a complete account of the system, and expound the actual teachings.”
                            </p>

                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I
                                will give you a complete account of the system, and expound the actual teachings of the
                                great explorer of
                                the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                                pleasure itself,
                                because it is pleasure, but because those who do not know how to pursue pleasure
                                rationally encounter
                                consequences that are extremely painful.
                            </p>
                        </div>
                        <!-- entity_content -->

                    </div>
                    <!-- entity_wrapper -->

                    <nav aria-label="Page navigation" class="pagination_section">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next" class="active"> <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- navigation -->
                </div>
                <!-- col-md-8 -->

                <div class="col-md-4">
                    <div class="widget">
                        <div class="widget_title widget_black">
                            <h2><a href="#">Popular News</a></h2>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Canon launches photo centric 00214 Model supper
                                        shutter camera</a>
                                </h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a
                                            href="#">Eric joan</a></span>

                                <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                                    <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Samsung galaxy note are the supper mobile of
                                        all products.</a>
                                </h3>
                                <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a
                                            href="#">Eric joan</a></span>

                                <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                                    <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Apple launches photo-centric wrist watch for
                                        Android</a>
                                </h3>
                                <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a
                                            href="#">Eric joan</a></span>

                                <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                                    <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Kodak Hi-Speed shutter double shot camera
                                        comming soon</a>
                                </h3>
                                <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a
                                            href="#">Eric joan</a></span>

                                <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                                    <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
                                </div>
                            </div>
                        </div>
                        <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
                    </div>
                    <!-- Popular News -->

                    <div class="widget hidden-xs m30">
                        <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
                        <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
                        <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
                        <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
                    </div>
                    <!-- Advertisement -->

                    <div class="widget hidden-xs m30">
                        <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one">
                    </div>
                    <!-- Advertisement -->

                    <div class="widget reviews m30">
                        <div class="widget_title widget_black">
                            <h2><a href="#">Reviews</a></h2>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">DSLR is the most old camera at this time
                                        readmore about new
                                        products</a>
                                </h3>
                                <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self">Samsung
                                        is the best
                                        mobile in the android market.</a></h3> <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Apple launches photo-centric wrist watch for
                                        Android</a>
                                </h3>
                                <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Yasaki camera launches new generic hi-speed
                                        shutter camera.</a>
                                </h3>
                                <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
                        </div>
                        <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
                    </div>
                    <!-- Reviews News -->

                    <div class="widget hidden-xs m30">
                        <img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
                    </div>
                    <!-- Advertisement -->

                    <div class="widget m30">
                        <div class="widget_title widget_black">
                            <h2><a href="#">Most Commented</a></h2>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Yasaki camera launches new generic hi-speed
                                        shutter camera.</a>
                                </h3>

                                <div class="media_social">
                                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Samsung is the best mobile in the android
                                        market.</a>
                                </h3>

                                <div class="media_social">
                                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">Apple launches photo-centric wrist watch for
                                        Android</a>
                                </h3>

                                <div class="media_social">
                                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg"
                                                 alt="Generic placeholder image"></a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="single.html" target="_self">DSLR is the most old camera at this time
                                        readmore about new
                                        products</a>
                                </h3>

                                <div class="media_social">
                                    <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                                </div>
                            </div>
                        </div>
                        <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
                    </div>
                    <!-- Most Commented News -->

                    <div class="widget m30">
                        <div class="widget_title widget_black">
                            <h2><a href="#">Editor Corner</a></h2>
                        </div>
                        <div class="widget_body"><img class="img-responsive left" src="assets/img/editor.jpg"
                                                      alt="Generic placeholder image">

                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C
                                users after installed base benefits. Dramatically visualize customer directed
                                convergence without</p>

                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C
                                users after installed base benefits. Dramatically visualize customer directed
                                convergence without
                                revolutionary ROI.</p>
                            <button class="btn pink">Read more</button>
                        </div>
                    </div>
                    <!-- Editor News -->

                    <div class="widget hidden-xs m30">
                        <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
                        <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
                        <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
                        <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
                    </div>
                    <!--Advertisement -->

                    <div class="widget m30">
                        <div class="widget_title widget_black">
                            <h2><a href="#">Readers Corner</a></h2>
                        </div>
                        <div class="widget_body"><img class="img-responsive left" src="assets/img/reader.jpg"
                                                      alt="Generic placeholder image">

                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C
                                users after installed base benefits. Dramatically visualize customer directed
                                convergence without</p>

                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C
                                users after installed base benefits. Dramatically visualize customer directed
                                convergence without
                                revolutionary ROI.</p>
                            <button class="btn pink">Read more</button>
                        </div>
                    </div>
                    <!--  Readers Corner News -->

                    <div class="widget hidden-xs m30">
                        <img class="img-responsive widget_img" src="assets/img/podcast.jpg" alt="add_one">
                    </div>
                    <!--Advertisement-->
                </div>
                <!-- col-md-4 -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </section>
    <!-- entity_section -->

    <section id="subscribe_section" class="subscribe_section">
        <div class="row">
            <form action="#" method="post" class="form-horizontal">
                <div class="form-group form-group-lg">
                    <label class="col-sm-6 control-label" for="formGroupInputLarge">
                        <h1><span class="red-color">Sign up</span> for the latest news</h1>
                    </label>

                    <div class="col-sm-3">
                        <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" value="Sign Up" class="btn btn-large pink">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </form>
        </div>
    </section>
    <!-- Subscriber Section -->

    <section id="footer_section" class="footer_section">
        <div class="container">
            <hr class="footer-top">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_widget_title"><h3><a href="category.html" target="_self">About Tech</a></h3>
                    </div>
                    <div class="logo footer-logo">
                        <a title="fontanero" href="index.html">
                            <img src="assets/img/tech_about.jpg" alt="technews">
                        </a>

                        <p>Competently conceptualize go forward testing procedures and B2B expertise. Phosfluorescently
                            cultivate principle-centered methods.of empowerment through fully researched.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_widget_title">
                        <h3><a href="category.html" target="_self">Discover</a></h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <ul class="list-unstyled left">
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">Gadgets</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Apps</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Membership</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Job</a></li>
                                <li><a href="#">SiteMap</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-8">
                            <ul class="list-unstyled">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Newsletter Alerts</a></li>
                                <li><a href="#">Podcast</a></li>
                                <li><a href="#">Sms Subscription</a></li>
                                <li><a href="#">Advertisement Policy</a></li>
                                <li><a href="#">Report Technical issue</a></li>
                                <li><a href="#">Complaints and Corrections</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookie Policy</a></li>
                                <li><a href="#">Securedrop</a></li>
                                <li><a href="#">Archives</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_widget_title">
                        <h3><a href="#" target="_self">Editor Picks</a></h3>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="assets/img/editor_pic1.jpg"
                                             alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="single.html">Apple launches photo-centric wrist watch for Android</a>
                            </h3>
                            <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="assets/img/editor_pic2.jpg"
                                             alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="single.html">Apple launches photo-centric wrist watch for Android</a>
                            </h3>
                            <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="assets/img/editor_pic3.jpg"
                                             alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="single.html">Apple launches photo-centric wrist watch for Android</a>
                            </h3>
                            <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_widget_title">
                        <h3><a href="category.html" target="_self">Tech Photos</a></h3>
                    </div>
                    <div class="widget_photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo1.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo2.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo3.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo4.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo5.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo6.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo7.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo8.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo9.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo10.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo11.jpg" alt="Tech Photos">
                        <img class="img-thumbnail" src="assets/img/tech_photo12.jpg" alt="Tech Photos">
                    </div>

                </div>
            </div>
        </div>

        <div class="footer_bottom_Section">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <div class="col-sm-3">
                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                <!--Linkedin-->
                                <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                <!--Pinterest-->
                                <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p>&copy; Copyright 2016-Tech News . Design by: <a
                                        href="https://uicookies.com">uiCookies</a></p>
                        </div>
                        <div class="col-sm-3">
                            <p>Technology News Magazine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    ----------------------------------------------------------------------------------------
    <main class="main" role="main">

        <header class="wrap">
            <h1><?= $page->title()->html() ?></h1>

            <?php
            // This page uses a separate controller to set variables, which can be used
            // within this template file. This results in less logic in your templates,
            // making them more readable. Learn more about controllers at:
            // https://getkirby.com/docs/developer-guide/advanced/controllers
            if ($pagination->page() == 1):
                ?>
                <div class="intro text">
                    <?= $page->text()->kirbytext() ?>
                </div>
            <?php endif ?>

            <hr/>
        </header>

        <section class="wrap">
            <?php if ($articles->count()): ?>
                <?php foreach ($articles as $article): ?>

                    <article class="article index">

                        <header class="article-header">
                            <h2 class="article-title">
                                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
                            </h2>

                            <p class="article-date"><?= $article->date('F jS, Y') ?></p>
                        </header>

                        <?php snippet('coverimage', $article) ?>

                        <div class="text">
                            <p>
                                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                                <a href="<?= $article->url() ?>" class="article-more">read more</a>
                            </p>
                        </div>

                    </article>

                    <hr/>

                <?php endforeach ?>
            <?php else: ?>
                <p>This blog does not contain any articles yet.</p>
            <?php endif ?>
        </section>

        <?php snippet('pagination') ?>

    </main>

<?php snippet('footer') ?>