<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <!-- favicon -->
    <link href="assets/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <?= css('assets/css/bootstrap.min.css') ?>
    <?= css('assets/fonts/font-awesome/font-awesome.min.css') ?>
    <?= css('assets/css/mobile-menu.css') ?>
    <?= css('assets/css/owl.carousel.css') ?>
    <?= css('assets/css/owl.theme.default.min..css') ?>
    <?= css('assets/css/style.css') ?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">

    <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>

    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <?php snippet('menu') ?>



