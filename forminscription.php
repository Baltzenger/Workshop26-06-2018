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

	// connexion a la bdd 
	$workshopbdd= new PDO('mysql:host=localhost;dbname=workshopbdd',$user,$pass);
}catch (Exception $e){

}

?>
        <?php require('head.php');?>
    </head>
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