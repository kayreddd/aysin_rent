<?php
$page = "feedProduct";
$title = "Aysin Rent";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>

        <p>QUEL VÉHICULE SOUHAITEZ-VOUS CONDUIRE ?</p>

        <!-- <div class="feed1">
        <img class="img-box" src="<?=PROJECT_FOLDER ?>/src/images/feedProduct-P1.svg" alt="" width="100%">
            <div class="all-box">
                <div class="box1">
                    <p style="font-size: 35px;">RANGE ROVER<br>VELAR</p>
                    <p style="font-size: 35px; margin-right: -300px;">LAMBORGHINI<br>URUS</p>
                </div>

                <div class="box2">
                    <p style="font-size: 35px; margin-left: -28px">AUDI RS3<br>ABT</p>
                    <p style="font-size: 35px; margin-right: -350px">AUDI RS7<br>ABT</p>
                </div>

                <div class="box3">
                    <p style="font-size: 35px; padding-left: 95px">BMW X6</p>
                    <p style="font-size: 35px; margin-right: -360px">MERCEDES-BENZ<br>GT63S</p>
                </div>

                <div class="box4">
                    <p style="font-size: 35px; padding-left: 75px">MERCEDES-BENZ<br>CLASSE G</p>
                    <p style="font-size: 35px; margin-right: -300px">CHEVROLET CAMARO<br>SS</p>
                </div>
            </div>
        </div> -->

        <!-- <div>
            <div class="all-box">
                <div class="box1">
                    <div class="cars1">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/range-velar.svg" alt="">
                        <p>RANGE ROVER<br>VELAR</p>
                    </div>
                    <div class="cars2">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/lamborghini-urus.svg" alt="">
                        <p>LAMBORGHINI<br>URUS</p>
                    </div>
                </div>

                <div class="box2">
                    <div class="cars3">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/rs3-abt.svg" alt="">
                        <p>AUDI RS3<br>ABT</p>
                    </div>
                    <div class="cars4">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/rs7-abt.svg" alt="">
                        <p>AUDI RS7<br>ABT</p>
                    </div>
                </div>
                
                <div class="box3">
                    <div class="cars5">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/bmw-x6.svg" alt="">
                        <p>BMW X6</p>
                    </div>
                    <div class="cars6">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/amg-gt63s.svg" alt="">
                        <p>MERCEDES-BENZ<br>GT63S</p>
                    </div>
                </div>

                <div class="box4">
                    <div class="cars7">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/g63s.svg" alt="">
                        <p>MERCEDES-BENZ<br>CLASSE G</p>
                    </div>
                    <div class="cars8">
                        <img src="<?=PROJECT_FOLDER ?>/src/images/camaro-ss.svg" alt="">
                        <p>CHEVROLET CAMARO<br>SS</p>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="all-box">
            <img src="<?=PROJECT_FOLDER ?>/src/images/complete_cars.svg" alt="" width="100%">
            <div class="button1">
                <a href="<?=PROJECT_FOLDER ?>www/?p=product1">Découvrir</a>
            </div>
            <div class="button2">
                <button>Découvrir</button>
            </div>
            <div class="button3">
                <button>Découvrir</button>
            </div>
            <div class="button4">
                <button>Découvrir</button>
            </div>
            <div class="button5">
                <button>Découvrir</button>
            </div>
            <div class="button6">
                <button>Découvrir</button>
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