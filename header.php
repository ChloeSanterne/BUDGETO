<?php session_start();?>
    <nav>
            <a href="index.php"><img src="Public/img/Budgetologo.png" alt="logo budgeto" class="logo"></a>

            <div>
                <div class="menu">
                <form id="formId" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                    <a class="direction" href="index.php">Accueil</a>
                    <input name="action" type="hidden" value="deconnexion">
                    
                <?php if (isset($_SESSION['connecte'])): ?>
            <a class="direction" href="gestionnaire.php">Mon Budget </a>
            <a class="direction" href="#"> Personnaliser</a>
            <a class="connexion" id="idSubmit" href="#"> Deconnexion <i class="fas fa-sign-out-alt"></i></a>
            <?php else: ?>
            <a class="direction" href="#nous">Qui sommes nous ? </a>
            <a  class="direction" href="#fonctionnement"> Comment ça fonctionne ?</a>
            <a class="connexion" id="idSubmit" href="login.php">Connexion <i class="fas fa-sign-out-in"></i></a>
            <?php endif;?>
</form>
                </div>
            </div>
        </nav>
        <?php

// Déconnexion : on détruit la session
if (isset($_POST['action']) && ($_POST['action']=="deconnexion")) {
    echo "<script> alert(\"Déconnexion\") </script>";
    session_unset();
    session_destroy();
    header("Location:login.php");
}?>






