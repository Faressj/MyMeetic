<?php

// $db = new PDO('mysql:host=localhost;dbname=meetic', 'root', '');
static $i = 1002;
class ConnectDb
{

    private $_serverName = "localhost";
    private $_dbName = "meetic";
    private $_dbUser = "root";
    private $_dbPassword = "root";
    private $conn = false;

    function inscription()
    {
        $i= 1002;
        $db = $this->conn = new PDO("mysql:host=$this->_serverName;dbname=$this->_dbName", $this->_dbUser, $this->_dbPassword);
        if (isset($_POST['submitinscription'])) {
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            }
            if (!empty($_POST['prenom'])) {
                $prenom = $_POST['prenom'];
            }
            if (!empty($_POST['datedenaissance'])) {
                $datedenaissance = $_POST['datedenaissance'];
            }
            if (!empty($_POST['sexe'])) {
                $sexe = $_POST['sexe'];
            }
            if (!empty($_POST['ville'])) {
                $ville = $_POST['ville'];
            }
            if (!empty($_POST['user_mail'])) {
                $user_mail = $_POST['user_mail'];
            }
            if (!empty($_POST['passions'])) {
                $passions = $_POST['passions'];
            }
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
            }
            // $db->query("INSERT INTO `users` (`Nom`, `Prenom`, `Birthdate`, `Genre`, `Ville`, `Email`, `Password`, `Loisirs`, `id`) VALUES ($name, $prenom, $datedenaissance, $sexe, $ville, $user_mail, $password, $passions, 1003)");
            $db->query("INSERT INTO `users` (`Nom`, `Prenom`, `Birthdate`, `Genre`, `Ville`, `Email`, `Password`, `Loisirs`, `id`) VALUES ('Bite', 'Cul', '11/01/1994', 'Homme', 'Lyonn','bite@gmalaucul.fr','Password1','Bite', 1003)");

            $i++;
        }
    }
    function connect()
    {
        $db = $this->conn = new PDO("mysql:host=$this->_serverName;dbname=$this->_dbName", $this->_dbUser, $this->_dbPassword);
        try{
            return $this->conn;
        }catch(PDOException $e){
            echo "error" . $e->getMessage();
        }
    }
    function recherche()
    {
        $db = $this->conn = new PDO("mysql:host=$this->_serverName;dbname=$this->_dbName", $this->_dbUser, $this->_dbPassword);
        if (isset($_GET['submit'])) {
            $villeorigine = "Lyon";
            $allusers = $db->query('SELECT * FROM users WHERE Ville = "'.$villeorigine.'" ORDER BY id ASC;');
            if (!empty($_GET['city'])) {
                $ville = $_GET['city'];
                $allusers = $db->query('SELECT * FROM users WHERE Ville = "'.$ville.'" ORDER BY id ASC;');
            }
            if (!empty($_GET['genre'])) {
                $genre = $_GET['genre'];
                $allusers = $db->query('SELECT * FROM users WHERE Ville = "'.$ville.'" AND Genre = "'.$genre.'" ORDER BY id ASC;');
            }
            /*if(!empty($_GET['loisirs'])){
                $loisirs = $_GET['loisirs'];
                foreach ($loisirs as $loisir){ 
                    $allusers = $db->query('SELECT * FROM users WHERE Ville = "'.$ville.'" AND Genre = "'.$genre.'" ORDER BY id DESC;');$loisir;
                }
            }*/
            if ($allusers->rowCount() > 0) {
                while ($user = $allusers->fetch()) {
                    ?><div class=user>
                    <p class=prenom><?php echo $user['Prenom'];?></p>
                    <p class=nom><?php echo $user['Nom'];?></p>
                    <p class=genre><?php echo $user['Genre'];?></p>
                    <button class=ami>Ajouter</p>
                    </div><?php
                }
            } else {
                ?><p class="erreurconnexion"><?php echo "Aucun utilisateur ne correspond à vos critères";?></p><?php
            }
        }
    }
    function connexion()
    {
        $db = $this->conn = new PDO("mysql:host=$this->_serverName;dbname=$this->_dbName", $this->_dbUser, $this->_dbPassword);
        $mail = "";
        $password = "";
        if (isset($_POST['submitconnexion'])) {
            if (!empty($_POST['user_mail'])) {
                $mail = $_POST['user_mail'];
            }
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
            }
            
            if ($allusers->rowCount() > 0) {
                ?><p><?php echo "Connexion réussie";?></p><?php
                { echo '<meta http-equiv="Refresh" content="0;URL=pagerecherche.php">'; } 
            } else {
                ?><p class=erreurconnexion><?php echo "Adresse Mail ou mot de passe incorrect";?></p><?php
            }
        }
    }
    function disconnect()
    {
        $this->conn = NULL;
        return $this->conn;
    }

}
$connection = new connectDb();
$connection->connect();
?>


