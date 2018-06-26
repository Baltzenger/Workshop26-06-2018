<?php

echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <link type="text/css" href="style.css">
    </head>
    <body>
        <div id="content">
            '.require ('menu.php').'
            <div id="banner">
                <img src="banner.jpg">
            </div>
            <div>
                <h1>Notre plateforme, notre concept</h1>
                <p>ToutLeMondeC est une plateforme d\'enseignemment collaborative qui part du principe que tout le
                 monde à des connaissances et qu\'elles méritent d\'être partagées.<br/> C\'est donc ici que VOUS 
                 intervennez !
                </p>
                <p>
                    Afin que cette plateforme soit alimentée, nous avons besoin de votre participation. Vous aussi, 
                    comme tout le monde, vous avez des connaissances qui peuvent être utiles à tout un cha
                </p>
            </div>
        </div>
    </body>
</html>';