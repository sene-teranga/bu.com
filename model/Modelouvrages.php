<?php 
class Modelouvrages extends model
{
    function __construct()
    {
        $this->table="ouvrages";
        $this->connecting();
    }
    public function Disponibles()
    {        
        $req = $this->connexion->prepare(" SELECT * FROM ouvrages, exemplaire WHERE   exemplaire.codeouvrages = ouvrages.codeouvrage  and exemplaire.etat ="Disponible"");
        $req->execute();
        $content = $req->fetchAll();
        return $content;
    }
    public function Allouvrages()
    {
        return $this->GetAll();
    }
    public function Retards()
    {
        $req = $this->connexion->prepare(" SELECT * from ouvrages, exemplaire, emprunts , eleves where ouvrages.codeouvrage= exemplaire.codeouvrages and exemplaire.codeexemplaires = emprunts.codeexemplaires and emprunts.ideleves= eleves.id_eleves and exemplaire.etat = 'Retard'");
        $req->execute();
        $content = $req->fetchAll();
        return $content;
    }
    public function Sorties()
    {
        $req = $this->connexion->prepare(" SELECT * from ouvrages, exemplaire, emprunts , eleves where ouvrages.codeouvrage= exemplaire.codeouvrages and exemplaire.codeexemplaires = emprunts.codeexemplaires and emprunts.ideleves= eleves.id_eleves and exemplaire.etat LIKE '%Sortie%'");
        $req->execute();
        $content = $req->fetchAll();
        return $content;
    }
}