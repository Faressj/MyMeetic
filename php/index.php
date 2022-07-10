<?php
include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>

    <header style="color: white;">My Meetic</header>
    <div class= formulaires>
        <div class=conenxion>
            <h3 class=titleconnexion>Connexion</h3>
            <div class = "formulaireconnexion">

               <form name="FORMconnexion" id="FORM2" method="POST">
               
                    <label for="femme">E-mail</label>
                    <input class="email" type="email" id="mailconnexion" name="user_mail" placeholder="adresse@mail.com">
                    <br><br><br>

                    <label for="femme">Mot de passe</label>
                    <input type="password" id="passconnexion" name="password" minlength="8" required>
                    <br><br><br>

                    <div class="submit1">
                        <input class="submitconnexion" type="submit" name="submitconnexion">
                    </div>

                </form>
            </div>
                    <?php
                        $connexion = new ConnectDb;
                        $connexion->connexion();
                    ?>
        </div>

        <div class=inscription>
            <h3 class=titleinscription>Inscription</h3>
            <div class = "formulaireinscription">
            <p><strong>Veuillez remplir le formulaire suivant :</strong></p>

                <form name="FORMinscription" id="FORM1" method="get">

                    <div class="name">
                        <label for="name">Nom</label>
                        <input class="fnom" type="text" id="nom" name="nom" minlength="2" placeholder="min 2 caractères">
                    </div>
                    <br/>

                    <div class="prenom">
                        <label for="prenom">Prénom</label>
                        <input class="prenom" type="text" id="prenom" name="prenom" minlength="2" placeholder="min 2 caractères">
                    </div>
                    <br/>
                    
                    <div class="date">
                        <label for="date">Date de naissance :</label>
                        <input class="field_date" type="date" id="date" value="2000-01-01" min="1980-01-01" max="2021-01-01" name="datedenaissance">
                    </div>
                    <br/>
                    
                    <div class="Genre">
                        <div class="genre1"> Genre : <br>
                            <label for="femme">Femme</label>
                            <input type="radio" id="femme" name="sexe" value="femme">
                        </div>
                        <div class="genre2">
                            <label for="homme">Homme</label>
                            <input type="radio" id="homme" name="sexe" value="homme">
                        </div>
                        <div class="genre3">
                            <label for="autre">Autre</label>
                            <input type="radio" id="autre" name="sexe" value="autre">
                        </div>
                    </div>
                    <br>

                    <div class="ville">
                        <label for="ville">Ville :</label>
                        <input class="ville" type="text" id="ville" name="ville" placeholder="Ville">
                    </div>
                    <br/>

                    <div class="mail">
                        <label for="mail">E-mail :</label>
                        <input class="email" type="email" id="mailinscription" name="user_mail" placeholder="adresse@mail.com">
                    </div>
                    <br/>
                

                    <h4 class = "Hobbies">Hobbies</h4>
                    <div class="checkbox">
                        <div>
                            <label for="Jeux_video">Jeux video</label>
                            <input type="checkbox" id="Jeux_video">
                        </div>
                        <div>
                            <label for="Cinema">Cinema</label>
                            <input type="checkbox" id="Cinema">
                        </div>
                        <div>
                            <label for="Lecture">Lecture</label>
                            <input type="checkbox" id="Lecture">
                        </div>
                        <div>
                            <label for="Sport">Sport</label>
                            <input type="checkbox" id="Sport">
                        </div>
                        <div>
                            <label for="Informatique">Informatique</label>
                            <input type="checkbox" id="Informatique">
                        </div>
                    </div>
                    <br/>

                    <div class="passions">
                        <h4 class = "Passions">Dis-nous ce que tu aimes :</h4>
                        <input class="passions" type="text" id="passions" name="passions" placeholder="Parle-nous une peu plus de toi">
                    </div>
                    <br/>
                    <div class="password">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="passinscription" name="password" minlength="8" required>
                        
                    </div>
                    <br/>

                    <div class="submit2">
                        <input class ="submitinscription" type="submit" value="Validation" name="submitinscription">
                    </div>
                    <?php
                        $inscription = new ConnectDb;
                        $inscription->inscription();
                    ?>
                </form>
                
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>