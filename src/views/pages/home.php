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
                <p style="color: white;">Ne vous privez plus du plaisir de conduire les meilleures<br> voitures du moment.</p>
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

        <img style="padding-left: 180px; padding-top: 150px;" src="<?=PROJECT_FOLDER ?>/src/images/border_left.svg" alt="">

        <div class="conditions">
            <p style="padding-bottom: 70px;">21 ans minimum</p>
            <p style="padding-bottom: 70px;">2 ans de permis minimum</p>
            <p style="padding-bottom: 70px; margin-bottom: -150px">100km offerts</p>
        </div>

        <img style="padding-left: 827px; margin-bottom: 400px;" src="<?=PROJECT_FOLDER ?>/src/images/border_right.svg" alt="">

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