<?php
header('content-type: text/css');

$nbArbreToDisplay = $_GET['nbArbre'];


function idCssArbre ($nbArbre) {

    for ($i=1 ; $i<=$nbArbre ;$i++) {

        $positionX= mt_rand (0,400);
        $positionY= 200-$i*295;
        $positionZ = mt_rand (-400,0);
        $position = $positionX ."px," . $positionY . "px," . $positionZ ."px";

        $idImage="img3d$i";

        echo "#$idImage {transform: translate3d(" . $position .");}";
        echo "\n";
    }
}
?>


*{
    box-sizing: border-box;
  margin:0px;
  padding:0px;
 }

body {
    width:100%;
    font-family: Roboto, 'Times New Roman', Times, serif;
    /* min-width: 600px;*/
 }



/*affichage de la foret */
#myForest
{
margin-top:50px;
margin-bottom:50px;
width: 700px;
height:600px;
perspective: 800px;
position: relative;
z-index:-1;
}

<?php echo idCssArbre($nbArbreToDisplay); ?>


.row{
margin-left: -15px;
margin-right: -15px;
}

.pvr {
display: block;
width: 360px;
height: 240px;
margin-left:: 60px;
margin-top: 60px;
border-radius: 1em;
border-bottom: solid 2px greenyellow;
}

.centrePadding {
padding-left: 60px;
padding-right: 60px;
padding-bottom:40px;
padding-top: 40px;}

