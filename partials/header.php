<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <nav class="navbar" id="menu">
      <ul class="navbar-menu">
        
        <li class="navbar-item">
          <a href="index.php" class="navbar-link">
            <span class="navbar-title">Accueil</span>
          </a>
        </li>

        <li class="navbar-item">
          <a href="moi.php" class="navbar-link">
            <span class="navbar-title">Qui suis-je</span>
          </a>
        </li>
        
        <li class="navbar-item">
          <a href="contact.php" class="navbar-link">
            <span class="navbar-title">Contact</span>
          </a>
        </li>
    
      
             

<?php


            if(count($_SESSION) > 0){ ?>

              <li class="navbar-item">
                <a href="indexAdmin.php" class="navbar-link">
                <span class="navbar-title">Administration</span>
                </a>
              </li>   
            
         <?php  echo('<li class="navbar-item">
                        <div class="navbar-link deco    ">
                            '.$_SESSION['Auth']['username'].'-
                            <a class="deco" href="logout.php" > Déconnexion </a>
                        </div>
                      </li>');                        
            }
            else{
                echo ('<li class="navbar-item">
                        <a href="login.php" class="navbar-link">
                            <span class="navbar-title">Connexion</span>
                        </a>
                       </li>'); 
            }
        ?>
      </ul>
    </nav>
    <main>