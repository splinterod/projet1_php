<?php

$tests = [
    'alcool' => ['alimentation', 'Alcools', 145 ],
    'sansAlcool' => ['alimentation','Sodas,...', 118 ],
    'legume' =>['alimentation',  'Légumes', 162],
    'platsCuisines' => ['alimentation', 'Plats cuisinés', 376 ],
    'lait' => ['alimentation', 'Lait', 74],
    'yaourt' => ['alimentation', 'Yaourt', 110],
    'fromage' => ['alimentation', 'Fromages',  120],
    'beurre' => ['alimentation', 'Beurre', 76],
    'oeuf' => ['alimentation', 'Oeuf', 28],
    'poissons' => ['alimentation', 'Poisson', 168],
    'boeuf' => ['alimentation', 'Viande bovine', 650],
    'porc' => ['alimentation', 'Viande de Porc' , 199],
    'volaille' => ['alimentation', 'Volailles' ,  109 ]
    ];

function formCreation (array $alimTable) {
    foreach($alimTable as $aliment=>$detailsAliments){
          echo "<div id='formulaire'>";
          echo "<label for=$aliment class='labelAliment'>$detailsAliments[1]</label>";
          echo  "<input type='checkbox' id='scales' name=$aliment>";
          echo  "<label for=$aliment class='labelOui'>oui</label>";
          echo "</div>";
    };
}
