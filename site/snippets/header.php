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


    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

<header class="header wrap wide" role="banner">
    <div class="grid">

        <div class="branding column">
            <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
        </div>

        <?php snippet('menu') ?>

    </div>
</header>
