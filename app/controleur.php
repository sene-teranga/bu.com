<?php
    //controleur de tout les controleur
    abstract class controleur{
        public function render(string $affiche, string $controleur, $data =[])
        {
            require(ROOT.$controleur.$affiche.".php");
        }
        
        public function lemodel($model)
        {
            require(ROOT.'Model/'.$model.".php");            
            $this->$model = new $model();
        }
    }