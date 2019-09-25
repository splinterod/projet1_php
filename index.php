<?php

function affichePageTitle() {
if ($adresse = '/index.php') { $titlePage ="Commit Tree"; }
if ($adresse = '/calculeempreinte.php') { $titlePage ="Calcul impact CO2"; }
if ($adresse = '/eradiqueempreinte.php') { $titlePage ="Planter un arbre"; }

echo $titlePage;
}


/* fonction affiche le menu*/
function afficheMenu () {
    $menus = [ '/index.php' => "accueil" ,
        '/calculeempreinte.php' => "Calcul ton Empreinte",
        '/eradiqueempreinte.php' => "Eradique ton impact"];

    $adresse = $_SERVER["REQUEST_URI"];

    foreach ($menus as $url => $menu) {

        if ($url === $adresse) {
            echo "<div class='sousMenuPleineLargeurPageEnCours'> <a href=$url>$menu</a> </div>";
        } else {

            echo "<div class='sousMenuPleineLargeur'> <a href=$url>$menu</a> </div>";
        }

    }


}


/* fonction qui affiche les articles */
function afficheArticle () {
    $infosArticles = [
        [ 'Images/terrain_foot.png' ,"Terrain de foot au milieu de la forêt","La déforestation : un terrain de foot toutes les 2 secondes !!!!" ,  "Lisez l'article tickethic.fr :" ,  "https://www.tickethic.fr/blog/deforestation-1-terrain-de-foot-toutes-les-2-secondes",  "1 terrain de foot toutes les 2 secondes"],
        [ "Images/téléchargement.jpeg","Petit arbuste fraîchement planté","Nos actions réalisées" , "Tuto pour t'apprendre à planter ton arbre, Mister Green." , "https://www.youtube.com/watch?v=TbO_6O9OlX8","Ca va pas être facile et c'est salissant, mais c'est gentil pour la planète."],
        [ "Images/Shrek.png","Shrek and Friends", "Témoignages", "Shrek et ses amis ont replanté tout seul la forêt En Chantier pour lutter contre leurs propres émanations de CO2 et de méthane : ", "https://youtu.be/yHlOeFjxMBE", "ils en sont très fiers"],
        [ 'Images/terrain_foot.png' ,"Terrain de foot au milieu de la forêt","La déforestation : un terrain de foot toutes les 2 secondes !!!!" ,  "Lisez l'article tickethic.fr :" ,  "https://www.tickethic.fr/blog/deforestation-1-terrain-de-foot-toutes-les-2-secondes",  "1 terrain de foot toutes les 2 secondes"],
        [ "Images/téléchargement.jpeg","Petit arbuste fraîchement planté","Nos actions réalisées" , "Tuto pour t'apprendre à planter ton arbre, Mister Green." , "https://www.youtube.com/watch?v=TbO_6O9OlX8","Ca va pas être facile et c'est salissant, mais c'est gentil pour la planète."],


        ];
    foreach ($infosArticles as $key =>  $articles ) {

        if ($key === 0 or $key === 3) {
            $positionArticle = "left";
        }

        if ($key === 1 or $key === 4) {
            $positionArticle = "center";
        }

        if ($key === 2 or $key === 5) {
            $positionArticle = "right";
        }

        echo "<div class='bloc_$positionArticle'>";
            echo "<div class='page_$positionArticle'>";
            echo "<div class='image_section_centrale'><img src=$articles[0]  alt =$articles[1]></div>";
            echo "<div class='article_$positionArticle'>";
            echo "<h1 class='title_$positionArticle'>$articles[2]</h1>";
            echo "<p> $articles[3]<br> <a href=$articles[3]>$articles[4]</a></p>";
            echo "</div></div>";
            echo "<img src='Images/logo_commitTree.png'  class='logo_$positionArticle' alt='logo commit tree'>";
            echo "</div>";

    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title><?php echo affichePageTitle()  ?></title>
    
</head>
<body>
    <!-- ajout du header -->
    <?php require("header.html"); ?>

    <div id="menuPleinePage">
        <!-- info menu dynamique -->
        <?php afficheMenu() ?>
    </div>


    <!-- debut baniere, section laurent-->
    <section id="calculco">
            <div class="button">
                <h1>Calcul ton empreinte CO2</h1>    
                <a href="calculempreinte.php" >
                <input type="submit" value="Go!! Vers les calculs" />
                </a> 
            </div>
            <div class="button">
                <h1>Eradique ton empreinte CO2</h1>
                <a href="eradiquempreinte.php" >
                <input type="submit" value="Go!! Vers l'action" />
                </a>
            </div>
     </section>
<!-- fin section baniere, laurent-->


<!-- debut section centrale : affichage des articles-->

    <section id="centrale_container">

        <?php afficheArticle() ?>

    </section>



    <!-- ajout du footer -->
    <?php require("footer.html"); ?>

</body>

<!-- appel des fonctions javascript-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>

</html>