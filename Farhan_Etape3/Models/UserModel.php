<!--
Fonction createUser
------------------------------
BUT : ajouter les données encodées par l'utilisateur dans la tables des utilisateur
IN : $pdo reprennant toutes les information de connexion
-->
<?php
function createUser($pdo)
{
    try {
        //definition de la requêted'insertion en utilisant la notion de paramétre 
        $query = 'insert into utilisateurs(nomUser, prenomUser, loginUser, passWordUser, emailUser, role) values (:nomUser, :prenomUser, :loginUser, :passWordUser, :emailUser, :role)';
        //préparation de la requête 
        $ajouteUser = $pdo->prepare($query);
        //exécution en attribuant les valeurs récupérées dans le formulaire aux paramétres
        $ajouteUser->execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prenom"],
            'loginUser' => $_POST["login"],
            'passWordUser' => $_POST["mot_de_passe"],
            'emailUser' => $_POST["email"],
            'role' => 'user'
            ]);   
 
    } catch (PDOEXCEPTION $e) {
        $message = $e->getMessage();
        die($message);  }
}

/*
Fonction connectUser
--------------------------
BUT : rechercher les données de l'utilisateur dans la base de données pour les mémoriser dans la variable session
IN : $pdo reprennant toutes les informations dre connexion 
*/
function connectUser($pdo)
{
    try {
        //définition de la requête select en utilisant la notion paramèter
        $query = 'select * from utilisateurs where loginUser = :loginUser and passWordUser = :passWordUser';
        //préparation de la requête 
        $connectUser = $pdo->prepare($query);
        //exécution en attribuant les valeurs récupérées dans le formulaire aux paramétres
        $connectUser->execute([
            'loginUser' => $_POST["login"],
            'passWordUser' => $_POST["mot_de_passe"]
        ]);
        //stokage des données trouvées dans la variable $user
        $user = $connectUser->fetch();
        if (!$user){
            return false;
        }
        else{
            //ajout de celle-ci à la variable session
            $_SESSION["user"] = $user;
            return true;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

