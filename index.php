<? session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["numUser"]="prout";

var_dump($_SESSION);

?>

<?php require("function/codeFunction.php"); ?>
<?php require("data.php"); ?>

    <!-- ajout du header -->
    <?php require("header.php"); ?>

    <?php require("menuPleinePage.php"); ?>

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

        <?php afficheArticle($infosArticles) ?>

    </section>



    <!-- ajout du footer -->
    <?php require("footer.html"); ?>

