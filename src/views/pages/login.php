<?php
$page = "login";
$title = "Aysin Rent - L'agence de location d'excellence";
ob_start(); 
?>
<body>
    <main>
        <div class="case1_login">
            <div class="form-box_login">
                <form class="form_login">
                    <span class="title_login">Connexion</span>
                    
                    <div class="input-container_login">
                        <input type="email" placeholder="Adresse e-mail" style="color: black;">
                    </div>
                    <div class="input-container_login">
                        <input type="password" placeholder="Mot de passe">
                    </div>
                    <div class="forgot_mdp">
                        <a class="mdp_text" href="#">Mot de passe oublié ?</a>
                    </div>
                    <button class="button_login"><a href="#" class="login_link">Se connecter</a></button>
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
                <p>Pas de compte ? <a href=""> Incrivez-vous</a></p>
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

            src="https://kit.fontawesome.com/f09ae54942.js" ;crossorigin="anonymous"
       </script>
    </main>
</body>
<?php $page_content = ob_get_clean();