<?php
class Ouvrages extends controleur  {//architecture contenant les methodes (action) des ouvranves
    public function Emprunts(){//permet d'afficher la page des emprunts situes dans vues/Ouvrages
        $this->render("Emprunts", "/vues/Ouvrages/");
    }
    public function Disponibles(){//permet d'afficher la page des ouvrages disponibles situes dans vues/Ouvrages
        $this->lemodel("Modelouvrages");
        $content = $this->Modelouvrages->Disponibles();
        $this->render("Disponibles", "/vues/Ouvrages/", $content);
    }
    public function Sorties(){//permet d'afficher la page des sorties situes dans vues/Ouvrages
        $this->lemodel("Modelouvrages");
        $content = $this->Modelouvrages->Sorties();
        $this->render("Sorties", "/vues/Ouvrages/", $content);
    }
    public function Retards(){//permet d'afficher la page des retards situes dans vues/Ouvrages
        $this->lemodel("Modelouvrages");
        $content = $this->Modelouvrages->Retards();
        $this->render("Retards", "/vues/Ouvrages/", $content);
    }
    public function Modification(){//permet d'afficher la page des retards situes dans vues/Ouvrages
        $this->render("Modification", "/vues/Ouvrages/");
    }
    public function All(){//permet d'afficher la page des retards situes dans vues/Ouvrages
        $this->lemodel("Modelouvrages");
        $content = $this->Modelouvrages->Allouvrages();
        $this->render("All", "/vues/Ouvrages/", $content);
    }
}