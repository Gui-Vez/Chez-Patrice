<?php
    // Remplacer le dossier des fichiers par une variable
    $siglesLangue = [];

    // Créer un tableau contenant les différents fichiers et répertoires
    $contenuTextes = scandir('../textes');
    
    // Boucle qui cherche les sigles
    for ($i=0; $i < count($contenuTextes) ; $i++)
    {
        // Prendre ce fichier de texte
        $fichierTexte = $contenuTextes[$i];
    
        // Si le fichier ne correspond pas à "." ou "..",
        if ($fichierTexte != '.' && $fichierTexte != '..')
        {
            // Ajouter les fichiers dans le groupe des sigles
            $siglesLangue[] = strtoupper(substr($fichierTexte, strpos($fichierTexte, '-') + 1, 2));
        }
    }
    

    // i18-n
    // 1) Déterminer la langue par défaut
    $langueActive = 'FR';
    
    // 2) Voir s'il y a un témoin http contenant un choix de langue fait auparavant
    if ( isset($_COOKIE['choixLangue']) )
    {
        // Associer le cookie pour la langue
        $langueActive = $_COOKIE['choixLangue'];

    }
    
    // 3) Si un choix de langue est explicitement fait...
    if ( isset($_GET['langue']) )
    {
        // Obtenir la langue
        $langueActive = $_GET['langue'];
    
        // Stocker le cookie pendant un mois
        setcookie('choixLangue', $langueActive, time()+30*24*60*60);
          
    }
    
      // Inclure les textes du site web
      include('../textes/cm-' . $langueActive . '.php');
?>

<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $descs[$page]; ?>">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Guillaume Vézina">
    <title>Chez Patrice - <?= $titre[$page]; ?></title>

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/media.css">

    <link rel="Shortcut icon" type="image/x-icon" href="img/1-Entete/Icone.png">
</head>

<body>
    <header>
        <nav>
            <div class="icone">
                <a href="accueil.php">
                <img src="../img/1-Entete/Logo.png">
                </a>
            </div>

            <div class="liens">
                <ul>
                    <li><a href="accueil.php"    class="<?= ($page == 'accueil')    ? 'actif' : ''; ?>"><?= $titre['accueil'] ?></a>
                    <li><a href="spectacles.php" class="<?= ($page == 'spectacles') ? 'actif' : ''; ?>"><?= $titre['spectacles'] ?></a>
                    <li><a href="billeterie.php" class="<?= ($page == 'billeterie') ? 'actif' : ''; ?>"><?= $titre['billeterie'] ?></a>
                    <li><a href="restaurant.php" class="<?= ($page == 'restaurant') ? 'actif' : ''; ?>"><?= $titre['restaurant'] ?></a>
                    <li><a href="avis.php"       class="<?= ($page == 'avis')       ? 'actif' : ''; ?>"><?= $titre['avis'] ?></a>
                </ul>
            </div>
            
            <div class="langages">
                
            <?php for ($i=0; $i < count($siglesLangue); $i++) { ?>              

            <button><a href="?langue=<?= $siglesLangue[$i] ?>" class="<?= ($langueActive == $siglesLangue[$i]) ? 'actif' : ''; ?>" ><?= $siglesLangue[$i]; ?></a></button>

            <?php }?>
            </div>

        </nav>
        
        <div class="baniere-principale">
            <img class="banniere" src="../img/1-Entete/Bar.jpg">
        </div>
    </header>
</html>