<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!-- import de la police google roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>sélectionner les articles à afficher</title>
</head>
<body>
     <!-- Menu et imports -->
     <?php
        //ajout du menu    
        include './menu.php';
        //import du fichier de connexion à la BDD
        include './utils/connectBdd.php';   
        //import du fichier de fonction
        include './fonction/fonction.php';     
    ?>
    <h3>Cocher les articles à afficher :</h3>
    <p class="label">(Si vert il est affiché, si rouge il est masqué)</p>
    <!-- zone liste des articles -->
    <div>
        <form action="" method="post">
            <!-- code PHP -->
            <?php 

            ?>
            <input type="submit" value="Sélectionner">
        </form>
    <!-- code PHP -->
    <?php

    ?>
    </div>
</body>
</html>