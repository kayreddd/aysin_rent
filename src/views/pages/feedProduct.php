<?php
$page = "feedProduct";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <h1>QUEL VÉHICULE SOUHAITEZ-VOUS CONDUIRE ?</h1>

        <div class="all-box">
            <img style="padding-bottom: 150px;" src="<?=PROJECT_FOLDER ?>/src/images/complete_cars.svg" alt="" width="100%">
            <!-- URUS -->
            <div class="button1">
                <a href="<?=PROJECT_FOLDER ?>www/?p=urus">Découvrir</a>
            </div>
            <!-- RANGE ROVER -->
            <div class="button2">
                <a href="<?=PROJECT_FOLDER ?>www/?p=range">Découvrir</a>
            </div>
            <div class="button3">
                <a href="<?=PROJECT_FOLDER ?>www/?p=rs3">Découvrir</a>
            </div>
            <div class="button4">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product">Découvrir</a>
            </div>
            <div class="button5">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product4">Découvrir</a>
            </div>
            <div class="button6">
                <a href="<?=PROJECT_FOLDER ?>www/?p=gt63s">Découvrir</a>
            </div>
            <div class="button7">
                <button>Découvrir</button>
            </div>
            <div class="button8">
                <button>Découvrir</button>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>
    </main>
</body>

<?php $page_content = ob_get_clean();