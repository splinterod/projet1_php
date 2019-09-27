

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fct php pour associé la bonne page de style -->
    <?php echo PageStyleCss()  ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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

