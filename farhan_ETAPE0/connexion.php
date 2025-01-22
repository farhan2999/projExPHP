<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/base.css">
    <link rel="stylesheet" href="Css/animation.css">
    <link rel="stylesheet" href="Css/form.css">
    <link rel="stylesheet" href="Css/flex.css"> 
    <title>BB</title>
</head>
<body>
<header>
        <ul class="flexible space-evenly">
             <!-- grand écran -->
            <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="inscriptionOrEditProfil.php">Inscription</a></li>
            <li  class="menu"><a href="connexion.php">Connexion</a></li>
            <!-- petit écran -->
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="inscriptionOrEditProfil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"> <a href="connexion.php"><ion-icon size="large" name="enter-outline"></ion-icon></a></li>
        </ul>
    </header>
    <main>
        <div class="flex space-evenly wrap">
            <form method="post" action="">
                <fieldset>
                    <legend>Se connecter</legend>
                    <div class="mb-3">
                        <label for="Login" class="form-label">Login</label>
                        <input type="text" placeholder="Login" class="form-control" id="login" aria-describedby="emailHelp" name="login" required>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Mot de passe</label>
                        <input type="password" placeholder="Mot de passe" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                    </div>
                    <div>
                        <button name="btnEnvoi" class="btn btn-primary">Envoi</button>
                    </div>
                </fieldset>
                <div>
                    <h4 class="text-danger">Pas encore inscrit ?</h4>
                    <a href="inscriptionOrEditProfil.php" class="btn btn-secondary">Cliquez ici !</a>
                </div>
            </form>
  
        </div>
    </main>
    <footer>
        <div class="flexible space-between align-item-center">
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>