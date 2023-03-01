<h1 class="bg-primary text-white text-center"><marquee>Liste des Eleves inscritent</marquee></h1>
<div class="row mt-2" style=" overflow-y: scroll; height: 66vh;">
    <table class="table table-striped mt-2">
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
</div>
<script>
    $(document).ready(function() {
            $(".masqueur").click(function(){
            $(this).toggleClass("bi-chevron-double-right")
            $(this).toggleClass("bi-chevron-double-down")
            $(this).parents().filter(".eleve").toggleClass("bg-light")
            $(this).parents().filter(".eleve").next().fadeToggle(1000);
            })
        }        
    );
</script>


