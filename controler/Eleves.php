<?php
    class Eleves extends controleur{ // Architecture contenant les methode (action) des eleves
        public function All()//permet d'afficher la page d'accueil situes dans vues
        {
            $this->lemodel("Modeleleves");
            $content = $this->Modeleleves->Alleleves();
            $this->render("All", "/vues/Eleves/", $content);
        }
        public function Emprunter(){//permet d'afficher la page emprunter situés dans vues/Eleves
            $this->render("Emprunter", "/vues/Eleves/");
        }
        public function Inscrire(){//permet d'afficher la page Inscrire situés dans vues/Eleves
            $this->render("Inscrire", "/vues/Eleves/");
        }
        public function Details(){//permet d'afficher la page details situés dans vues/Eleves
            $this->render("Details", "/vues/Eleves/");
        }
        public function Modification(){//permet d'afficher la page details situés dans vues/Eleves
            $this->render("Modification", "/vues/Eleves/");
        }
    }  