<?php ob_start();
?>

<footer>
    <div class="all-foot1">
        <div class="foot1">
            <p>NOS SERVICES</p>

            <ul>
                <li><a style="text-decoration: none; color: white; opacity: 50%;" href="">Rejoignez-nous</a></li>
                <li><a style="text-decoration: none; color: white; opacity: 50%;" href="">Services personnalisées</a></li>
                <li><a style="text-decoration: none; color: white; opacity: 50%;" href="">Offres d'emploi</a></li>
            </ul>
        </div>

        <div class="foot2">
            <p>AIDE</p>

            <ul>
                <li class="footer_li"><a href="">Historique des prestations</a></li>
                <li class="footer_li"><a href="">Nous contacter</a></li>
                <li class="footer_li"><a href="">SAV</a></li>
            </ul>
        </div>

        <div class="foot3">
            <p>CONDITIONS</p>

            <ul>
                <li class="footer_li"><a href="">Paramètres de cookies</a></li>
                <li class="footer_li"><a href="">Conditions d'utilisations</a></li>
                <li class="footer_li"><a href="">Condition générale de vente</a></li>
                <li class="footer_li"><a href="">Politique de confidentalité et de cookie</a></li>
                <li class="footer_li"><a href="">Mentions légales</a></li>
            </ul>
        </div>

        <div class="foot4">
            <p>CHANGER DE PAYS ET DE LANGUE</p>

            <select name="langues" id="langues">
                <option value="France">France</option>
                <option value="Anglais">Anglais</option>
                <option value="Espagnol">Espagnol</option>
                <option value="Italien">Italien</option>
            </select>
        </div>
    </div>
    <div class="all-footer2">
        <div class="footer-second">
            <div class="logo-social">
                <a href="https://www.instagram.com/">
                    <div class="logo_link"><i class="fa-brands fa-instagram" style="color: white;"></i></div>
                </a>
                <a href="https://www.tiktok.com/fr/">
                    <div class="logo_link"><i class="fa-brands fa-tiktok" style="color: white;"></i></div>
                </a>
                
            </div>

            <div class="logo-payment">
                <i class="fa-brands fa-cc-visa" style="color: white;"></i>
                <i class="fa-brands fa-cc-mastercard" style="color: white;"></i>
                <i class="fa-brands fa-cc-paypal" style="color: white;"></i>
                <i class="fa-brands fa-cc-apple-pay" style="color: white;"></i>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f09ae54942.js" crossorigin="anonymous"></script>
</footer>

<?php $footer = ob_get_clean();?>