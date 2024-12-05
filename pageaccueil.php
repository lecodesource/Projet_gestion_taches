



<?php
session_start();
include("connection.php")

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <nav>

            <ul class="sidebar">
                <li onclick=hidesidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="#">Info</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Gérer les tâches</a></li>
                
            </ul>
            <ul>
                <li><a href="#">Accuiel</a></li>
                <li class="hideOnMobile"><a href="#">Info</a></li>
                <li class="hideOnMobile"><a href="login.html">Connexion</a></li>
                <li class="hideOnMobile"><a href="signup.html">Inscription</a></li>
                <li class="hideOnMobile"><a href="#">Gérer les tâches</a></li>
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                
            </ul>
        </nav>
        
        <!-- <div>
            <img src="" alt="">
        </div> -->
        <!-- <h1>Bienvenue sur la Gestion des Tâches</h1> -->

    <main>
       
    </main>
</body>
<script src="scripts.js"></script>
</html>
