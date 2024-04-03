<?php
$page = "login";
$title = "Aysin Rent - L'agence de location d'excellence";

//empeche l'utilisateur connecté d'aller sur la page login
if (isset($_SESSION['user_id']))
{
    header("Location: /aysin_rent/www/?p=feedProduct");
    die();
}
ob_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])){
        $info_user = $BDD->loginUser($_POST["email"], $_POST["mdp"]);//on vérifie si l'utilisateur existe en bdd et la fonction nous retourne l'user_id et le nom stocké dans la bdd
        if(count($info_user) > 0){ //si il y a au moins un élément du tableau
            $_SESSION["user_id"] = $info_user[0];
            $_SESSION["name"] = $info_user[1];
            if(isset($_SESSION["car_page"])){ //si l'utilisateur s'inscrit et était sur la page produit on le redirige sur cette page après connexion
                $header = "Location: /aysin_rent/www/?p=" . $_SESSION["car_page"];
                header($header);

            }else{
                 header("Location: /aysin_rent/www/?p=feedProduct");
            }
        }else{
           echo "Email ou mot de passe incorrects"; 
        }
    }
}

?>
<body>
    <main>
        <div class="case1_login">
            <div class="form-box_login">
                <form class="form_login" method="post">
                    <span class="title_login">Connexion</span>
                    
                    <div class="input-container_login">
                        <input type="email" placeholder="Adresse e-mail" style="color: black;" name="email">
                    </div>
                    <div class="input-container_login">
                        <input type="password" placeholder="Mot de passe" name="mdp">
                    </div>
                    <div class="forgot_mdp">
                        <a class="mdp_text" href="#">Mot de passe oublié ?</a>
                    </div>
                    <button type="submit" class="button_login">Se connecter</button>
                    <div class="other_connex_login">
                        <p>Ou avec</p>
                        <div class="logo_connex_login">
                            <a href="https://www.apple.com/fr"><i class="fa-brands fa-apple" style="color: #1025E8;"></i></a>
                            <a href="https://myaccount.google.com/"><i class="fa-brands fa-google" style="color: #1025E8;"></i></a>
                            <a href="https://www.facebook.com/?locale=fr_FR"><i class="fa-brands fa-square-facebook" style="color: #1025E8;"></i></a>
                        </div>
                    </div>
                    
                </form>
                <div class="form-section_login">
                <p>Pas de compte ? <a href="<?=PROJECT_FOLDER ?>www/?p=register"> Incrivez-vous</a></p>
                </div>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>
<?php $page_content = ob_get_clean();