<?php 
 if(isset($_POST['Envoyer']))
  {
  	if(empty($_POST['login']))
  	{

  		echo 'Vous dvez  renseigner le champ login ';
  	}
  	else if(empty($_POST['password']))
  	{

  		echo 'Vous devez renseigner le champ mot de passe';
  	}
  	else if (empty($_POST['mail']))
  	{
  		echo 'Vous devez renseigner le champ mail';
  	}
}






$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "workshopbdd";


 

?>
<!DOCTYPE HTML>  
<html>
<head>
<meta charset="utf-8">	
<?php require('head.php') ?>
</head>
<title> Formulaire d'inscription </title>
<?php require ('menu.php') ?> 
<body> 


<div id="content">
<form method="post"  action="profil.php" class="champform w3-container">  



Login: <br> <input type="text" name="login" id="login" value="$login"  required="required"> </br>

<!-- j'ai mit le champ require pour rend obligatoire comme j'ai pas réussi a afficher le message d'erreur --> 
Password: <br> <input type="password"   id="password" "name="password" value="$password"  required="required"> </br>
Mail: <br><input type="text" name="mail" id="mail" value="$mail"  required="required"></br>
<br><input type="submit" id="Envoyer" name="Envoyer"></br>
</form>
</div>

<!--
<footer class="pieddepage w3-container">

   <p>  Second Workshop EPSI B2</p>
   <p>  2017-2018</p>  
</footer>
-->


<?php include ('footer.php')?>
</body>

<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password=$_POST["password"];
$login=$_POST["login"];
$mail=$_POST["mail"];

 try {
     $pdo = new PDO('mysql:host=localhost;port=3306;dbname=workshopbdd',$hostname,$username,'');
     $retour["success"] = true;
     $retour["message"] = "Connexion à la base réussie";
     $pdo>setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 	 $sql="INSERT INTO  'test' (`login`,`password`,`mail`)  VALUES ('$login','$password','$mail')";
 	 if($pdo->query(sql))
 	 {
 	 	echo "Donnes ajouté a la base";
 	}
 	 else
 	 {
 	 	echo "erreur, pendant traitement";
 	 } 
 }catch(Exception $e) {
     $retour["success"] = false;
     $retour["message"] = "Connexion à la base échouée";
 }
}
 

  ?>
