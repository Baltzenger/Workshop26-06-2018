<?$login = 'test';
var_dump(isset($login)); // TRUE
unset ($login);


else  
 echo("Utilisateur inconnu");

?>
<!DOCTYPE HTML>  
<html>
<head>

<title> Page de Profil  </title>
 

Avatar:<img> 


<br>Username: <?php echo $_POST["login"];?></br> 
Desc: <br><input type="comment" name="description" value="$description">  



</br>

</head>
<body> 