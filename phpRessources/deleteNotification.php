<?php
include ("fonctions.php");
session_start();
header("Location: ../notifications.php");
$id = $_GET['id'];
$req = Database::execute('DELETE FROM notifications WHERE id = :id AND utilisateur_id = :utilisateur_id', Array(
    'id' => $id,
    'utilisateur_id' => $_SESSION['id']
));