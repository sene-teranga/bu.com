<?php
    class Elevemodel extends model
    {
        function __construct()
        {
            $this->connecting();
        }

        public function Inserer($donnees = [])
        {
            //var_dump($donnees);
            extract($donnees);
            if (!empty($nom) and !empty($prenom) and !empty($datenaissance) and !empty($lieunaissance) and !empty($adresse) and !empty($telephone) and !empty($classe) and !empty($matricule)) {
                $req = $this->connexion->prepare('INSERT INTO eleves(nomeleves, prenomeleves, naissanceeleves, lieunaissanceeleves, adresseeleves, telephoneeleves, classeeleves, matriculeeleves) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
                $req2 = $req->execute([$nom, $prenom, $datenaissance, $lieunaissance, $adresse, $telephone, $classe, $matricule]);
                if ($req2) {
                    $message = 1;
                } else {
                    $message = 0;
                }
            } else {
                $message = 0;
            }
            echo $message;
        }
        /* public function Eleves()
            {
                $req = $this->connexion->prepare('SELECT * FROM eleves');
                $req2 = $req->execute();
                if ($req2) {
                    return $req2->fetchAll();
                } else {
                    $message = 1;
                }

            } */
        public function Recherche($donnees= [])
        {
            extract($donnees);
            # code...
            $req = $this->connexion->prepare("SELECT * FROM eleves WHERE nomeleves = ? or prenomeleves = ? or lieunaissanceeleves = ? or adresseeleves = ? or naissanceeleves = ? or telephoneeleves = ? or classeeleves = ? or matriculeeleves = ?");
            $req->execute([$valeur, $valeur, $valeur, $valeur, $valeur, $valeur, $valeur, $valeur]);     
            $data = $req->fetchAll();
            
            if ($req->Rowcount() > 0 ) {?>
                <table class="table table-responsive table-striped table-condensed mt-2">
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Classe</th>
                        <th>Numéro</th>
                        <th colspan="3">Action</th>
                    </tr>
                    <?php foreach ($data as $eleves):?>
                    
                        <tr class="eleve">
                            <td><span style="cursor: pointer;" class="bi masqueur bi-chevron-double-right"></span> <?= $eleves["prenomeleves"]; ?></td>
                            <td><?= $eleves["nomeleves"]; ?></td>
                            <td><?= $eleves["adresseeleves"]; ?></td>
                            <td><?= $eleves["classeeleves"]; ?></td>
                            <td><?= $eleves["telephoneeleves"]; ?></td>
                            <td><span style="cursor: pointer;" class="bi bi-trash3-fill text-danger"></span></td>
                            <td><span style="cursor: pointer;" class="bi bi-pencil-fill text-primary"></span></td>
                            <td><span style="cursor: pointer;" class="bi bi-journals text-info"></span></td>
                        </tr>
                        <tr style="display:none; " class="details" >
                            <td colspan="8">
                                <b><?= $eleves["prenomeleves"]." "; ?> 
                                <?= " ".$eleves["nomeleves"]; ?></b><br> 
                                né le <?= $eleves["naissanceeleves"]; ?>
                                à <?= $eleves["lieunaissanceeleves"]; ?> 
                                Telephone <?= $eleves["telephoneeleves"]; ?>,
                                c'est un eleves de la <b><?= $eleves["classeeleves"]; ?></b>.
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>    
                <script>
                    $(".masqueur").click(function(){
                        $(this).toggleClass("bi-chevron-double-right")
                        $(this).toggleClass("bi-chevron-double-down")
                        $(this).parents().filter(".eleve").toggleClass("bg-light")
                        $(this).parents().filter(".eleve").next().fadeToggle(1000);
                        })
                </script>
            <?php }
            else {
                    echo " Pas d'eleves trouvé d'aprés la recherche ( $valeur )";
                }  
        }
        public function Rechercherlivre($donnees=[])
        {
            echo "oui ça marche";
        }
    }