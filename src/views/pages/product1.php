<?php
$page = $_GET["p"];
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 

//fonction recup donnée par rapport à $page

$infoCars = $BDD->getCarsBDD($page);

//adaptation filtre sombre image 3
if($page == 'urus' || $page =='gt63s' || $page == 'rs3'){
    echo '<style>
    .voiture3::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.459);
        /* background-color: rgba(0, 0, 0, 0.3);  */
    }
    </style>';
}

?>
<body>
    
    <main>
        <?php foreach ($infoCars as $row){?>
            <!-- chargement des images en bdd de chaque voiture -->
            <style>
                .voiture1 {
                    background: url('../src/images/<?php echo $row["img1"]?>') no-repeat center center;
                    background-size: cover;
                }
                .voiture2{
                    background: url('../src/images/<?php echo $row["img2"]?>') no-repeat center center;
                    background-size: cover;
                }
                .voiture3{
                    background: url('../src/images/<?php echo $row["img3"]?>') no-repeat center center;
                    background-size: cover;
                }
            </style>  
        <div class="all_block" style="padding-bottom: 150px;">
            <div class="box_background_1 voiture1" >
                <div class="text1"><?php echo $row["brand"] ." ". $row["model"]?></div>
            </div>
            <div class="info_car range_car">
                <div class="info1">
                    <div class="i1">
                        <div class="i1_1"><?php echo $row["year"]?></div>
                        <div class="i1_2">ANNEE</div>
                    </div>
                    <div class="i2">
                        <div class="i1_1"><?php echo $row["horsepower"]?> CH</div>
                        <div class="i1_2">PUISSANCE</div>
                    </div>
                    <div class="i3">
                        <div class="i1_1"><?php echo $row["fuel"]?></div>
                        <div class="i1_2">CARBURANT</div>
                    </div>
                    <div class="i4">
                        <div class="i1_1"><?php echo $row["transmission"]?></div>
                        <div class="i1_2">BOITE DE VITESSE</div>
                    </div>
                </div>
                <button class="button_reserver">RÉSERVEZ MAINTENANT</button>
                <div class="text2">
                    <?php echo $row["slogan_car"] ?>
                </div>
            </div>
            <div class="box_background_2 voiture2"></div>
            <div class="info_car2 range_car2" >
                <div class="info2">
                    <div class="i1">
                        <div class="i1_1">A PARTIR DE</div>
                        <div class="i1_2"><?php echo $row["price1"]?>e</div>
                    </div>
                    <div class="i2">
                        <div class="i1_1">CAUTION</div>
                        <div class="i1_2"><?php echo $row["bail"] ?>e</div>
                    </div>
                </div>
                <div class="hour_info_box">
                    <div class="box_h"><a href="https://buy.stripe.com/test_7sI5kX9l6fJe21GdQQ">24H</a></div>
                    <div class="box_h">48H</div>
                    <div class="box_h">72H</div>
                    <div class="box_h">96H</div>
                    <div class="box_h">1 SEMAINE</div>
                    <div class="box_h">1 MOIS</div>
                </div>
            </div>
            <?php }?>
            <div class="box_background_3 voiture3">
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