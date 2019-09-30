<?php require("codeFunction.php"); ?>
<?php require("data.php"); ?>

<!-- affichage du header -->
<?php require("header.php"); ?>
<!-- definition du nombre d'arbres-->

<?php require("menuPleinePage.php"); ?>

<?php $nbArbreToDisplay= 8;?>

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


