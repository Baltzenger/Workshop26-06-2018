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


 try {
     $pdo = new PDO('mysql:host=localhost;port=3306;','root', '');
     $retour["success"] = true;
     $retour["message"] = "Connexion à la base réussie";
 }catch(Exception $e) {
     $retour["success"] = false;
     $retour["message"] = "Connexion à la base échouée";
 }
 

?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<title> Formulaire d'inscription </title>
 <link rel="stylesheet" type="text/css" href="styleform.css">
 <link rel="stylesheet" href="w3.css">
<body> 
<script type="text/javascript">


/*
function TogglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}*/




</script>

<form method="post"  action="profil.php" class="champform w3-container">  



Login: <br> <input type="text" name="login" id="login" value="$login"  required="required"> </br>

<!-- j'ai mit le champ require pour rend obligatoire comme j'ai pas réussi a afficher le message d'erreur --> 
Password: <br> <input type="password"  id="password" "name="password" value="$password"  required="required"> </br>
Mail: <br><input type="text" name="mail" id="mail" value="$mail"  required="required"></br>
<br><input type="submit" id="Envoyer" name="Envoyer"></br>
</form>


<!--
<footer class="pieddepage w3-container">

   <p>  Second Workshop EPSI B2</p>
   <p>  2017-2018</p>  
</footer>
-->



</body>
<?php require ('footer.php') ?>
