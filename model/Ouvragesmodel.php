<?php

class Ouvragesmodel extends model
{
    function __construct()
    {
        $this->connecting();
        $this->table = "ouvrages";
    }
    public function Inserer($data = [])
    {
        extract($data);
        $code = $isbn . "GUE";
        if (!empty($titre) and !empty($nombreexemplaires) and !empty($isbn) and !empty($type) and !empty($categorie) and !empty($datepublication) and !empty($maison)) {
            try {
                //recherche du code de l'ouvrage
                $idouvrage = $this->connexion->prepare(" SELECT MAX(idouvrage) FROM  $this->table");
                $idouvrage->execute();
                $idresult = $idouvrage->fetch();
                $id1 = $idresult["MAX(idouvrage)"] +1;
                
                $req = $this->connexion->prepare("INSERT INTO $this->table( Ajout_le, nomouvrage, nombreexemplaires, isbn, typouvrage, categorieouvrage,  datepublication, codeouvrage,  maisonedition ) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $req->execute([ date(' d m Y h:i:s'), $titre, $nombreexemplaires, $isbn, $type, $categorie, $datepublication, $code, $maison]);
                //insertion de l'auteur
                $req2 = $this->connexion->prepare("INSERT INTO auteurs ( nomauteur, prenomauteur, nationnaliteauteur, datenaissanceauteur, lieunaissanceauteur,  datedeceauteur, lieudeceauteur,  detailsauteur) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                $req2->execute([$nomauteur, $prenomauteur, $nationnaliteauteur, $datenaissanceauteur, $lieunaissanceauteur,  $datedeceauteur, $lieudeceauteur,  $detailsauteur]);
                //des documents que possède cette bibliothèque : livres, périodiques, publications gouvernementales, documentation audiovisuelle, mémoires, thèses, rapports,
               // recherche de l'identifiant de l'auteur
                $idauteur = $this->connexion->prepare(" SELECT * FROM auteurs where prenomauteur = ? and nomauteur = ? and datenaissanceauteur = ?");
                $idauteur->execute([$prenomauteur, $nomauteur, $datenaissanceauteur ]);
                $id2result = $idauteur->fetch();
                $idaut = $id2result["idauteur"];
               // jointure de l'ouvrage et de l'auteur
                $ecriture = $this->connexion->prepare(" INSERT INTO ecriture (codeouvrage, idauteur ) VALUES( ?, ?) ");
                $ecriture->execute([ $id1, $idaut ]);
                //insertion des exemplaires
                for ($i=0; $i < $nombreexemplaires; $i++) {
                    $n =$i + 1;
                    $exemplaires = $this->connexion->prepare(" INSERT INTO exemplaire (codeouvrages, codeexemplaires ) VALUES( ?, ?) ");
                    $exemplaires->execute([ $code, $code."ex".$n ]);
                }
                $message = 1;
           } catch (Exception $th) {
                $message = 0;
           }
        } else {
            $message = 0;
        }
        echo $message ;
    }
    public function Emprunter($data = [])
        {
        extract($data);
        $valeur = htmlspecialchars($valeur);
        $req = $this->connexion->prepare("SELECT distinct(ouvrages.codeouvrage), prenomauteur, nomauteur, nomouvrage From ouvrages, ecriture, auteurs, exemplaire where (ouvrages.idouvrage = ecriture.codeouvrage and ecriture.idauteur = auteurs.idauteur) and ( nomouvrage LIKE '%$valeur%' or auteurs.nomauteur LIKE '%$valeur%' or prenomauteur LIKE '%$valeur%' or codeexemplaires LIKE '%$valeur%' or ouvrages.codeouvrage = ?) ");
        $req->execute([$valeur]);
        if($req->Rowcount() > 0){
            echo '<b style="color:gray;">( '.$req->rowCount().' ) Resultats trouvés !</b>';
            while ($info = $req->fetch()) {?>       
                <span style="margin: 0;" class="m-0"><span class="bi id bi-caret-right-fill" id= " <?php echo $info["codeouvrage"]; ?> " ></span> <b><?= $info["nomouvrage"]?></b> de <b class="text-success"><?= $info["prenomauteur"]." ". $info["nomauteur"] ?></b> </span>
            <?php } ?>           
            <script>
            $(document).ready(function() {//SENE TERANGA
                $(".id").click(function() {
                    $(this).toggleClass("bi-caret-down");
                    $(this).toggleClass("bi-caret-right-fill");
                    if($(this).parent().next().attr("id")=="livreinfo"){
                        $(this).parent().next().remove()
                    }else if($(this).parent().next().attr("id")!="livreinfo"){                        
                        $(this).parent().after("<div class=\"row\" id=\"livreinfo\"></div>");
                        $.post(
                            "traitement.php",
                            {   methode: "OuvragesModel", 
                                action : "Livreinfo",
                                valeur: $(this).attr('id')
                            },
                            function (data) {
                                $("#livreinfo").html(data);                             
                            }
                        )
                    }
                })
            })
        </script>
        <?php } else {
            echo '<b style="color:gray;">0 Resultat trouvés !</b>'; } 
    }
    public function Livreinfo($data = [])
        {
        extract($data);
        $valeur = trim($valeur);
        $req = $this->connexion->prepare("SELECT distinct(ouvrages.codeouvrage),datepublication, nomauteur, auteurs.prenomauteur as prenomauteu  , maisonedition, nomouvrage, typouvrage ,maisonedition prenomauteur, isbn From ouvrages, ecriture, auteurs, exemplaire  where (ouvrages.idouvrage = ecriture.codeouvrage and ecriture.idauteur = auteurs.idauteur and ouvrages.codeouvrage = exemplaire.codeouvrages) and  ouvrages.codeouvrage= ?");
        $req->execute([$valeur]);
        $livre = $req->fetch();
        $ex = $this->connexion->prepare("SELECT distinct(codeexemplaires), codeouvrages, categorieouvrage, etat from ouvrages, exemplaire where ouvrages.codeouvrage = exemplaire.codeouvrages and codeouvrage = ? ");
        $ex->execute([$valeur]);

        ?>
            <table class="mb-2">
                <tr>
                    <th class=" bg-primary p-1 text-white " style="border:2px solid white; text-align:right;" >Titre &nbsp;: </th>
                    <th>&nbsp; <?= $livre["nomouvrage"]?> </th>
                </tr>
                <tr>
                    <th class=" bg-primary p-1 text-white " style="border:2px solid white; text-align:right;" >Type &nbsp;: </th>
                    <th  >&nbsp; <?= $livre["typouvrage"]?></th>
                </tr>
                <tr>
                    <th class=" bg-primary p-1 text-white " style="border:2px solid white; text-align:right;"  >Auteur(s) &nbsp;: </th>
                    <th  >&nbsp; <?= $livre["prenomauteu"]?> <?= $livre["nomauteur"]?> </th>
                </tr>
                <tr>
                    <th class=" bg-primary p-1 text-white " style="border:2px solid white; text-align:right;"  >Editeur &nbsp;: </th>
                    <th  >&nbsp; <?= $livre["maisonedition"]?>, <?= $livre["datepublication"]?> </th>
                </tr>
                <tr>
                    <th class=" bg-primary p-1 text-white " style="border:2px solid white; text-align:right;"  >ISBN &nbsp;: </th>
                    <th>&nbsp; <?= $livre["isbn"]?> </th>
                </tr>
            </table>
            <h6>Exemplire(s) (<?= $ex->rowCount()?>)</h6>
            <table class="table">
                <tr style="background-color: gray;" >
                    <th style="border: 2px solid white; color: white;" >Code-ouvrage</th>
                    <th style="border: 2px solid white; color: white;" >Code exeplaire</th>
                    <th style="border: 2px solid white; color: white;" >categorie</th>
                    <th style="border: 2px solid white; color: white;" >Disponnibilité</th>
                    <th style="border: 2px solid white; color: white;" >Emprunter</th>
                </tr>
        <?php
        while ($exemplaire = $ex->fetch()) {?>
                <tr>
                    <th><?= $exemplaire["codeouvrages"]?></th>
                    <th><?= $exemplaire["codeexemplaires"]?></th>
                    <th><?= $exemplaire["categorieouvrage"]?></th>
                    <th><?= $exemplaire["etat"]?></th>
                    <th style="text-align: center;"><?php if ($exemplaire["etat"]=="Disponible"){?>
                        <span style=" cursor: pointer;text-align: center; font-size: 23px;"  id="<?= $exemplaire["codeexemplaires"]?>" class="bi text-success bi-calendar2-check-fill"></span>
                        <?php } else if($exemplaire["etat"]=="Retard"){?>
                            <span style=" cursor: not-allowed; text-align: center; font-size: 23px;" class="bi bi-calendar2-x-fill text-danger"></span>
                            <?php  }else{?>
                             <span style=" cursor: wait; text-align: center; font-size: 23px;" class="bi bi-calendar2-minus-fill text-warning"></span>   
                            <?php } ?></th>
                </tr>
        <?php }
            echo '</table>';
    }
    
}