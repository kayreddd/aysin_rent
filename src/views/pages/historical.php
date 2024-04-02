<?php
$page = "historical";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <?php require_once __DIR__ . '/../partials/navbar_profil.php'; ?>

        <div class="title-rent">
            <p>MES LOCATIONS</p>
        </div>

        <div class="historical-border">
            <div class="historical-box">
                <div class="historical-img">
                    <img src="<?=PROJECT_FOLDER ?>/src/images/land-rover-range-rover-velar-20394-1 1.svg" alt="">
                </div>

                <div class="historical-box1">
                    <p class="historical-car-name">RANGE ROVER VELAR</p>
                    <p class="historical-cmd-nbr">N° DE COMMANDE : 38910740913</p>
                </div>
            </div>

            <div class="historical-info">
                <div>
                    <p>Ilyas</p>
                    <p>BOIALAMI</p>
                </div>
                <div>
                    <p>ESSENCE</p>
                    <p>AUTOMATIQUE</p>
                </div>
                <div>
                    <p>DU “DATE”</p>
                    <p>AU “DATE”</p>
                </div>
                <div>
                    <p>LIVRÉ À “ADRESSE”</p>
                    <p>RESTITUÉ À “ADRESSE”</p>
                </div>
                <p>MASTERCARD</p>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>

<?php $page_content = ob_get_clean();