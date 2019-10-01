<!-- >On recupere les infos et on calcule le bilan carbone -->

<?php
$nbArbreToDisplay=0;
foreach ($_POST as $value) {
    $nbArbreToDisplay= $nbArbreToDisplay+10;
};
?>


<?php require("function/codeFunction.php"); ?>
<?php require("data.php"); ?>

<!-- affichage du header -->
<!-- ATTENTION ON FAIT UNE MODIF POUR ENVOYER L'inof nb d'arbre à a fiche styleSHEET CSS!!!! -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <?php echo "<link href=stylesheetForest.php?nbArbre=" . $nbArbreToDisplay . " rel='stylesheet' type='text/css'>" ?>
    <?php echo PageTitle($menus)  ?>
</head>

<body>
<div id="div_burger_menu" >
    <h2>Bonjour Pickle Rick</h2>

    <h3>Mon compte</h3>
    <ul>
        <li><a>Mon empreinte carbone</a></li>
        <li><a>Un peu de CO2, un peu plus de verdures</a></li>
        <li><a>Suivre ma foret</a></li>
        <li>Aggrandir mon projet</li>
        <li><a>Se deconnecter</a></li>
    </ul>

    <h3>Commit Tree</h3>
    <ul>
        <li><a>Calcul Empreinte carbone</a></li>
        <li><a>Eradiquer son empreinte Carbone</a></li>
        <li><a>Exemple de projets</a></li>
        <li><a>Temoignages</a></li>
        <li><a>about us</a></li>
    </ul>

    <div id="menuburger_div_logo ouvre_menuburger">
        <img src="Images/logo_commitTree.JPG" class="logo_header" alt="logo de commit tree">
    </div>
</div>

<!-- Header en ligne 15 à ligne 40 -->
<header>
    <div id="bouton_menu_burger" onclick="apparitionMenuBurger()" >
        <img src="Images/menu_burger.png" id="image_menuburger" alt="menu">
    </div>
    <div class="header_vide">

    </div>
    <div id="div_logo">
        <img src="Images/logo_commitTree.png" class="logo_header" alt="logo de commit tree">
    </div>
    <div class="header_vide">

    </div>
    <div>
        <div class="div_usr_infos"><img src="Images/header_logo_username.png" id="header_logo_username" alt="logo username"></div>
        <div class="div_usr_infos">Pickle Rick</div>
        <div class="div_usr_infos">420 trees</div>
    </div>
</header>

<!-- definition du nombre d'arbres-->

<?php require("menuPleinePage.php"); ?>



<div id='InfoArbrePleinePage'>
    <?php echo "<div>Pour couvrir ton empreinte Carbone, il te faut " . $nbArbreToDisplay . " arbres!!!</div>"; ?>
</div>


<div class="container">
    <div class="logoleft">
        <img class="pvr" src="Images/planete_verre.jpg" class="logo_header" alt="logo de commit tree">
        <img class="pvr" src="Images/orig_exp.jpg" class="logo_header" alt="logo de commit tree">
    </div>



    <section id="myForest">
        <?php echo afficheArbre($nbArbreToDisplay); ?>
    </section>


    <div class="logoright">
        <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
        <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
    </div>
</div>


<!-- ajout du footer -->
<?php require("footer.html"); ?>


