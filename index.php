<?php
session_start();
if (!isset($_SESSION["numUser"])){
$_SESSION["numUser"]=""; }

?>

<?php require("function/codeFunction.php"); ?>
<?php require("data.php"); ?>

    <!-- ajout du header -->
    <?php require("header.php"); ?>

    <?php require("menuPleinePage.php");?>




<!-- debut section centrale : affichage des articles-->

    <section id="centrale_container">

        <?php afficheArticle($infosArticles) ?>

    </section>



    <!-- ajout du footer -->
    <?php require("footer.html"); ?>

