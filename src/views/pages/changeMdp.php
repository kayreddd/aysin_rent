<?php
$page = "changeMdp";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <main>
        <div class="img_profil">
            <img class="image_profil" src="<?=PROJECT_FOLDER ?>/src/images/2024-bmw-i5-edrive40-interior-106-646d15f7ee204 1.svg" alt="" width="100%">
        </div>

        <h4>CHANGER MON MOT DE PASSE</h4>

        <div class="block_change_mdp">
            <div class="block_change">
                <div class="block_old_mdp">
                    <p>ANCIEN MOT DE PASSE</p>
                    <div class="case_old_mdp"></div>
                </div>
                <div class="block_new_mdp">
                    <p>NOUVEAU MOT DE PASSE</p>
                    <div class="case_new_mdp"></div>
                </div>
            </div>
            <div class="block_confirm">
                <div class="block_new_mdp">
                    <p>CONFIRMER LE NOUVEAU MOT DE PASSE</p>
                    <div class="case_confirm_mdp"></div>
                </div>
                <div class="block_save_mdp">
                    <button class="case_save_mdp">ENREGISTRER</button>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $page_content = ob_get_clean();