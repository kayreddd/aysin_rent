<?php
$page = "checkout";
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 
?>
<body>
    <main>
        <div class="all_block_checkout" style="padding-bottom: 150px;">
            <div class="box_background_car_checkout"></div>
            <div class="title_slogan_checkout">LES CLÉS N'ATTENDENT QUE VOUS</div>
            <div class="below_boxes">
                <div class="form-box_checkout">
                    <div class="title_paiement">PAIEMENT</div>
                    <form class="form_checkout">
                        <div class="form_input1">
                            <div class="input-container_cb_checkout">
                                <input type="text" placeholder="Ex: 1234  5678  9101  1121">
                            </div>
                            <div class="input-container_cb_month_checkout">
                                <input type="text" placeholder="MM/YY">
                                <input type="text" placeholder="123">
                                
                            </div>
                        </div>
                        <div class="checkbox_checkout_page">
                            <input type="checkbox" id="save_info" name="save_info" value="Card">
                            <label for="save_info"> Enregistrer mes informations</label>
                        </div>
                        <button class="button_payer">Payer</button>
                        <div class="politique_info_commande">
                            <p>Vos données personnelles seront utilisées pour traiter votre commande, pour vous aider à utiliser ce site web et pour d'autres raisons décrites dans notre politique de confidentialité.
                            </p>
                        </div>

                    </form>
                </div>
                <div class="recap_box">
                    <div class="title_paiement">RECAPITULATIF</div>
                    <div class="info_recap">
                        <div class="car_choice_name">RANGE ROVER VELAR</div>
                        <div class="info_recap_box1">
                            
                        </div>
                        <div class="info_recap_box2">
                            
                        </div>

                    </div>
                </div>
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

            // src="https://kit.fontawesome.com/f09ae54942.js" ;crossorigin="anonymous"
       </script>
    </main>
</body>
<?php $page_content = ob_get_clean();