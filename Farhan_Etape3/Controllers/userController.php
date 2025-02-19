<?php 
require_once("Models/UserModel.php");

if ($uri === "/connexion") {
    // vérifier si l'utilisateur a cliqué sur le bouton du formulaire
    if(isset($_POST['btnEnvoi'])){
     // pour récupérer l'erreur si l'utilisateur fait une faute de frappe au se trompe ses identifiants
     $erreur=false;
     //tentative de connexion et réupération des donnée de l'utilisateur ouverture d'une session
     if(connectUser($pdo)){
         //redirection vers la page d'accueil
         header("location:/");
     }
     else{
         //cas d'erreur
         $erreur=true;
     }
    }
    $title = "Connexion";                  //titre à afficher dans l'onglet de la page du navigateur
     $template = "Views/Users/connexion.php";        //chemin vers la vue demandée
     require_once("Views/base.php");             //appel de la page de base qui sera remplie avec la vue demandée

}
elseif ($uri === "/deconnexion"){
    session_destroy();
    header("location:/");

}
elseif ($uri ==="/inscription") {
    if(isset($_POST['btnEnvoi'])){
        $messageError = verifEmptyData();
        if (!$messageError) {
            //ajout de l'utilisateur à la base de données
            createUser($pdo);
            // redirection vers la page de connexion
            header('location:/connexion');
        }

    }
    $title = "Inscription";                  //titre à afficher dans l'onglet de la page du navigateur
    $template = "Views/Users/inscriptionOrEditProfil.php";        //chemin vers la vue demandée
    require_once("Views/base.php");             //appel de la page de base qui sera remplie avec la vue demandée
}
elseif ($uri ==="/updateProfil") {
    $title = "Mise à jour du profil";
    $template = "views/Users/inscriptionOrEditProfil.php";
    require_once("Views/base.php");
}

/*FONCTION verifyEmptyData
BUT : remplir et renvoyer un tableau associatif $messageError dont les clés sont les noms des champs avec un message rappelant que le champ concerné est vide
            ou renvoy false so on n'a pas rencontré d'erreur.
*/
function verifEmptyData()
{
    // Parcours du tableau $_POST en recherchant les éléments vides ou munis d'espaces
    foreach ($_POST as $key => $value){
        // str-replace remplace une chaine par une autre dans une chaine de caractères donnée, ici un espace par le vide dans $value.
        if (empty(str_replace(' ','',$value))){
            // on rempli un tableau associatif $messageError dont les clés sont les noms des champs avec un message rappelant que le champ concerné est vide.
            $messageError[$key] = "Voter" .$key . " est vide.";
        }
    }
    // si le tableau $messageError est vide , on renverra false, sinon, on renvoie le tableau
    if (isset($messageerror)){
        return $messageError;
    } else{
        return false;
    }
}



