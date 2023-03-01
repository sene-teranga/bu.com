<?php
class Users extends Controleur {// Architecture contenant les methode (action) des utilisateurs 
    public function All(){//permet d'afficher la page login situes dans vues/Users
        $this->render("All", "/vues/Users/");
    }
    public function Login(){//permet d'afficher la page login situes dans vues/Users
        $this->render("Login", "/vues/Users/");
    }
    public function Signin(){//permet d'afficher la page des Signin situes dans vues/Users
        $this->render("Signin", "/vues/Users/");
    }
    public function Details(){//permet d'afficher la page des Details situes dans vues/Users
        $this->render("Details", "/vues/Users/");
    }
    public function Logout(){//permet d'afficher la page des Details situes dans vues/Users
        $this->render("Logout", "/vues/Users/");
    }
    public function Modification(){//permet d'afficher la page des Modification situes dans vues/Users
        $this->render("Modification", "/vues/Ouvrages/");
    }
}