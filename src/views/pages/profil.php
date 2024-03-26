<?php
$page = "profil";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>

    <main>


        <h2>Mon Profil</h2>
        
        <div class="all-btn">
                    <a href="#" class="btn-menu" onclick="changeColor(this)">MES LOCATIONS</a>
                    <a href="#" class="btn-menu" onclick="changeColor(this)">MES INFORMATIONS</a>
                    <a href="#" class="btn-menu" onclick="changeColor(this)">CHANGER MON MOT DE PASSE</a>
                    <a href="#" class="btn-menu" onclick="changeColor(this)">MODE DE PAIEMENT</a>
                    <a href="#" class="btn-menu" onclick="changeColor(this)">DÉCONNEXION</a>
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
    <script>
            document.addEventListener('DOMContentLoaded', function(){

                let cursor = document.querySelector(".custom-cursor")
                let cursorBefore = document.querySelector(".custom-cursor-before")   
            
                document.addEventListener('mousemove', function(e){
                    cursor.style.left = e.clientX+'px'
                    cursor.style.top = e.clientY+'px'
                    cursorBefore.style.left = e.clientX+'px'
                    cursorBefore.style.top = e.clientY+'px'
                })
            })
    </script>
</body>

<?php $page_content = ob_get_clean();