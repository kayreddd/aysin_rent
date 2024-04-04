<?php
$page = $_GET["p"];
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 

//recup du nom de la page voiture au cas où l'utilisateur appuie sur "Reserver"
if(!isset($_SESSION["user_id"])){
    $url = basename($_SERVER['PHP_SELF']);
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $carPage = substr($query, 2);
    }

    $_SESSION["car_page"] = $carPage;
}

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
                
                <?php 
                if (!isset($_SESSION['user_id'])) {
                    echo '<div class="hour_info_box">
                            <div class="box_h">24H</div>
                            <div class="box_h">48H</div>
                            <div class="box_h">72H</div>
                            <div class="box_h">96H</div>
                            <div class="box_h">1 SEMAINE</div>
                            <div class="box_h">1 MOIS</div>
                        </div>';
                    } else {
                    if ($page == 'range') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_fZebLFaoU2221K83cc">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_5kA3f9gNi8qqewUdQR">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIYaHBfJeayygF26oq">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_4gw5nh9kQ3661K8fZ1">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIY2b540w9uu4Wk148">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_7sI171aoUcGGgF27sx">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'urus') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_fZeeXRbsY6ii1K84gm">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_eVa4jd7cI7mmfAY4gn">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_6oEaHBdB6fSS4WkbIQ">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_9AQ2b5fJe4aafAYcMV">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_9AQ4jd9kQ8qq74s7sC">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_7sIdTN0Ok9uu9cA4gr">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'rs3') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_cN21719kQ0XY0G414g">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_4gwaHB40weOO74s6oB">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_6oE02X0Ok0XY3SgbIW">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_dR6eXR7cI0XY88w28n">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_28o6rlgNi8qq88w14k">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_8wM2b5cx2ayy74s8wN">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'gt63s') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_9AQ5nhbsY366bkIdR8">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_00g8zt9kQ4aa1K828r">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_00g5nh68E8qq4Wk4gA">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_3cs5nhcx2eOO2OcbJ3">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIY8zt0Ok2224Wk6oK">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_cN2bLF54A5eebkIbJ5">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'rs7') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_cN25nhdB6ayydsQaF2">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIYaHBgNiayy0G48wV">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_6oEg1V7cIayybkI4gG">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_9AQ2b5dB67mmdsQ28z">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_8wM2b5gNiayy88w14w">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_4gwg1VeFagWWagEaF7">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'x6') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_6oE171gNi7mmbkIeVo">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_28o3f9fJe7mm60o00v">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_3cseXR54AdKK2OcbJe">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_00g6rl0OkfSScoMeVr">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_00g3f9gNieOO9cA3cK">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIYcPJ40weOO0G414D">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'g63s') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIYg1Vcx28qq88w5kU">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_5kAeXR2WsayybkI5kV">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_28o171bsY222bkIbJk">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_8wMbLFbsYcGGbkIeVx">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_9AQ6rleFagWW88waFi">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_cN28zteFa366agE9Bf">1 MOIS</a></div>
                            </div>';
                    } elseif ($page == 'camaro') {
                        echo '<div class="hour_info_box">
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIY3f9dB636688w28O">24H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_8wM02X9kQfSScoM14L">48H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_7sI3f968EeOO3Sg4gY">72H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_bIYbLF68EfSSagE00J">96H</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_4gw7vp0Ok0XY1K814O">1 SEMAINE</a></div>
                                <div class="box_h"><a href="https://buy.stripe.com/test_14kdTN68E5ee2Oc3cX">1 MOIS</a></div>
                            </div>';
                    }
                }
                ?>

            </div>
            <?php }?>
            <div class="box_background_3 voiture3">
                <!-- afficher le bouton "Reserver" lorsque l'utilisateur n'est pas connecté -->
                <?php if(!isset($_SESSION["user_id"])){
                    echo '<div class="reserver_vite">N\'attendez plus pour réserver </div>
                    <a class="reserve_the_car" href="' . PROJECT_FOLDER . 'www/?p=register">RÉSERVEZ</a>';
                }?>
                
                <!-- <div class="text3">RÉSERVEZ LE MAINTENANT</div> -->
                <!-- <form action="" class="formulaire_produit">
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
                </form> -->
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>
<?php $page_content = ob_get_clean();