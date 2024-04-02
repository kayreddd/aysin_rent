<?php
$page = "product1";
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 
?>
<body>
    <main>
        <div class="all_block" style="padding-bottom: 150px;">
            <div class="box_background_1 range1">
                <div class="text1">RANGE ROVER VELAR</div>
            </div>
            <div class="info_car range_car">
                <div class="info1">
                    <div class="i1">
                        <div class="i1_1">2019</div>
                        <div class="i1_2">ANNEE</div>
                    </div>
                    <div class="i2">
                        <div class="i1_1">551 CH</div>
                        <div class="i1_2">PUISSANCE</div>
                    </div>
                    <div class="i3">
                        <div class="i1_1">ESSENCE</div>
                        <div class="i1_2">CARBURANT</div>
                    </div>
                    <div class="i4">
                        <div class="i1_1">AUTOMATIQUE</div>
                        <div class="i1_2">BOITE DE VITESSE</div>
                    </div>
                </div>
                <button class="button_reserver">RÉSERVEZ MAINTENANT</button>
                <div class="text2">
                    Le design avant-gardiste du Range Rover Velar, avec ses éléments soignés et raffinés, est à la fois intriguant et séduisant.
                </div>
            </div>
            <div class="box_background_2 range2"></div>
            <div class="info_car2 range_car2" >
                <div class="info2">
                    <div class="i1">
                        <div class="i1_1">A PARTIR DE</div>
                        <div class="i1_2">150.00e</div>
                    </div>
                    <div class="i2">
                        <div class="i1_1">CAUTION</div>
                        <div class="i1_2">3500.00e</div>
                    </div>
                </div>
                <div class="hour_info_box">
                    <div class="box_h">24H</div>
                    <div class="box_h">48H</div>
                    <div class="box_h">72H</div>
                    <div class="box_h">96H</div>
                    <div class="box_h">1 SEMAINE</div>
                    <div class="box_h">1 MOIS</div>
                </div>
            </div>
            <div class="box_background_3 range3">
                <div class="text3">RÉSERVEZ LE MAINTENANT</div>
                <form action="" class="formulaire_produit">
                    <div class="container_form">
                        <!-- <div class="left-column"> -->
                            <div class="input-group">
                                <input type="text" placeholder="NOM" id="input1" name="input1">
                                <input type="text" placeholder="ADRESSE EMAIL" id="input2" name="input2">
                                <input type="text" placeholder="DATE DE NAISSANCE" id="input3" name="input3">
                                <input type="text" placeholder="DATE DE DEPART" id="input4" name="input4">
                                <input type="text" placeholder="SELECTIONNER UN MODELE" id="input5" name="input5">
                                <input type="text" placeholder="PRENOM" id="input6" name="input6">
                                <input type="text" placeholder="NUMERO DE TELEPHONE" id="input7" name="input7">
                                <input type="text" placeholder="ANCIENNETE DE PERMIS" id="input8" name="input8">
                                <input type="text" placeholder="DATE D'ARRIVEE" id="input9" name="input9">
                            </div>
                    </div>
                    <div class="">
                        <button type="submit" class="button_next_to_paiement">PASSER AU PAIEMENT</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>
<?php $page_content = ob_get_clean();