
<?php
//regex nom, prénom
$regexNameFirstname = '/^[a-zA-Z\-éèêëïîôöâäç ]+$/';
//regex age
$regexAge = '/^([1-9]|([1-9][0-9])|([1][0-3][0-9]))$/';
//tableau civilité contenant M ou Mme
$civilityList = array(0 =>'veuillez choisir une option', 1 =>'M', 2 =>'Mme');
//tableau d'erreur
$formError = array();
//lors de la validation du formulaire, on vérifie si la clé existe sinon on affiche un msg d'erreur
if (isset($_POST['civility'])){
$civility = $civilityList[$_POST['civility']];}
else if(isset($_POST['submit']) && !array_key_exists ('civility', $_POST)){
    $formError['civility'] = 'Selectionner une option';
}  
//si le champ est renseigné et que les caracteres sont validés sinon msg d'erreur
if (isset($_POST['lastname'])) {
    //htmlspecialchars() empeche l'interpretation des balise html
    $lastname = htmlspecialchars($_POST['lastname']);
    if (!preg_match($regexNameFirstname, $lastname)) {
        $formError['lastname'] = 'Saisie invalide';
    }
    if (empty($lastname)) {
        $formError['lastname'] = 'Champ obligatoire';
    }
}
if (isset($_POST['firstname'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    if (!preg_match($regexNameFirstname, $firstname)) {
        $formError['firstname'] = 'Saisie invalide';
    }
    if (empty($firstname)) {
        $formError['firstname'] = 'Champ obligatoire';
    }
}
if (isset($_POST['age'])) {
    $age = htmlspecialchars($_POST['age']);
    if (!preg_match($regexAge, $age)) {
        $formError['age'] = 'Saisie invalide';
    }
    if (empty($age)) {
        $formError['age'] = 'Champ obligatoire';
    }
}
if (isset($_POST['society'])) {
    $society = htmlspecialchars($_POST['society']);
}
?>