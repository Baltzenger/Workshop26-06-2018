        <div id="header">
            <span class="left">
                <div id="identity">
                    <span id="brand"><a href="index.php">Learn2Share</a></span><br />
                    <span id="slogan">Tout le monde a une connaissance à partager</span>
                </div>
            </span>
            <span class="right">
                <div id="userInfos">
                    <?php ?>
                </div>
                <div id="menu">
                    <nav>
                        <ul>
                            <li class="w3-dropdown-hover"><span>Rubrique</span>
                                <div class="w3-dropdown-content">
                                    <?php
                                        $getDomains = $pdo->query("SELECT * FROM rubrique;");
                                        while ($domains = $getDomains->fetch()){
                                            echo '<a href="listTuto.php?rubrique='.$domains["nom_rubrique"].'">
                                                <span>'.$domains["nom_rubrique"].'</span>
                                            </a>';
                                        }
                                    ?>
                                </div>
                            </li>
                            <li>Liste des Tutoriels</li>
                            <li>Forum</li>
                        </ul>
                    </nav>
                </div>
            </span>
        </div>