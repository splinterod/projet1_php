
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

        <!-- ajout du form de création d'un compte -->
        <section class="col-4">
            <div class="row">
                <h3 class="col-12 mt-4" id="titreForm">Creation de votre compte</h3>

                <form action="forestdisplay.php" method="POST" class="">
                    <div class="col-12 d-flex">
                        <label for=name class="col-7 mb-2">Votre nom</label>
                        <input type='text' id='scales' name=name class="col-5 mb-2">
                    </div>

                    <div class="col-12 d-flex">
                        <label for=email class="col-7 mb-2">Votre mail</label>
                        <input type='text' id='scales' name=email class="col-5 mb-2">
                    </div>

                    <div class="col-12 d-flex">
                        <label for=phone class="col-7 mb-2">Telephone</label>
                        <input type='text' id='scales' name=email class="col-5 mb-2">
                    </div>

                    <div class="col-12 d-flex">
                        <label for=password1 class="col-7 mb-2">Mot de passe</label>
                        <input type='text' id='scales' name=password1 class="col-5 mb-2">
                    </div>

                    <div class="col-12 d-flex">
                        <label for=password2 class="col-7 mb-2">Repetez Mot de Passe</label>
                        <input type='text' id='scales' name=password1 class="col-5 mb-2">
                    </div>


                    <div class="col-12 d-flex">
                        <input type="submit" value="Calculer mon empreinte">
                    </div>

                </form>
            </div>
        </section>


        <div class="col-3">
            <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
            <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
        </div>

    </div>
</div>

</body>

</html>

<?php require("footer.html"); ?>