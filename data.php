<?php

/*creation table alim */

$alimTable = array();
if (($handle = fopen("data/alimTable.csv", 'r')) !== FALSE)
{
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
            $alimTable[$row[0]] = array ($row[1],$row[2],$row[3]) ;
    }
    fclose($handle);
}

/*creation table menus */
$menus = array();
if (($handle = fopen("data/menuUrl.csv", 'r')) !== FALSE)
{
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
        $menus[$row[0]] = array ($row[1],$row[2],$row[3]) ;
    }
    fclose($handle);
}

/*creation table article */
$infosArticles = array();
if (($handle = fopen("data/articles.csv", 'r')) !== FALSE)
{
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
        $infosArticles[] = array ($row[0],$row[1],$row[2],$row[3],$row[4]) ;
    }
    fclose($handle);
}

/*

$infosArticles2 = [
    [ 'Images/terrain_foot.png' ,"Terrain de foot au milieu de la forêt","La déforestation : un terrain de foot toutes les 2 secondes !!!!" ,  "Lisez l'article tickethic.fr :" ,  "https://www.tickethic.fr/blog/deforestation-1-terrain-de-foot-toutes-les-2-secondes",  "1 terrain de foot toutes les 2 secondes"],
    [ "Images/téléchargement.jpeg","Petit arbuste fraîchement planté","Nos actions réalisées" , "Tuto pour t'apprendre à planter ton arbre, Mister Green." , "https://www.youtube.com/watch?v=TbO_6O9OlX8","Ca va pas être facile et c'est salissant, mais c'est gentil pour la planète."],
    [ "Images/Shrek.png","Shrek and Friends", "Témoignages", "Shrek et ses amis ont replanté tout seul la forêt En Chantier pour lutter contre leurs propres émanations de CO2 et de méthane : ", "https://youtu.be/yHlOeFjxMBE", "ils en sont très fiers"],
];


$alimTable2 = [
    'alcool' => ['alimentation', 'Alcools', 145 ],
    'sansAlcool' => ['alimentation','Sodas,...', 118 ],
    'legume' =>['alimentation',  'Légumes', 162],
    'platsCuisines' => ['alimentation', 'Plats cuisinés', 376 ],
    'lait' => ['alimentation', 'Lait', 74],
    'yaourt' => ['alimentation', 'Yaourt', 110],
    'fromage' => ['alimentation', 'Fromages',  120],
    'beurre' => ['alimentation', 'Beurre', 76],
    'oeuf' => ['alimentation', 'Oeuf', 28],
    'poissons' => ['alimentation', 'Poisson', 168],
    'boeuf' => ['alimentation', 'Viande bovine', 650],
    'porc' => ['alimentation', 'Viande de Porc' , 199],
    'volaille' => ['alimentation', 'Volailles' ,  109 ]
];


$menus2 = [ '/index.php' => ["accueil" , "Commit Tree", "Commit Tree" ],
    '/calculempreinte.php' => [ "Calcul ton Empreinte", "Calcul impact CO2" ],
    '/eradiquempreinte.php' => ["Eradique ton impact", "Planter un arbre"],
    '/forestdisplay.php' => ["La foret pour te sauver", "Ma foret En Chantier"],
];

*/
?>