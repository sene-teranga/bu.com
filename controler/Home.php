<?php
class Home extends controleur{// Architecture contenant les methode (action) des de l'appli
    public function Accueil(){//permet d'afficher la page d'accueil situes dans vues
            $this->render("Accueil", "/vues/Home/");
        }
}