<?php
$page = "register";
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 
?>
<body>
    <main>
        <div class="case2_register">
            <div class="form-box_register">
                <form class="form_register">
                    <span class="title_register">Inscription</span>
                    
                    <div class="input-container_register">
                        <input type="text" placeholder="Nom">
                    </div>
                    <div class="input-container_register">
                        <input type="text" placeholder="Prénom">
                    </div>
                    <div class="input-container_register">
                        <input type="email" placeholder="Adresse e-mail">
                    </div>
                    <div class="info_years_register">
                        <input type="date" placeholder="Adresse e-mail">
                    </div>
                    <div class="input-container_register">
                        <input type="password" placeholder="Mot de passe">
                    </div>
                    <button class="button_register"><a href="#" class="register_link">S'inscrire</button>
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
                <p>Déjà un compte ? <a href=""> Connectez-vous</a></p>
                </div>
            </div>
        </div>

        <div class="custom-cursor"></div>
        <div class ="custom-cursor-before"></div>

    </main>
</body>
<?php $page_content = ob_get_clean();