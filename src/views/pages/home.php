<?php
$page = "home";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <div class="container">
            <video autoplay loop muted width="1440" height="623" class="bg-clip">
                <source src="<?=PROJECT_FOLDER ?>/src/images/lightSignature.mp4" type="video/mp4">
            </video>
            <div class="content">
                <p style="color: white;">Ne vous privez plus du plaisir de conduire les meilleures<br> voitures du moment.</p>
            </div>
        </div>

        <div class="title1">
            <p>Louez uniquement les meilleurs voitures du moment</p>
        </div>

        <img src="<?=PROJECT_FOLDER ?>/src/images/rs3_home.svg" alt="" width="100%">

        <img src="<?=PROJECT_FOLDER ?>/src/images/border_left.svg" alt="" style="padding-left: 80px; padding-top: 150px;">

        <div class="conditions">
            <p style="padding-bottom: 70px;">21 ans minimum</p>
            <p style="padding-bottom: 70px;">2 ans de permis minimum</p>
            <p style="padding-bottom: 70px; margin-bottom: -85px">100km offerts</p>
        </div>

        <img style="padding-left: 927px; margin-bottom: 400px;" src="<?=PROJECT_FOLDER ?>/src/images/border_right.svg" alt="">

        <div class="title2">
            <p>NOS AVIS CLIENTS</p>
        </div>

        <div class="rate">
            <img src="<?=PROJECT_FOLDER ?>/src/images/avis1.svg" alt="">
            <img src="<?=PROJECT_FOLDER ?>/src/images/avis2.svg" alt="">
            <img src="<?=PROJECT_FOLDER ?>/src/images/avis3.svg" alt="">
        </div>
    </main>
</body>

<?php $page_content = ob_get_clean();
