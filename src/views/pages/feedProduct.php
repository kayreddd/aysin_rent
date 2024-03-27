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
                <a href="<?=PROJECT_FOLDER ?>www/?p=product2">Découvrir</a>
            </div>
            <!-- RANGE ROVER -->
            <div class="button2">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product1">Découvrir</a>
            </div>
            <div class="button3">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product3">Découvrir</a>
            </div>
            <div class="button4">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product">Découvrir</a>
            </div>
            <div class="button5">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product4">Découvrir</a>
            </div>
            <div class="button6">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product5">Découvrir</a>
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
    </main>
</body>

<?php $page_content = ob_get_clean();