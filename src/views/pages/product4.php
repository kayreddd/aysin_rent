<?php
$page = "product4";
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 
?>
<body>
    <main>
        <div class="all_block">
            <div class="box_background_1 merco_gt63s_1">
                <div class="text1">MERCEDES-BENZ GT63S</div>
            </div>
            <div class="info_car gt63s_car">
                <div class="info1">
                    <div class="i1">
                        <div class="i1_1">2023</div>
                        <div class="i1_2">ANNEE</div>
                    </div>
                    <div class="i2">
                        <div class="i1_1">630 CH</div>
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
                <button class="button_reserver">Réservez maintenant</button>
                <div class="text2">
                Montez à bord de la Mercedes-Benz GT63S et éprouvez immédiatement la sensation excitante d’être assis dans un habitable racé et élégant.</div>
            </div>
            <div class="box_background_2 merco_gt63s_2"></div>
            <div class="info_car2 gt63s_car2">
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
            <div class="box_background_3 merco_gt63s_3">
                <div class="text3">RESERVEZ LE MAINTENANT</div>
                <form action="" class="formulaire_produit">
                    <div class="container_form">
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