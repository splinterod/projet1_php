<?php
session_start();

if (!empty($_POST)) {
    require_once 'connectBDD.php';
    $pdo = new \PDO(DSN, USER, PASS);

    $prenom = trim($_POST["name"]);
    $pass = trim($_POST["password1"]);



    $query = "SELECT  prenom , paswword FROM nomuser WHERE prenom='" . $prenom . "' AND paswword='" . $pass . "'";

    $statement = $pdo->query($query);
    /* var_dump($statement); */
   $user = $statement->fetch();


    if (!empty($user)) {
        $_SESSION["numUser"] = $prenom;
       /* echo '<script >';
        echo  ' alert("Vous etes connecté!")';
        echo '</script >'; */
        $pdo = null;
        header('Location: calculempreinte.php');
        exit;
    };

    $pdo = null;
    }


?>

<?php require("function/codeFunction.php"); ?>
<?php require("data.php"); ?>

<!-- affichage du header -->
<?php require("header.php"); ?>

<?php require("menuPleinePage.php"); ?>

<div class="">
<div class="row d-flex justify-content-between pl-4 pr-4">
    <div class="col-3">
        <img class="pvr " src="Images/planete_verre.jpg" class="logo_header" alt="logo de commit tree">
        <img class="pvr" src="Images/orig_exp.jpg" class="logo_header" alt="logo de commit tree">
    </div>

    <!-- ajout du form de création d'un compte -->
    <section class="col-4">
        <form method="POST" action="">
            <div class="row centrePadding ">
                <h3 class="col-12 mt-4" id="titreForm">Connexion à votre compte</h3>


                <div class="col-12 d-flex">
                    <label for=name class="col-5 mb-2">Votre nom</label>
                    <input type='text' id='scales' name=name class="col-5 mb-2">
                </div>
                <div class="col-6 offset-5 <?php if (empty($nameErr)) echo "d-none"; ?>"><span
                    ><?php if (isset($nameErr)) echo $nameErr; ?></span></div>


                <div class="col-12 d-flex">
                    <label for=password1 class="col-5 mb-2">Mot de passe</label>
                    <input type='text' id='scales' name=password1 class="col-5 mb-2">
                </div>
                <div class="col-6 offset-5 <?php if (empty($errPass)) echo "d-none"; ?>"><span
                    ><?php if (isset($errPass)) echo $errPass; ?></span></div>


                <div class="col-12 d-flex justify-content-center">
                    <input type="submit" value="Connexion">
                </div>

        </form>

    </section>


    <div class="col-3">
        <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
        <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
    </div>

</div>
</div>


<?php require("footer.html"); ?>
