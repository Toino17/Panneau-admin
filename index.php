<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
            <h1>Panneau d'administration</h1>
            <nav>
                <ul class='ulnav'>
                    <a href="index.php"><li>Accueil</li></a>
                    <a href="index.php?page=user"><li>Utilisateurs</li></a>
                    <a href="index.php?page=settings"><li>Paramètres</li></a>
                    <a href="index.php?page=login"><li>Connexion</li></a>
                </ul>
            </nav>
    </header>
    <section>
    <?php 

    if (empty($_SESSION)) {
        
    echo '<form class=\'formacceuil\' method="POST">
        <label class=\'labelid\' for="identifiant">Identifiant:</label><br></br>
        <input type="text" name="identifiant"><br></br>
        <label class =\'labelmdp\' for="password">Mot de passe:</label><br></br>
        <input type="password" name="password"><br></br>
        <!-- <label for="prenom">Prenom:</label>
        <input type="text" name="prenom"><br></br>
        <label for="age">Age:</label>
        <input type="number" name="age"><br></br> -->
        <input type="submit" name="seconnecter" value=\'Se connecter\'><br></br>
    </form>' ;}
    ?>
    <?php
        
        if (isset($_POST['seconnecter']) && ($_POST['identifiant']=='Tony') && ($_POST['password']=='17071996')){
            
            $_SESSION=['Nom'=>'Colonna-Cesari', 'Prenom'=>'Tony', 'Age'=>'26 ans', 'Role'=>'Developpeur Web'];
            echo '<p class=\'attentionnote\'>Bienvenue '. $_SESSION['Prenom'] .' !</p>';
        }


        
        
        






        
        // if (isset($_POST['envoyer']) && !empty($_POST['identifiant']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age'])) {
        //     echo $_POST['identifiant'] .'<br>';
        //     echo $_POST['nom'] .'<br>';
        //     echo $_POST['prenom'].'<br>';
        //     echo $_POST['age'].'<br>';
        // }
    ?>
    </section>
</body>
</html>