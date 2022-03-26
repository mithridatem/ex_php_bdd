<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./script/script.js" defer></script>
    <link rel="stylesheet" href="./css/style.css">
    <!-- import de la police google roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Ajouter un article</title>
</head>
<body>
     <!-- Menu et imports -->
    <?php
        //ajout du menu     
        include './menu.php';
        //import du fichier de connexion à la BDD
        include './utils/connectBdd.php';   
        //import du fichier de fonctions (BDD-SQL)
        include './fonction/fonction.php';   
    ?>
    <!-- Formulaire -->
    <h3>Ajouter un article en BDD</h3>
    <form action="" method="post">
        <p>Saisir le nom de l'article :</p>
        <input type="text" name="name_article">
        <p>Saisir le contenu de l'article</p>
        <textarea name="content_article"></textarea>
        <p><input type="submit" value="Enregistrer"></p>
    </form>
    <!-- Affichage -->
    <div id="zone"></div>
    <!--Code PHP-->
    <?php
        
    ?>
</body>
</html>