<?php require("codeFunction.php"); ?>


    <!-- ajout du header -->
    <?php require("header.php"); ?>

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

