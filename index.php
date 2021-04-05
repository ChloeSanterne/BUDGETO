<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/all.css">
    <link rel="stylesheet" href="Public/Css/style.css">

    <title>Mon budget</title>
</head>

<body>
    <header>
        <?php include_once "header.php"?>
        <!-- <nav >
            <a href="#"><img src="Public/img/Budgetologo.png" alt="logo budgeto" class="logo"></a>
            
            <div>
                <div class="menu">
                    <a class="direction" href="#nous">Qui sommes nous ? </a>
                    <a  class="direction" href="#fonctionnement"> Comment ça fonctionne ?</a>
                    <a class="connexion" href="login.php">Se connecter  <i class="fas fa-sign-in-alt"></i></a>

                </div>
            </div>
        </nav> -->

    </header>
    <div class="Contenu">
    <main>
        <h1>Budgeto : l'appli qui vous permet d'économiser !</h1>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus enim vero aspernatur architecto. Dolorem
            dolore sit repudiandae cumque obcaecati, hic voluptas, deleniti, distinctio molestiae veniam suscipit nam
            facere repellendus et!</p>
    </main>

    <article class="description">
        <h2>Chaque jour notez vos dépenses et rentrées d'argent, maitrisez votre budget</h2>
        <p> En surveillant votre budget chaque jour soyez conscient de ce que vous dépensez et faites des choix plus
            intelligents <br>
            Envie d'organiser vos prochaines vacances dans un endroit de rêve mais vous n'avez pas le budget? Fixez vous
            des objectifs et vous apprennez à reussir le concrétiser! <br>
            Grâce à ce gestionnaire de budget vous pourrez soit améliorer votre reste à vivre ou encore permettre de
            vous constituer une épargne en cas d'urgence par exemple.</p>
    </article>

    <article id="nous" class="nous">
        <div><h2> Qui sommes nous? </h2>
        <p> En 2021, j'ai décidé de créer un site en HTML CSS JS avec un sujet Random et j'ai pensé à la gestion de mon
            budget!
            Et oui avant comme tout le monde je gérait mon budget sur papier dans un petit carnet! Mais je suis souvent
            sur 
            ma tablette et mon pc et je me suis dit pourquoi pas inventer un site sécurisé pour gérer mon budget encore
            plus facilement!
            Je me suis assurée bien évidemment que mon site est hyper sécurisé et vos données sont bien gardées! <br>
            Nous ne demandons aucune informations sensibles telles que vos RIB, id de banques etc</p>
        </div>
        <div>
            <img src="Public/img/Finance analysis _Flatline.svg" alt="personne qui analyse">
        </div>
    </article>

    <article id="fonctionnement"class="fnction">
        <h2>Comment ça fonctionne ?</h2>
        <p> Pour sécuriser vos données vous devez créer un compte personnel (entièrement gratuit :) ) et vous identifier, ensuite suivez le guide! <br>
        notre tutoriel vous expliquera comment le gestionnaire fonctionne, vous pourrez même le personnaliser pour qu'il 
    vous convienne parfaitement à vous et votre famille.</p>
    <a class="connexion" href="login.php">S'inscrire gratuitement <i class="fas fa-sign-in-alt"></i> </a>
    </article>
</div>

<footer>
    <p> <i class="fas fa-copyright"></i> Right reserved Chloé.S <i class="fab fa-twitter-square"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-linkedin"></i> </p>
    
</footer>

<script src="Public/Js/script.js"></script>
</body>

</html>