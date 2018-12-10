<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<footer>
    <div class="grille">
        <div class = "location">
            <h3> Nous contacter </h3>
            Adresse : <?php echo $donneesAdmin['adresse']; ?></br>
            Téléphone : <?php echo $donneesAdmin['telephone']; ?></br>
            E-Mail: <a style= "color :#0063e3;" href ="mailto:<?php echo $donneesAdmin['mail']; ?>"><?php echo $donneesAdmin['mail']; ?></a></br>

        </div>

        <div class ="web" style="color:#0063e3;">
            <h3 style="color :#D52C42;"> Suivez-nous sur les réseaux sociaux </h3>
            <a href="#" style="color :#0063e3;"><img src="public/image/Twitter.png" width="30vw">Twitter</a><br>
            <a href="#" style="color :#0063e3;"><img src="public/image/Facebook.png" width="30vw"></a>Facebook<br>
            <a href="#" style="color :#0063e3;"><img src="public/image/Instagram.png" width="30vw"></a>Instagram
        </div>

        <?php if($_SERVER['PHP_SELF'] != "/connexion.php"): ?>
            <div class ="a_propos">
                <h3>À propos de DomoLink</h3>
                Site de <?php echo $donneesAdmin['nom']; ?></br>
                Un projet de la société <?php echo $donneesAdmin['societe']; ?>
            </div>
        <?php endif; ?>
    </div>
</footer>

<style>
    img{
        vertical-align: middle;
    }
    footer {
        display: block;
        max-height : 5%;
        padding: 4px;
        margin-top : 5px;
        color :#D52C42;
        border-top : 1px solid #D52C42;
    }
    .grille
    {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 5px;
        grid-auto-rows: 100%;
    }
    .location
    {
        grid-column: 1;
        grid-row: 1;
    }
    .web
    {
        grid-column: 2;
        grid-row: 1;
    }
    .a_propos
    {
        grid-column: 3;
        grid-row: 1;
    }
    h3 {
        font-family: "Comfortaa-Bold";
        font-weight: bold;
        margin-top : 0px;
        margin-bottom : 5px;
    }
</style>