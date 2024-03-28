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
            <div class="form-box_checkout">
                <form class="form_checkout">
                    <div class="title_paiement">PAIEMENT</div>
                    <div class="input-container_cb_checkout">
                        <input type="text" placeholder="Ex: 1234  5678  9101  1121">
                    </div>
                    <div class="input-container_cb_month_checkout">
                        <input type="text" placeholder="MM/YY">
                        <input type="text" placeholder="123">
                        
                    </div>
                    <div class="checkbox_checkout_page">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> Enregistrer mes informations</label>
                    </div>
                    <button class="button_payer">Payer</button>
                    <div class="polituque_info_commande">
                        <p>Vos données personnelles seront utilisées pour traiter votre commande, pour vous aider à utiliser ce site web et pour d'autres raisons décrites dans notre politique de confidentialité.
                        </p>
                    </div>

                </form>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>
<?php $page_content = ob_get_clean();