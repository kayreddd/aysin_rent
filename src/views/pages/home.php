<?php
$page = "home";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <div class="container">
            <video id="myVideo" autoplay muted width="1440" height="623" class="bg-clip">
                <source src="<?=PROJECT_FOLDER ?>/src/images/lightSignature.mp4" type="video/mp4">
            </video>

            <div class="content">
                <p>Ne vous privez plus du plaisir de conduire les meilleures<br> voitures du moment.</p>
            </div>
        </div>

        <script>
           document.addEventListener('DOMContentLoaded', function() {
                const video = document.getElementById('myVideo');

                video.addEventListener('ended', function() {
                    video.pause();
                });
            });
        </script>

        <div class="btn-home">
            <a href="<?=PROJECT_FOLDER ?>www/?p=feedProduct">Réservez Maintenant</a>
        </div>
        
        <div class="title1">
            <p>Louez uniquement les meilleurs voitures du moment</p>
        </div>

        <img src="<?=PROJECT_FOLDER ?>/src/images/rs3_home.svg" alt="" width="100%">

        <div class="border-left">
            <img src="<?=PROJECT_FOLDER ?>/src/images/border_left.svg" alt="">
        </div>

        <div class="conditions">
            <p>21 ans minimum</p>
            <p>2 ans de permis minimum</p>
            <p class="condition3">100km offerts</p>
        </div>

        <div class="border-right">
            <img src="<?=PROJECT_FOLDER ?>/src/images/border_right.svg" alt="">
        </div>

        <div class="title2">
            <p>NOS AVIS CLIENTS</p>
        </div>

        <div class="rate">
            <img src="<?=PROJECT_FOLDER ?>/src/images/avis1.svg" alt="">
            <img src="<?=PROJECT_FOLDER ?>/src/images/avis2.svg" alt="">
            <img src="<?=PROJECT_FOLDER ?>/src/images/avis3.svg" alt="">
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>
        
    </main>
</body>

<?php $page_content = ob_get_clean();