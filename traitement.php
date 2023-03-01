
    
<?php define("ROOT",  str_replace('traitement.php', '', $_SERVER["SCRIPT_FILENAME"] )); ?>
<?php
    $method = $_POST["methode"];
    $action =$_POST["action"];
    $donnees= $_POST;
    require (ROOT.'app/model.php');
    require (ROOT.'model/'.$method.'.php');
    $method = new $_POST["methode"]();
    $method->$action($donnees);