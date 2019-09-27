<?php require("codeFunction.php"); ?>
<?php require("data.php"); ?>

<? var_dump($_POST) ?>

<!-- affichage du header -->
<?php require("header.php"); ?>
<!-- definition du nombre d'arbres-->

<?php require("menuPleinePage.php"); ?>



<div class="container">
    <div class="logoleft">
        <img class="pvr" src="Images/planete_verre.jpg" class="logo_header" alt="logo de commit tree">
        <img class="pvr" src="Images/orig_exp.jpg" class="logo_header" alt="logo de commit tree">
    </div>

    <section id="myForest">
        <?php echo afficheArbre(); ?>
    </section>


    <div class="logoright">
        <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
        <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
    </div>
</div>


<!-- ajout du footer -->
<?php require("footer.html"); ?>


