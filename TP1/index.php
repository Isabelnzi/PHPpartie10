<?php
//declaration des regex pour tester la sécurité du formulaire
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\'-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]+$/';
$regexNumberLetter ='/^[0-9A-z]+$/';
if (isset($_POST['lastname'])){
    $lastname = $_POST['lastname'];
 if(!preg_match(regexName,lastname)){
     echo 'Saisie invalide.';
 }
 if(empty($lastname)){
     echo 'Champ obligatoired';
 }
} 
?>      
<!Doctype html>
<html>
       <head>
        <meta charset = "utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/style.css"/>
        <title>TP1</title>
</head>
<body>
   <!--si le formulaire est remplie afficher les resultats-->
<?php if(empty($_POST)) {
        ?>
    <form class="form-group" ethod="Post" action="#" enctype="multipart/form-data">
        <!--créatiton d'un formulaire pour l'inscription d'un apprenant en utilisant la methode POST-->
        
                        <label for = "lastname">Nom : </label>
                        <input class="form-controll" type="text" name ="lastname" placeholder="Nom" id="lastname"/>
                        <label for = "firstname">Prénom : </label>
                        <input class="form-controll" type ="text" name ="firstname" placeholder="Prénom" id="firstname" />
                        <label for = "birthDate">Date de naissance : </label>
                        <input class="form-controll" type = "date" name = "birthDate" id="birthDate" />
                        <label for = "Country of origin">Pays de naissance : </label>
                        <input class="form-controll" type = "text" name = "origin" id="origin"/>
                        <label for = "nationality">Nationalité : </label>
                        <input class="form-controll" type="text" name="nationality" id="nationality"
                        <label for = "address">Adresse : </label>
                        <input class="form-controll" type="text" name="address" id="address"/>
                        <label for = "mail">Email : </label>
                        <input class="form-controll" type="mail" name ="mail" placeholder="exemple@exemple.com" id="mail"/>
                        <label for = "phoneNumber">Téléphone : </label>
                        <input class="form-controll" type ="text" name = "phoneNumber" id="phoneNumber"/>
                        <label for ="grade">Diplôme</label>
                        <select name= "grade" id="grade">
                            <option selected disabled>Veuillez choisir votre niveaux</option> 
                            <option>Sans diplôme</option>
                            <option>Bac</option>
                            <option>Bac+2</option>
                            <option>Bac+3 ou supérieur</option>
                    </select>
                        <label for = "poleEmploiNumber">Numéro pôle emploi : </label>
                        <input class="form-controll" type ="text" name="poleEmploiNumber" id="poleEmploiNumber"/>
                        <label for = "badgeNumber">Nombre de badge : </label>
                        <input class="form-controll" type ="number" name="badgeNumber" id="badgeNumber"/>
                        <label for = "codecademy">Lien codecademy : </label>
                        <input class="form-controll" type="text" name="codecademy" id="codeacademy"/>
                        <label for = "superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                        <textarea rows = "4" cols = "23" name ="superHero" id="superHero"class="form-controll" ></textarea>
                        <label for = "hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :    </label>
                        <textarea rows = "4" cols = "23" name = "hacks" id="hacks"></textarea>
                        <label for = "progExp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <textarea rows="4" cols="23" name="programation" id="programation"></textarea>
  
                <input type="submit" value=" Envoyer !" id="submit" />
                </div>
                </di>
            </div>
</form>
    <?php
    //condition pour tester le contenu des input et tester les regex
    //plus affichage des messages erreurs
        } else {
            if(isset($_POST['lastname'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['lastname'])){
                    echo 'Nom : ' . $_POST['lastname'];
                }else{
                    echo 'Veuillez entrer votre Nom';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['firstname'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['firstname'])){
                    echo 'Prénom : ' . $_POST['firstname'];
                }else{
                    echo 'Veuillez entrer votre Prénom';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['birthDate'])){
            ?>
            <p>
                <?php
                if($_POST['birthDate']){
                    echo 'Date de naissance : ' . $_POST['birthDate'];
                }else{
                    echo 'Veuillez inscrire votre date de naissance';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['originalCountry'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['origin'])){
                    echo 'Pays de naissance : ' . $_POST['origin'];
                }else{
                    echo 'Veuillez inscrire votre Pays de naissance';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['nationality'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['nationality'])){
                    echo 'Nationalité : ' . $_POST['nationality'];
                }else{
                    echo 'Veuillez entrer votre nationalité';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['address'])){
            ?>
            <p>
                <?php
                if(preg_match($regexAddress, $_POST['address'])){
                    echo 'Adresse : ' . $_POST['address'];
                }else{
                    echo 'Veuillez inscrire votre adresse';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['mail'])){
            ?>
            <p>
                <?php
                if(preg_match($regexMail, $_POST['mail'])){
                    echo 'Email : ' . $_POST['mail'];
                }else{
                    echo 'Veuillez inscrire votre adresse email';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['phoneNumber'])){
            ?>
            <p>
                <?php
                if(preg_match($regexPhoneNumber, $_POST['phoneNumber'])){
                    echo 'Téléphone : ' . $_POST['phoneNumber'];
                }else{
                    echo 'Veuillez inscrire votre numéro de téléphone';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['grade'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['grade'])){
                    echo 'Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : ' . $_POST['grade'];
                }else{
                    echo 'Veuillez faire un choix';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['poleEmploiNumber'])){
            ?>
            <p>
                <?php
                if(preg_match($regexNumberLetter, $_POST['poleEmploiNumber'])){
                    echo 'Numéro pôle emploi : ' . $_POST['poleEmploiNumber'];
                }else{
                    echo 'Veuillez entrer votre numéro valide';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['badgeNumber'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['badgeNumber'])){
                    echo 'Nombre de badge : ' . $_POST['badgeNumber'];
                }else{
                    echo 'Veuillez choisir un numéro valide';
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['codecademy'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['codecademy'])){
                    echo 'Lien codecademy : ' . $_POST['codecademy'];
                }else{
                    echo 'Veuillez entrer un lien valide';
                }
                ?>
            </p
            <?php
            }
            if(isset($_POST['superHero'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['superHero'])){
                    echo 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? ' . $_POST['superHero'];
                }ELSE{
                    echo 'Veuillez renseigner le champs';
                }
                
                ?>
            </p>
            <?php
            }
            if(isset($_POST['hacks'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['hacks'])){
                    echo 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) ' . $_POST['hacks'];
                }else{
                  echo 'Veuillez renseigner les champs';  
                }
                ?>
            </p>
            <?php
            }
            if(isset($_POST['progExp'])){
            ?>
            <p>
                <?php
                if(preg_match($regexText, $_POST['programation'])){
                    echo 'Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? ' . $_POST['progExp'];
                }else{
                    echo 'Veuillez renseigner les champs';
                }
                ?>
            </p>
            <?php
            }
        }
        ?>
</body>
</html>

