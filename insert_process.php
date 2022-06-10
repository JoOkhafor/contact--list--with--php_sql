<?php
//Variable de connection à la bdd
$db_user='root';
$db_pass='';

//Récupération des variables du formulaire
$nom = $_POST['nom'];
$message_post = $_POST["message_post"];
$priorite= $_POST["priorite"];
$type = $_POST["type"];
$termes = filter_input(INPUT_POST, "termes", FILTER_VALIDATE_BOOLEAN);

//Vérification de l'acceptaation des conditions
if (! $termes) {
    
    die('<script type="text/javascript">
    alert("Veuillez Accepter les termes et conditions");
    </script>
    Retour au formualire');
}

//Connection à la bdd
try {
    $dbh = new PDO('mysql:host=localhost;dbname=contacts_management', $db_user, $db_pass);


    $req= $dbh -> prepare('INSERT INTO message_bdd (name, message_post, priorite, type) VALUES(?, ?, ?, ?)');
    $req -> execute([$nom, $message_post, $priorite, $type]);

    header('location:contacts-table.php');

//Gestion des erreur en cas d'échec de connection à la bdd
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>