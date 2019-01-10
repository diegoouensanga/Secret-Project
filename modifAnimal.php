<?php
include("fonctions.php");
session_start();
if (!empty($_POST['nomAnimal'])){
    $post =  htmlspecialchars($_POST['nomAnimal']);
    $req = Database::execute('INSERT INTO animaux(nom,id_utilisateur) VALUES(:nom,:id_utilisateur)',Array(
        'nom' => $post,
        'id_utilisateur' => $_SESSION['id']
    ));
    $reponse = Database::execute('SELECT LAST_INSERT_ID() AS last_id FROM animaux');
    $data = $reponse ->fetch();
    header("Location:/animaux.php?animal={$data['last_id']}");
}
if (empty($_POST['nomAnimal'])){
    header("Location:/animaux.php?animal=GestionAnimaux");
    $id =  $_GET['animal'];
    $req = Database::execute('DELETE FROM animaux WHERE id = :id AND id_utilisateur = :id_utilisateur',Array(
        'id' => $id,
        'id_utilisateur' => $_SESSION['id']
    ));
}