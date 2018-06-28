<?$login = 'test';
var_dump(isset($login)); // TRUE
unset ($login);


else  
 echo("Utilisateur inconnu");

?>
<!DOCTYPE HTML>  
<html>
<head>
	
<meta charset="utf-8">
</head>
<title> Page de Profil  </title>
 

Avatar:<img> 



<br>Username: <?php echo $_POST["login"];?></br> 
<br><textarea  row="8"  cols="40"   name="description ">Description de l'utilisateur </textarea>


<body> 
