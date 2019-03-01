<?php
    if(!isset($_SESSION["UserID"]))
    {
?>
<div class="mdl-layout__tab-panel is-active" id="overview">
    <section class="section--center mdl-grid ">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <form method="POST">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" id="utilisateur" name="utilisateur">
                            <label class="mdl-textfield__label" for="utilisateur">Nom d'usager...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password" id="motDePasse" name="motDePasse">
                            <label class="mdl-textfield__label" for="motDePasse">Mot de Passe...</label>
                        </div>
                        
                    </form>
                    
                    <div>
                    <?php
                        if(isset($erreur)){
                            if($erreur==true){
                                echo "votre nom d utilisateur ou mot de passe est incorrect";
                            }
                        }
                     ?>
                    </div>
                    <input  class= "connexion mdl-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" type="submit" value="Log in">
                </div>
            </div>
             
        </div>
    </section>
</div>

                    <?php
    }
    else
    {
?>
                    Vous êtes déjà authentifiés...
                    <a href="index.php?requete=Logout">Se déconnecter</a>
                    <?php
    }
?>




                    <!--<a class="bouton" href='index.php?requete=formulaireInscription'>Inscrivez-vous</a>-->
