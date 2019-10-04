<?php
session_start();


if ($_SESSION["numUser"]=== "") {


    echo '<script type="text/javascript">';
    echo 'alert("Vous devez etre connecté");';
    echo 'window.location.href = "userInfo.php";';
    echo '</script>';


};

?>

<?php require("function/codeFunction.php"); ?>
<?php require("data.php"); ?>

    <!-- affichage du header -->
<?php require("header.php"); ?>

<?php require("menuPleinePage.php"); ?>





<div class="">
    <div class="row centrePadding">
        <div class="col-3">
            <img class="pvr " src="Images/planete_verre.jpg" class="logo_header" alt="logo de commit tree">
            <img class="pvr" src="Images/orig_exp.jpg" class="logo_header" alt="logo de commit tree">
        </div>



        <section class="col-6" id="myForest">
            <?php require("form.php"); ?>
        </section>


        <div class="col-3">
            <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
            <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
        </div>

    </div>
</div>


    <!-- ajout du footer -->
    <?php require("footer.html"); ?>
