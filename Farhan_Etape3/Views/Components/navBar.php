<!-- deux possibilités de menu selon qu'on est connecté ou pas -->
<?php if (isset($_SESSION["user"])) : ?>
<li  class="menu"><a href="mesecoles">Mes écoles</a></li> 
<li  class="menu"><a href="profil">profil/a></li> 
<li  class="menu"><a href="deconnexion">Déconnexion</a></li> 
<?php else : ?>
    <li  class="menu"><a href="inscription">Inscription</a></li>
    <li  class="menu"><a href="connexion">Connexion</a></li> 
<?php endif ?>