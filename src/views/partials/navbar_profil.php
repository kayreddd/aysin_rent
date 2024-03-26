<?php ob_start();
?>

<body>
    <main>
        <div class="all-btn">
                <a href="" class="btn-menu" onclick="changeColor(this)">MES LOCATIONS</a>
                <a href="" class="btn-menu" onclick="changeColor(this)">MES INFORMATIONS</a>
                <a href="" class="btn-menu" onclick="changeColor(this)">CHANGER MON MOT DE PASSE</a>
                <a href="" class="btn-menu" onclick="changeColor(this)">MODE DE PAIEMENT</a>
                <a href="" class="btn-menu" onclick="changeColor(this)">DÉCONNEXION</a>
            </div>
        </main>
        <script>
            function changeColor() {
            var button = document.querySelector('.btn-menu');
            button.classList.add('clicked');
            }

            let clickedButton = null;

            function changeColor(button) {
            if (clickedButton !== null) {
                clickedButton.classList.remove('clicked');
            }
            button.classList.add('clicked');
            clickedButton = button;
            }
        </script>
    </main>
</body>

<?php $navbar_profil = ob_get_clean();?>