<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Example 4 : Les Formulaires</title>
        <!-- Import d'une Police Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

        <!-- Lien vers la feuille de style CSS de la page HTML -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Import d'une bibliothèque d'icones -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Structure conditionnelle pour vérifier que HTML5 fonctionne avec d'anciennes versions du navigateur IE -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- Bloc Position Fixe -->
        <header class="header-fix">
            <div class="header-container">
                <h1><a href=""><i class="fas fa-table"></i> Les Formulaires</h1></a>
            </div>
        </header>

        <!-- Contenu de la page -->
        <div class="container">
            <section id="connexion-article">
                <!-- Barre latérale -->
                <aside>
                    <h2><i class="fas fa-question"></i> Infos</h2>
                    <ul>
                        <li><b>method : POST</b></li>
                        <li><b>Champs obligatoires</b></li>
                        <li><b>Champs type : text et password</b></li>
                        <li><b>Case à cocher : checkbox</b></li>
                        <li><b>Bouton type : submit</b></li>
                    </ul>
                </aside>
                <!-- Article -->
                <article >
                    <h2>Formulaire de Connexion</h2>
                    <p class="marginBot50">Formulaire standard permettant de saisir ces <b>identifiants de connexion</b> : </p>
                    <form action="" name="connexion-form" method="post" class="form-element">
                        <div>
                            <label for="login">Entrer votre login : </label>
                            <input type="text" name="login" id="login" required>
                        </div>
                        <div>
                            <label for="password">Entrer votre mot de passe : </label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <div>
                            <span></span>
                            <input type="checkbox" name="remember_me" id="remember_me" value="ok"> <label for="remember_me" style="display: inline;">Se souvenir de moi</label>
                        </div>
                        <div class="align-right">
                            <span></span>
                            <input type="submit" name="formulaire" value="Connexion">
                        </div>
                    </form>

                    <?php if(!empty($_POST) && $_POST['formulaire']==="Connexion") { ?>
                    <div class="result">
                        <b>Valeurs renvoyées par le formulaire :</b><br>
                        <ul>
                            <?php foreach($_POST as $key => $value) {
                                echo '<li>'.$key.' => '.$value.'</li>';
                            } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </article>
            </section>

            <hr style="margin-top:30px;">

            <section style="margin-top:30px;">
                <!-- Barre latérale -->
                <aside>
                    <h2><i class="fas fa-question"></i> Infos</h2>
                    <ul>
                        <li><b>method : POST</b></li>
                        <li><b>Champs obligatoires</b></li>
                        <li><b>Envoi de fichier</b></li>
                        <li><b>Champs type : text, email, date, file et password</b></li>
                        <li><b>Case à cocher : checkbox</b></li>
                        <li><b>Boutons radio : radio</b></li>
                        <li><b>Bouton type : submit</b></li>
                    </ul>
                </aside>
                <!-- Article -->
                <article id="inscription-article">
                    <h2>Formulaire d'Inscription</h2>
                    <p class="marginBot50">Formulaire standard permettant de procéder à une <b>inscription en ligne</b> sur un site Internet : </p>
                    <form action="#inscription-article" name="connexion-form" method="post" class="form-element" enctype="multipart/form-data">
                        <div>
                            <label for="civilite">Entrer votre <b>Civilité</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="radio" name="civilite" id="civiliteF" value="F" required> Femme <input type="radio" name="civilite" id="civiliteH" value="H" required> Homme
                        </div>
                        <div>
                            <label for="nom">Entrer votre <b>Nom</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="text" name="nom" id="nom" required>
                        </div>
                        <div>
                            <label for="prenom">Entrer votre <b>Prénom</b> : </label>
                            <input type="text" name="prenom" id="prenom">
                        </div>
                        <div>
                            <label for="date-de-naissance">Entrer votre <b>Date de Naissance</b> : </label>
                            <input type="date" name="date-de-naissance" id="date-de-naissance">
                        </div>
                        <div>
                            <label for="photo">Entrer votre <b>photo</b> : </label>
                            <input type="file" name="photo" id="photo" accept="image/*">
                        </div>
                        <div>
                            <label for="email">Entrer votre <b>Adresse Email</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="mot-de-passe">Entrer votre <b>Mot de passe</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="password" name="mot-de-passe" id="mot-de-passe" required>
                        </div>
                        <div>
                            <label for="confirmation-mot-de-passe"><b>Confirmer</b> votre Mot de passe : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="password" name="confirmation-mot-de-passe" id="confirmation-mot-de-passe" required>
                        </div>
                        <div>
                            <label class="mandatory">* champs obligatoires</label>
                            <input type="checkbox" name="cgu" id="cgu" value="ok" required> <label for="cgu" style="display: inline;">Accepter les CGU</label>
                        </div>
                        <div class="align-right">
                            <span></span>
                            <input type="submit" name="formulaire" value="Inscription">
                        </div>
                    </form>

                    <?php if(!empty($_POST) && $_POST['formulaire']==="Inscription") { ?>
                        <div class="result">
                            <b>Valeurs renvoyées par le formulaire :</b><br>
                            <ul>
                                <?php foreach($_POST as $key => $value) {
                                    echo '<li>'.$key.' => '.$value.'</li>';
                                } ?>
                            </ul>
                            <?php
                            if(!empty($_FILES) && !empty($_FILES['photo'])) {
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["photo"]["name"]);
                                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                                    echo '<br><b>Aperçu de l\'image :</b><br>';
                                    echo '<img src="'. $target_file.'" class="thumbnail">';
                                }
                            }
                            ?>
                        </div>
                    <?php } ?>
                </article>
            </section>
            <hr style="margin-top:30px;">

            <section style="margin-top:30px;">
                <!-- Barre latérale -->
                <aside>
                    <h2><i class="fas fa-question"></i> Infos</h2>
                    <ul>
                        <li><b>method : POST</b></li>
                        <li><b>Champs obligatoires</b></li>
                        <li><b>Attribut Placeholder</b></li>
                        <li><b>Attributs maxlength et minlength</b></li>
                        <li><b>Textarea</b></li>
                        <li><b>Bouton type : submit</b></li>
                    </ul>
                </aside>
                <article id="contact-article">
                    <h2>Formulaire de Contact</h2>
                    <p class="marginBot50">Formulaire classique permettant de procéder à une <b>demande d'information</b> sur un site Internet : </p>
                    <form action="#contact-article" name="contact-form" method="post" class="form-element">
                        <div>
                            <label for="type-demande">Vous voulez contacter : <span class="mandatory" style="display: inline;">*</span></label>
                            <select id="type-demande" required>
                                <option value="">Choisissez...</option>
                                <option value="commercial">Service Commercial</option>
                                <option value="communication">Service Communication</option>
                                <option value="technique">Service Technique</option>
                            </select>
                        </div>
                        <div>
                            <label for="titre">Entrer un <b>Titre</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="text" name="titre" id="titre" placeholder="Plus de 20 caractères" minlength="20" required>
                        </div>
                        <div>
                            <label for="question" class="vertical-top">Entrer votre <b>Question</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <textarea name="question" id="question" placeholder="Maximum 1000 caractères..." maxlength="1000" required></textarea>
                        </div>
                        <div>
                            <label for="email">Entrer votre <b>Adresse Email</b> : <span class="mandatory" style="display: inline;">*</span></label>
                            <input type="email" name="email" id="email" placeholder="Votre Email..." required>
                        </div>
                        <div class="align-right">
                            <span></span>
                            <input type="submit" name="formulaire" value="Contact">
                        </div>
                    </form>

                    <?php if(!empty($_POST) && $_POST['formulaire']==="Contact") { ?>
                        <div class="result">
                            <b>Valeurs renvoyées par le formulaire :</b><br>
                            <ul>
                                <?php foreach($_POST as $key => $value) {
                                    echo '<li>'.$key.' => '.$value.'</li>';
                                } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </article>
            </section>

        </div>
    </body>
</html>