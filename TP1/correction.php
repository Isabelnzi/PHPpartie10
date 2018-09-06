<!--insere le controleur du formulaire ou se trouve tout le code PHP-->
<?php include 'controllerForm.php' ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <title>TP</title>
    </head>
    <body>
        <!--affiche les resultat si aucune érreur est compté dans le tableau-->
        <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
            <p><?= $lastName ?></p>
            <p><?= $firstName ?></p>
            <p><?= $dateOfBirth ?></p>
            <p><?= $countryOfBirth ?></p>
            <p><?= $nationality ?></p>
            <p><?= $address ?></p>
            <p><?= $mail ?></p>
            <p><?= $phone ?></p>
            <p><?= $degree ?></p>
            <p><?= $numberPE ?></p>
            <p><?= $badge ?></p>
            <p><?= $codeAca ?></p>
            <p><?= $super ?></p>
            <p><?= $hacks ?></p>
            <p><?= $exp ?></p>
            <!--Sinon affiche le formulaire-->
        <?php } else { ?>
            <form action="correction.php" method="POST">
                <div class="form-group">
                    <label for="exp">Nom</label>
                    <input class="form-control"  id="lastName" type="text" name="lastName" <!-- garde en mémoire la saisie dans le champs-->value="<?= isset($lastName) ? $lastName : '' ?>" />
                           <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                    <label for="firstName">Prénom</label>
                    <input class="form-control" id="firstName" type="text" name="firstName" value="<?= isset($firstName) ? $firstName : '' ?>" />
                    <p class="text-danger"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                    <label for="dateOfBirth">Date de naissance</label>
                    <input class="form-control" id="dateOfBirth" name="dateOfBirth" value="<?= isset($dateOfBirth) ? $dateOfBirth : '' ?>" />
                    <p class="text-danger"><?= isset($formError['dateOfBirth']) ? $formError['dateOfBirth'] : ''; ?></p>
                    <label for="countryOfBirth">Pays de naissance</label>
                    <input class="form-control" id="countryOfBirth" type="text" name="countryOfBirth" value="<?= isset($countryOfBirth) ? $countryOfBirth : '' ?>" />
                    <p class="text-danger"><?= isset($formError['countryOfBirth']) ? $formError['countryOfBirth'] : ''; ?></p>
                    <label for="nationality">Nationalité</label>
                    <input class="form-control" id="nationality" type="text" name="nationality" value="<?= isset($nationality) ? $nationality : '' ?>" />
                    <p class="text-danger"><?= isset($formError['nationality']) ? $formError['nationality'] : ''; ?></p>
                    <label for="address">Adresse</label>
                    <input class="form-control" id="address" type="text" name="address" value="<?= isset($address) ? $address : '' ?>" />
                    <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                    <label for="mail">Email</label>
                    <input class="form-control" id="mail" type="text" name="mail" value="<?= isset($mail) ? $mail : '' ?>" />
                    <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                    <label for="phone">Téléphone</label>
                    <input class="form-control" id="phone" name="phone" value="<?= isset($phone) ? $phone : '' ?>" />
                    <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                    <label for="degree">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</label>
                    <input class="form-control" id="degree" type="text" name="degree" value="<?= isset($degree) ? $degree : '' ?>" />
                    <p class="text-danger"><?= isset($formError['degree']) ? $formError['degree'] : ''; ?></p>
                    <label for="numberPE">Numéro pôle emploi</label>
                    <input class="form-control" id="numberPE" name="numberPE" value="<?= isset($numberPE) ? $numberPE : '' ?>" />
                    <p class="text-danger"><?= isset($formError['numberPE']) ? $formError['numberPE'] : ''; ?></p>
                    <label for="badge">Nombre de badge (facultatif)</label>
                    <input class="form-control" id="badge" name="badge" value="<?= isset($badge) ? $badge : '' ?>" />
                    <p class="text-danger"><?= isset($formError['badge']) ? $formError['badge'] : ''; ?></p>
                    <label for="codeAca">Liens codecademy (facultatif)</label>
                    <input class="form-control" id="codeAca" type="text" name="codeAca" value="<?= isset($codeAca) ? $codeAca : '' ?>" />
                    <p class="text-danger"><?= isset($formError['codeAca']) ? $formError['codeAca'] : ''; ?></p>
                    <label for="super">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                    <textarea id="super" name="super"><?= isset($super) ? $super : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['super']) ? $formError['super'] : ''; ?></p>
                    <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea id="hacks" name="hacks"><?= isset($hacks) ? $hacks : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['hacks']) ? $formError['hacks'] : ''; ?></p>
                    <label for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea id="exp" name="exp"><?= isset($exp) ? $exp : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['exp']) ? $formError['exp'] : ''; ?></p>
                    <input class="form-control" type="submit" value="Envoyer" name="submit"/>
                </div>
            </form>
        <?php } ?>
    </body>
</html>

