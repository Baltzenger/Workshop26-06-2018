<?php
 header('Content-Type: application/json');

 try {
     $pdo = new PDO('mysql:host=localhost;port=3306;','root', '');
     $retour["success"] = true;
     $retour["message"] = "Connexion à la base réussie";
 }catch(Exception $e) {
     $retour["success"] = false;
     $retour["message"] = "Connexion à la base échouée";
 }

 echo json_encode($retour);;