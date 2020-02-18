<?php


echo "HELLO?";


include('./Ingredient.php');
include('./Appareil.php');
include('./Ustensile.php');
include('./Recette.php');

$ingredients = [
    $chocolat = new Ingredient('chocolat', 250, 'gr'),
    $oeuf = new Ingredient('oeuf', 4, 'unité'),
    $sucre = new Ingredient('sucre', 100, 'gr'),
    $sel = new Ingredient('sel', 1, 'gr')
];

$ustensiles = [
    $saladier = new Ustensile('saladier', 'contient', 'verre'),
    $fouet = new Ustensile('fouet', 'fouette', 'inox'),
    $casserole = new Ustensile('casserole', 'chauffe', 'inox')

];

$appareils = [
    $batteur = new Appareil('batteur', 'melange'),
    $gaziniere = new Appareil('gaziniere', 'cuit'),
    $frigo = new Appareil('frigo', 'refroidit')
];

$MousseChoco = new Recette($ingredients, $ustensiles, $appareils);
foreach($MousseChoco->getIngredients() as $ingredient){
    echo "Vous aurez besoin de". $ingredient->getQuantity() .''. $ingredient->getMesure() ."de". $ingredient->getName() .'<br>';
}
foreach($MousseChoco->getUStensiles() as $ustensile){
    echo "Vous allez utiliser". $ustensile->getName() . 'en'. $ustensile->getMateriaux() ."pour". $ustensile->getUtility() .'<br>';
}
foreach($MousseChoco->getAppareils() as $appareil){
    echo "vous allez utiliser".$appareil->getName() .'pour'. $appareil->getUtility() .'<br>';
}
var_dump($MousseChoco->getUstensiles());
var_dump($MousseChoco->getAppareils());
