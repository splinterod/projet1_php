<?php


function formCreation (array $alimTable) {

    foreach($alimTable as $aliment => $detailsAliments){

          echo "<div id='formulaire'>";
          echo "<label for=$aliment class='labelAliment'>$detailsAliments[1]</label>";
          echo  "<input type='checkbox' id='scales' name=$aliment>";
          echo  "<label for=$aliment class='labelOui'>oui</label>";
          echo "</div>";
    };
}
