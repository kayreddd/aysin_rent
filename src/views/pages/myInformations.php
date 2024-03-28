<?php
$page = "myInformations";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>

        <div class="img_profil">
            <img class="image_profil" src="<?=PROJECT_FOLDER ?>/src/images/2024-bmw-i5-edrive40-interior-106-646d15f7ee204 1.svg" alt="" width="100%">
        </div>

            

        <h3>MES INFORMATIONS</h3>

        <?php require_once __DIR__ . '/../partials/navbar_profil.php'; ?>

        <div class="block_all_info">
            <div class="block_info1">
                <div class="block_name">
                    <p>NOM</p>
                    <div class="case_name"></div>
                </div>

                <div class="block_first_name">
                    <p>PRÉNOM</p>
                    <div class="case_first_name"></div>
                </div>
            </div>    
            <div class="block_info2">
                <div class="block_mail">
                    <p>ADRESSE MAIL</p>
                    <div class="case_mail"></div>
                </div>
                <div class="block_dob">
                    <p>DATE DE NAISSANCE</p>
                    <div class="block_case_dob">
                        <div class="case_dob1"></div>
                        <div class="case_dob2"></div>
                        <div class="case_dob3"></div>
                    </div>  
                </div>
            </div>
            <div class="block_save">
                <button class="btn_save">ENREGISTRER</button>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>

<?php $page_content = ob_get_clean();