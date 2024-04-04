<?php
$page = "register";
$title = "Aysin Rent - L'agence de location d'excellence";

//empeche l'utilisateur connecté d'aller sur la page register
if (isset($_SESSION['user_id']))
{
    header("Location: /aysin_rent/www/?p=feedProduct");
    die();
}

ob_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])){
        //appel de la fonction insertion dans DbManager
        $BDD->insertUserInfoRegister($_POST["lastName"], $_POST["firstName"], $_POST["email"], $_POST["dateOfBirth"], $_POST["mdp"]);

        header("Location: /aysin_rent/www/?p=login");
    }
}

?>
<body>
    <main>
        <div class="case2_register">
            <div class="form-box_register">
                <form class="form_register" method="post" >
                    <span class="title_register">Inscription</span>
                    
                    <div class="input-container_register">
                        <input type="text" placeholder="Nom" name="lastName">
                    </div>
                    <div class="input-container_register">
                        <input type="text" placeholder="Prénom" name="firstName">
                    </div>
                    <div class="input-container_register">
                        <input type="email" placeholder="Adresse e-mail" name="email">
                    </div>
                    <div class="info_years_register">
                        <input type="date" placeholder="Date de naissance" name="dateOfBirth">
                    </div>
                    <div class="input-container_register">
                        <input type="password" placeholder="Mot de passe" name="mdp">
                    </div>
                    <button type="submit" class="button_register">S'inscrire</button>
                    <div class="other_connex_register">
                        <p>Ou avec</p>
                        <div class="logo_connex_register">
                            <a href="https://www.apple.com/fr"><i class="fa-brands fa-apple" style="color: #1025E8;"></i></a>
                            <a href="https://myaccount.google.com/"><i class="fa-brands fa-google" style="color: #1025E8;"></i></a>
                            <a href="https://www.facebook.com/?locale=fr_FR"><i class="fa-brands fa-square-facebook" style="color: #1025E8;"></i></a>
                        </div>
                    </div>
                    
                </form>
                <div class="form-section_register">
                <p>Déjà un compte ? <a href="<?=PROJECT_FOLDER ?>www/?p=login"> Connectez-vous</a></p>
                </div>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>
<?php $page_content = ob_get_clean();