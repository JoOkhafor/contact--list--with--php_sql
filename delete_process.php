<?php
//Variable de connection à la bdd
$db_user='root';
$db_pass='';

//Récupération de l' ID à supprimer 
$del_id = $_GET['del_id'];

//Connection à la bdd
try {
    $dbh = new PDO('mysql:host=localhost;dbname=contacts_management', $db_user, $db_pass);

//Gestion des erreur en cas d'échec de connection à la bdd
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$req= $dbh -> prepare('DELETE * FROM  message_bdd WHERE id=?');
$req -> execute($del_id);

header('location:contacts-table.php');

?>