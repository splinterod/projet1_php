<?php
session_start(); ?>

<?php require("function/codeFunction.php"); ?>
<?php require("data.php"); ?>

    <!-- affichage du header -->
<?php require("header.php"); ?>

<?php require("menuPleinePage.php"); ?>

<?php

// define variables and set to empty values


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* creation erreurDetecte à nul */

    $erreurDetecte =0;

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $erreurDetecte++;
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $erreurDetecte++;
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["phone"])) {
        $errPhone = "Phone is required";
        $erreurDetecte++;
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["password1"])) {
        $errPass = "Password is required";
        $erreurDetecte++;
    } else {
        $password1 = $_POST["password1"];
        if (empty($_POST["password2"])) {
            $errPass = "Password is required";
            $erreurDetecte++;
        } else {
            $password2 = $_POST["password2"];
            /* test si password1 =password2 */
            if ($password1 != $password2) {
                $errPass = "Pass must be the same";
                $erreurDetecte++;
            }
        }
    }


    if ($erreurDetecte === 0 ) {
       /* on enregistre les données dans une bdd */



        if (!empty($_POST))
        {
            require_once 'connectBDD.php';
            $pdo = new \PDO(DSN, USER, PASS);


            $prenom = trim($_POST["name"]);
            $mail = trim($_POST["email"]);
            $tel = trim($_POST["phone"]);
            $pass = trim($_POST["password1"]);

            $query = "INSERT INTO nomuser (prenom, mail , telephone, paswword) VALUES ('$prenom', '$mail', '$tel' , '$pass')";
            $pdo->exec($query);

            $pdo=null;

            /* on mets le nom du user */
            $_SESSION["numUser"]=$prenom;

            header('Location: calculempreinte.php');
            exit;

        }


    }


}

?>


    <div class="">
        <div class="row d-flex justify-content-between pl-4 pr-4">
            <div class="col-3">
                <img class="pvr " src="Images/planete_verre.jpg" class="logo_header" alt="logo de commit tree">
                <img class="pvr" src="Images/orig_exp.jpg" class="logo_header" alt="logo de commit tree">
            </div>

            <!-- ajout du form de création d'un compte -->
            <section class="col-4">
                <form method="POST" action="userInfo.php">
                    <div class="row centrePadding ">
                        <h3 class="col-12 mt-4" id="titreForm">Creation de votre compte</h3>


                        <div class="col-12 d-flex">
                            <label for=name class="col-5 mb-2">Votre nom</label>
                            <input type='text' id='scales' name=name class="col-5 mb-2">
                        </div>
                        <div class="col-6 offset-5 <?php if (empty($nameErr)) echo "d-none"; ?>"><span
                                    ><?php if (isset($nameErr)) echo $nameErr; ?></span></div>

                        <div class="col-12 d-flex">
                            <label for=email class="col-5 mb-2">Votre mail</label>
                            <input type='text' id='scales' name=email class="col-5 mb-2">
                        </div>
                        <div class="col-6 offset-5 <?php if (empty($emailErr)) echo "d-none"; ?>"><span
                                    ><?php if (isset($emailErr)) echo $emailErr; ?></span></div>

                        <div class="col-12 d-flex">
                            <label for=phone class="col-5 mb-2">Telephone</label>
                            <input type='text' id='scales' name=phone class="col-5 mb-2">
                        </div>
                        <div class="col-6 offset-5 <?php if (empty($errPhone)) echo "d-none"; ?>"><span
                                    ><?php if (isset($errPhone)) echo $errPhone; ?></span></div>

                        <div class="col-12 d-flex">
                            <label for=password1 class="col-5 mb-2">Mot de passe</label>
                            <input type='text' id='scales' name=password1 class="col-5 mb-2">
                        </div>
                        <div class="col-6 offset-5 <?php if (empty($errPass)) echo "d-none"; ?>"><span
                                    ><?php if (isset($errPass)) echo $errPass; ?></span></div>

                        <div class="col-12 d-flex">
                            <label for=password2 class="col-5 mb-2">Repetez Mot de Passe</label>
                            <input type='text' id='scales' name=password2 class="col-5 mb-2">
                        </div>


                        <div class="col-12 d-flex justify-content-center">
                            <input type="submit" value="S'inscrire">
                        </div>

                </form>
                </form>
            </section>


            <div class="col-3">
                <img class="pvr" src="Images/Planetet.jpg" class="logo_header" alt="logo de commit tree">
                <img class="pvr" src="Images/Planpb.jpg" class="logo_header" alt="logo de commit tree">
            </div>

        </div>
    </div>


<?php require("footer.html"); ?>