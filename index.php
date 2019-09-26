<?php require("codeFunction.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <?php echo PageTitle()  ?>
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