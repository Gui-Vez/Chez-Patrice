<?php 
    // Ajouter une variable qui indique dans quelle page nous sommes
    $page = 'accueil';
    
    // Inclure le fichier d'entête
    include('entete.php');
?>

<html>
    <section>
        <div class="bloc-1">
            <h1 class="nom-page"><?= $titre['accueil'] ?></h1>
        </div>
        
        
        <div class="bloc-2">
            <article class="slogan">
                <h2><?= $sl_h2 ?></h2>
                <p><?= $sl_p ?></p>
            </article>
            
            <article class="desc">
                <div class="textes">
                    <div class="texte-1">
                        <p><?= $dc_tx1_1 ?> <a class="desc-lien" href="spectacles.php"><?= $dc_tx1_2 ?></a><br><?= $dc_tx1_3 ?> <a class="desc-lien" href="restaurant.php"><?= $dc_tx1_4 ?></a> <?= $dc_tx1_5 ?><br><?= $dc_tx1_6 ?><br><?= $dc_tx1_7 ?><br><?= $dc_tx1_8 ?><br><?= $dc_tx1_9 ?></p>
                    </div>

                    <div class="texte-2">
                        <p><?= $dc_tx2_1 ?><br><?= $dc_tx2_2 ?><br><?= $dc_tx2_3 ?><br><?= $dc_tx2_4 ?><br><?= $dc_tx2_5 ?><br><?= $dc_tx2_6 ?></p>
                    </div>
                </div>

                <div class="images">
                    <div class="image-1">
                        <img src="../img/1-Entete/Entete.jpg">
                    </div>

                    <div class="image-2">
                        <img src="../img/2-Description/Shows.jpg">
                    </div>
                </div>
            </article>
        </div>
        
        
        <div class="bloc-3">
            <ul class="raccourcis">
                <li><a href="spectacles.php" ><?= $titre['spectacles'] ?></a></li>
                <li><a href="billeterie.php" ><?= $titre['billeterie'] ?></a></li>
                <li><a href="restaurant.php" ><?= $titre['restaurant'] ?></a></li>
                <li><a href="avis.php"       ><?= $titre['avis'] ?></a></li>
            </ul>
        </div>
    </section>

</html>

<?php
    // Inclure le fichier de pied de page
    include('pied2page.php');
?>