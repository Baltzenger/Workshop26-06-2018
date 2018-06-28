<?php
$login = 'test';
var_dump(isset($login)); // TRUE
unset ($login);


?>
<!DOCTYPE HTML>  
<html>
<head>
	
<meta charset="utf-8">
<?php require('head.php') ?>
</head>
 <?php require ('menu.php') ?>
<title> Page de Profil  </title>
 
<div id="content">
  <div class="card">
  		<img src="public/avatar.png" style="width:25%"></img>
      <div class="w3-container">
  			<p> Nouvel Arrivant</p>
  			<br>Username></br> 
  			<p> Nb Coinmunity Restants </p> 	
		</div>
	</div>
    <div class="banderolle">
        <div class="w3-container">
          <p>  Liste des derniers  succés  </p>
          <div id="achievements">
            <img src="public/Achivement1.png" height="36"  ></img>
            <img src="public/Achivement2.png" height="36" ></img>
            <img src="public/Achivement3.png" height="36"></img>
           
        </div>
        </div>
      </div>
 	<br><textarea  row="14"  cols="40"   name="description ">Description de l'utilisateur </textarea>
</div>




<?php include ('footer.php')?>
<body> 
