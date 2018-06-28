<?php

 try {
     $pdo = new PDO('mysql:host=localhost;dbname=workshop;charset=utf8;port=3306;','root', '');
     $retour["success"] = true;
     $retour["message"] = "Connexion à la base réussie";
 }catch(Exception $e) {
     $retour["success"] = false;
     $retour["message"] = "Connexion à la base échouée";
 }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <link rel="stylesheet" type="text/css" href="public/style.css">
        <link rel="stylesheet" type="text/css" href="public/w3.css">
        <link rel="stylesheet" type="text/css" href="public/styleform.css">
        <script>console.log(<?php json_encode($retour)?>)</script>