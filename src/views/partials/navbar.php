<?php ob_start(); ?>

<body>
    <nav>
        <div class="logo">
        <a href="<?=PROJECT_FOLDER ?>www/?p=home">
            <img class="image-clignote" src="<?= PROJECT_FOLDER ?>/src/images/logo.svg" alt="">
        </a>
        </div>

        <div class="burger">
            <label class="hamburger" for="menu-toggle">
                <input type="checkbox" id="menu-toggle">
                <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line" d="M7 16 27 16"></path>
                </svg>
            </label>
        </div>

        <div class="menu">
            <ul>
                <li><a href="<?=PROJECT_FOLDER ?>www/?p=home">Accueil</a></li>
                <li><a href="<?=PROJECT_FOLDER ?>www/?p=feedProduct">Véhicules</a></li>
                <li><a href="<?=PROJECT_FOLDER ?>www/?p=login">Connexion</a></li>
                <li><a href="<?=PROJECT_FOLDER ?>www/?p=contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</body>

<script>
        document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.querySelector('.menu');

         menuToggle.addEventListener('change', function() {
            if (this.checked) {
                menu.style.display = 'block'; // Afficher le menu lorsque le bouton burger est coché
            } else {
                menu.style.display = 'none'; // Masquer le menu lorsque le bouton burger est décoché
            }
        });
    });
</script>

<?php $navbar = ob_get_clean(); ?>


