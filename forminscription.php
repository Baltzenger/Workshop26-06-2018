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
    <?php require('head.php');?>
    </head>
    <body>
        <?php require ('menu.php')?>
        <div id="content">
            <form method="post" action="profil.php" class="champform w3-container">
                <label>Login: </label><br />
                <input type="text" name="login" id="login" value="<?php echo $login ?>"  required="required"> <br />

                <!-- j'ai mit le champ require pour rend obligatoire comme j'ai pas réussi a afficher le message d'erreur -->
                <label>Password: </label><br />
                <input type="password"  id="password" "name="password" value="<?php echo $password ?>"  required="required"> <br />
                <label>Mail: </label><br />
                <input type="text" name="mail" id="mail" value="<?php echo $mail ?>"  required="required"><br />
                <input type="submit" id="Envoyer" name="Envoyer"></br>
            </form>
        </div>
        <?php include ('footer.php')?>
    </body>
</html>
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
