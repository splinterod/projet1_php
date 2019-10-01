<?php

use function MongoDB\BSON\fromJSON;


function PageTitle($menus) {

    $adresseEncours = $_SERVER["REQUEST_URI"];

    foreach ($menus as $key => $infosMenus) {
        if ($adresseEncours === $key) {
            $titlePage =$infosMenus[1];
        }
    }

    echo "<title> $titlePage </title>";
}

/* Associé la bonne page css */
function PageStyleCss() {

    $adresseEncours = $_SERVER["REQUEST_URI"];


    if ($adresseEncours === '/index.php') {
        $stylePage ="stylesheet/style.css";
    }
    if ($adresseEncours === '/calculempreinte.php') {
        $stylePage ="stylesheet/styleP1.css";
    }
    if ($adresseEncours === '/eradiquempreinte.php') {
        $stylePage ="stylesheet/styleP2.css";
    }
    if ($adresseEncours === '/forestdisplay.php') {
        $stylePage ="stylesheet/stylesheetForest.php";
    }
    if ($adresseEncours === '/userInfo.php') {
        $stylePage ="stylesheet/stylesheetForest.php";
    }

    echo "<link href=$stylePage rel='stylesheet' type='text/css'>";
}

/* fonction affiche le menu*/
function afficheMenu($menus) {


    $adresse = $_SERVER["REQUEST_URI"];

    foreach ($menus as $key => $infosMenus) {

        if ($adresse === $key) {
            echo "<div class='sousMenuPleineLargeurPageEnCours'> <a  href=$key class='lienMenuBlanc''>$infosMenus[0]</a> </div>";
        } else {

            echo "<div class='sousMenuPleineLargeur'> <a href=$key class='lienMenuBlancPageEnCours'>$infosMenus[0]</a> </div>";
        }

    }


}


/* fonction qui affiche les articles */
function afficheArticle ($infosArticles) {

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
        echo "<img src='../Images/logo_commitTree.png'  class='logo_$positionArticle' alt='logo commit tree'>";
        echo "</div>";

    }
}


/*Affichage div arbre*/

function afficheArbre ($nbArbre) {
    for ($i=1 ; $i<=$nbArbre ;$i++) {

        $idImage="img3d$i";

        $typeImg = mt_rand ( 0 , 3 );

        echo "<div id=$idImage><img src='Images/arbre" . $typeImg . ".png' alt='un arbre' height=300px  width=auto   /></div>";

        /*<img src='arbre.png' alt='un arbre' height=100px   width=auto   />*/
    }}




?>
