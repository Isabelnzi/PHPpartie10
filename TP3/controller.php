<?php
//Je récupère les variables de tableau donnée dans la consigne
//Tous les tableaux sont associatifs
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
// Je crée une fonction qui va me permettre de recupérer les valeurs présentes dans les tableaux
function arrayPortrait($Showportrait){
    // Une variable name qui récupère les name de chaque tableau
    $name = $Showportrait['name'];
    // Une variable firstname qui récupère le firstname de chaque tableau
    $firstname = $Showportrait['firstname'];
    // Une variable portrait qui récupère le portrait de chaque tableau
    $portrait = '<img class="col-lg-6" src="' . $Showportrait['portrait'] . '" title="' . $name . ' ' . $firstname . '" alt="' . $name . ' ' . $firstname . '"/>';     $Showportrait['portrait'];
    // Je retourne ensuite les variables a travers une concaténation
    return $name . ' ' . $firstname . ' ' . $portrait   ;
}
?>