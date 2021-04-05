<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/all.css">
    <link rel="stylesheet" href="Public/Css/style.css">
    <title>Connexion</title>
</head>
<body>
    <header>
    <?php include_once "header.php"; ?>
    </header>
    <div class="identif">
    <h2>Se Connecter</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <input type="text" placeholder="Email" name="login" class="login">
    <input type="password" placeholder="mot de passe" name="password" class="password">
    <input type ="submit" name="action"  value="connexion">  
</form>
    </div>
    <?php
?>
<button class="connexion" id ="newcon" >Créer un nouveau compte</button>
<div class="new">
    <h2>Nouveau Compte</h2>
    <p> la création de compte est entièrement gratuite <p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <fieldset>
    <input type="text" placeholder="Nom" name="nom" class="nom">
    <input type="text" placeholder="Prenom" name="prenom" class="prenom">
    Date de naissance :<input type="date" placeholder="Date de naissance" name="dateN" class="dateN">
    <input type="text" placeholder="Nombre de membre dans la famille" name="famille" class="famille">
    <input type="text" placeholder="Email" name="login2" class="email">
    <input type="text" placeholder="mot de passe" name="password2" max ="15"class="mdp">
    <input type ="submit" name="action" value="creation">
    </fieldset>
</form>
</div> 

<?php



//Nouveau utilisateur 
//Reprendre ses informations et les stocker en base de données
if (isset($_POST['action']) && ($_POST['action'])== "creation"){
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['dateN']) && !empty($_POST['famille']) && !empty($_POST['login2']) && !empty($_POST['password2']) ){
    
    list($yyyy,$mm,$dd) = explode('-',$_POST['dateN']);
    
    if (!checkdate($mm,$dd,$yyyy)){
        echo "Veuillez remplir des champs numériques";
    }elseif(strlen($_POST['password2']) >15 || strlen($_POST['password2']) <6){
        echo "le mot de passe doit être compris entre 6 et 15 caractères maximum";
    }else{
    
    include_once "connexion_bdd.php";
    $connexion = connexionbdd('budgeto');
    $nom=$connexion->quote($_POST['nom']);
    $prenom=$connexion->quote($_POST['prenom']);
    $dateN=$connexion->quote($_POST['dateN']);
    $famille=$connexion->quote($_POST['famille']);
    $login=$connexion->quote($_POST['login2']);
    $password=$connexion->quote(password_hash($_POST['password2'],PASSWORD_DEFAULT));


    $requete= "INSERT INTO utilisateurs (login,password,nom,prenom,dateN,famille) VALUES($login,$password,$nom,$prenom,$dateN,$famille);";

    $nblignesaffectées= $connexion->exec($requete);
    echo "<div class='infos'>Vos informations:</br> Nom:".$nom."</br>Prénom:".$prenom."</br>Date de naissance :".$dateN.
    "</br>Nombre de membres dans votre famille :".$famille."</br>Identifiant:".$login."</div>";
    if($nblignesaffectées != 1){
        $erreur = $connexion->errorInfo();
        echo "Problème insertion". $erreur[2] ."code:". $erreur[0];
    }else{
        echo "<div class='infos'>Numéro d'adhérent: ".$connexion->lastinsertId()."</div>";
        echo "<h2 class='infos'><strong>Bienvenue !</strong> Vous pouvez désormais vous Connecter ci dessus pour profiter de nos services </h2>";
    }
}
    
}else{
    echo "Veuillez remplir tout les champs";
}};


// Vérification authentification
if(isset($_POST['action']) && ($_POST['action'])=="connexion"){
if (isset($_POST['login']) && isset($_POST['password'])) {
    // Connexion à la BDD via PDO
    include_once "connexion_bdd.php";
    $conn1 = connexionbdd('budgeto');

    // Login et password sont récupérés dans la requête POST
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Requête SQL
    $requete = "SELECT password FROM utilisateurs WHERE login = '$login'";
    // SELECT password FROM users WHERE login = 'admin'
    $resultat = $conn1->query($requete);

    // On récupère le mot de passe hashé en BDD et on va utiliser la fonction password_verify pour le
    // comparer avec la saisie utilisateur.
    if ($resultat) {
        $row = $resultat->fetch(PDO::FETCH_NUM);
        // $row = ['$2y$10$f0N3AfdfkMwNarOc2MpSg.FTkPa7PnKjD9BnwmZ6XektXe/46u8VK']
        if (password_verify($password, trim($row[0]))) {
            $_SESSION['connecte'] = "oui";
            $_SESSION['nom_utilisateur'] = $_POST['login'];
            echo "Mot de passe vérifié <br/>";
        } else {
            echo "Echec de connexion1";

        }

    } else {
        echo "Echec de connexion2";
    }

    // Fermeture de la connexion
    $conn1 = null;

}};

if (isset($_SESSION['connecte']) && isset($_SESSION['nom_utilisateur'])) {
    // echo "Vous êtes connecté en tant que : " . $_SESSION['nom_utilisateur'];
    header ("Location:gestionnaire.php");
}
?>


<script src="Public/Js/script.js"></script>
</body>
</html>