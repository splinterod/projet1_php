<?php
/* fonction affickhe le menus */
function afficheMenu () {
    $menus = [ "accueil" , "Calcul ton Empreinte", "Eradique ton impact" , "Notre histoire" , "Mon "];

    foreach ($menus as $menu) {
        echo "<div class='sousMenuPleineLargeur'> $menu </div>";
    }
}


/*fonction affichage article central
function afficheArticle () {
    $menus = [
            "article1" =>  [ "url image" , "titrearticle" , texte , lien ],
            "article2" =>  [ "url image" , "titrearticle" , texte , lien ],
            "article3" => [ "url image" , "titrearticle" , texte , lien ],  ];

}
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Commit tree</title>
    
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


<!-- debut section centrale par thierry-->

    <section id="centrale_container">


        
            <div class="bloc_left">

                <div class="page_left">

                    <div class="image_section_centrale"><img src="Images/terrain_foot.png" alt ="Terrain de foot au milieu de la forêt"></div>

                        <div class="article_left">

                            <h1 class="left_title">La déforestation : un terrain de foot toutes les 2 secondes !!!!</h1>

                            <p>Lisez l'article tickethic.fr : <br>
                                 <a href="https://www.tickethic.fr/blog/deforestation-1-terrain-de-foot-toutes-les-2-secondes/">1 terrain de foot toutes les 2 secondes</a></p>

                        </div>
                </div>
                        
            <img src="Images/logo_commitTree.png"  class="logo_left" alt="logo commit tree">

            </div>

            <div class="bloc_center">

                <div class="page_center">
        
                    <div class="image_section_centrale"><img src="Images/téléchargement.jpeg" alt="Petit arbuste fraîchement planté"></div>

                        <div class="article_center">
                        
                            <h1 class="center_title">Nos actions réalisées</h1>
                        
                            <p>Tuto pour t'apprendre à planter ton arbre, Mister Green. <a href="https://www.youtube.com/watch?v=TbO_6O9OlX8"><br>Ca va pas être facile et c'est salissant, mais c'est gentil pour la planète.</a></p>
                       
                        </div>
                        
                </div>

                <img src="Images/logo_commitTree.png" class="logo_center" alt="logo commit tree">
            
            </div> 

            <div class="bloc_right">

                <div class="page_right">

                    <div class="image_section_centrale"><img src="Images/Shrek.png" alt="Shrek and Friends"></div>
                        
                        <div class="article_right">
                            
                            <h1 class="right_title">Témoignages</h1>
                    
                            <p>Shrek et ses amis ont replanté tout seul la forêt "En Chantier", pour lutter contre leurs propres émanations de CO2 et de méthane : <a href="https://youtu.be/yHlOeFjxMBE">ils en sont très fiers !</a></p>
                         
                        </div>

                </div>       
                       
            <img src="Images/logo_commitTree.png " class="logo_right" alt="logo commit tree">
                        
            </div>
        
               
        
    </section>


    <section id="centrale_container">



        <div class="bloc_center">

            <div class="page_center">

                <div class="image_section_centrale"><img src="Images/téléchargement.jpeg" alt="Petit arbuste fraîchement planté"></div>

                <div class="article_center">

                    <h1 class="center_title">Nos actions réalisées</h1>

                    <p>Tuto pour t'apprendre à planter ton arbre, Mister Green. <a href="https://www.youtube.com/watch?v=TbO_6O9OlX8"><br>Ca va pas être facile et c'est salissant, mais c'est gentil pour la planète.</a></p>

                </div>

            </div>

            <img src="Images/logo_commitTree.png" class="logo_center" alt="logo commit tree">

        </div>





    </section>


    <!-- ajout du footer -->
    <?php require("footer.html"); ?>

</body>

<!-- appel des fonctions javascript-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>

</html>