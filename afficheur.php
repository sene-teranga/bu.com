<!--definition du chemin du projet-->
<?php define("ROOT",  str_replace('afficheur.php', '', $_SERVER["SCRIPT_FILENAME"] )); ?>
<?php require (ROOT.'app/controleur.php'); ?>
<?php require (ROOT.'includes/dompdf/autoload.inc.php'); ?>
<?php require (ROOT.'app/model.php'); ?>
<!--extraction des parametres(cordonnée du fichier)-->
<?php $param =explode("/", $_POST["controleur"]); $controleur=$param[0]; $action = $param[1];?>
<!--apel du controleur et modele principal-->
<!--localisation du fichier controleur de la page-->
<?php require (ROOT.'controler/'.$controleur.".php"); ?>
<!--instanciation de la class contenant l'action de la demandé-->
<?php $controleur = new $controleur();?>
<!--le rendu de cette page(represente le data dans la fonction ajax appelé par jquery dans la page rooté)-->
<div class="row text-primary" style="box-sizing: border-box;">
<!--appel a l'action devant traiter le fichier(traitement appel l'action du traitement des donnée et affichage)-->
    <!--contient le element a afficher-->
    <?php $controleur->$action(); ?>
    
</div>
