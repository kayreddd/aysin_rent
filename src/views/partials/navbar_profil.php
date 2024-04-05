<?php ob_start();
?>

<body>
    <main>
        <div class="all-btn">
            <a href="<?=PROJECT_FOLDER ?>www/?p=historical" class="btn-menu" onclick="changerFond(this)">MES LOCATIONS</a>
            <a href="<?=PROJECT_FOLDER ?>www/?p=myInformations" class="btn-menu" onclick="changerFond(this)">MES INFORMATIONS</a>
            <a href="<?=PROJECT_FOLDER ?>www/?p=changeMdp" class="btn-menu" onclick="changerFond(this)">CHANGER MON MOT DE PASSE</a>
            <a href="<?=PROJECT_FOLDER ?>src/utils/logout.php" class="btn-menu" onclick="changerFond(this)">DÉCONNEXION</a>
        </div>
    </main>
</body>

<?php $navbar_profil = ob_get_clean();?>