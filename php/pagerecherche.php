<?php
include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <header id="navbar" class="nav">
        <img class="logo" alt="logo" src="../Images/logo.png">
        <div class="dropdown">
            <a href="#" class="content1">Options</a>
            <div class="content">
                <br>
                <a href="profil.php">Profil</a>
                <br>
                <a href="pagerecherche.php">Page recherche</a>
                
                <br>
                <a href="index.php">Deconnexion</a>
                <?php
                    $disconnect = new ConnectDb;
                    $disconnect->disconnect();
                ?>
                <br>
            </div>
        </div>
    </header>
    <div class=entete> <h1>Rechercher</h1>
    <form name="form" action="#" method="get">

        <input id="searchbar1" type="search" name="city" placeholder="Chercher une Ville">

        <select id="genre" name="genre">
            <option value="">Genre</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
        </select>

        <div name="loisirs">
            Dance : <input type="checkbox" id="dance" name="loisirs[]" value ="Dance">
            Skateboard : <input type="checkbox" id="skateboard" name="loisirs[]" value="Skateboard">
            Mangas : <input type="checkbox" id="manga" name="loisirs[]" value="Mangas">
            Licorne : <input type="checkbox" id="licorne" name="loisirs[]" value="Licorne">
            Cuisiner : <input type="checkbox" id="cuisiner" name="loisirs[]" value = "Cuisiner">
            Autres : <input id="searchbar2" type="search" name="loisirs[]" placeholder="Autres: Préciser...">
        </div>
     
            <input type='submit' class='submit' name="submit">
    </form>
    </div>

        <?php
            $recherche = new ConnectDb;
            $recherche->recherche();
        ?>
        
</body>
</html>