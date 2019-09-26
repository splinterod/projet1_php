<?php require("codeFunction.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styleP2.css" rel="stylesheet">
    <?php echo PageTitle()  ?>
    
</head>
<body>


<!-- affichage du header -->
<?php require("header.html"); ?>

<div id="menuPleinePage">
    <!-- info menu dynamique -->
    <?php afficheMenu() ?>
</div>

    <!-- debut baniere, section laurent-->
 <div class="container">
  <div class="logoleft">
  <img class="pvr" src="Images/planete_verre.jpg" class="logo_header" alt="logo de commit tree">
  <img class="pvr" src="Images/orig_exp.jpg" class="logo_header" alt="logo de commit tree">
</div>

    <section id="calculco">
    <h1>Eradique ton empreinte CO2</h1>
      <form action="" method="post">
        <div id="formulaire">
          <label for="">Nombre de kg de CO2 émis :</label>
          <input class="premier" type="text" name="CO2 émis">
        </div>
        <div id="formulaire">
          <label for="nom">Nombre d'arbres à planter :</label>
          <input class="second" type="text" name="nb arbres">
        </div>

        <div id="formulaire">
        <label for="nom">Montant de mon achat :</label>
        <input class="trois " type="text" name="nb arbres">
        </div>

        <div id="formulaire"> 
          <label for="message">Commentaires et projet à soutenir :</label>
          <textarea type="text" name="Montant"></textarea>
        </div>       
        <div class="button">
          <input type="submit" value="Envoyer la proposition" />
           </div>

        <h1 href="calculempreinte.html" target=_blank>Re-Calcule ton empreinte de CO2</h1>
       
            <a id="button" href="calculempreinte.html" target=_blank> j'y cours j'y vole </a>
        
      </form>
    </section>
    <div class="logoright">
    <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
    <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
  </div>
  </div>

<!-- ajout du footer -->
<?php require("footer.html"); ?>


</body>

<!-- appel des fonctions javascript-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>

</html>