<h1 class="bg-primary text-white text-center"> <marquee>L'ensemble des ouvrages de la bibliotheque </marquee></h1>
<div class="row">
    <div class="row"><!--boutton lançant les champs d'ajout dun nouveau ouvrages-->
         <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8"> </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
            <button id="btnajoutouvrage" class="btn btn-info">Ajouter un ouvrage</button>
        </div>
    </div>
    <div class="row ajout mt-2 mb-2" style="display: none;"><!-- les information de l'ouvrage a enregistrer-->
        <hr><div class="row"><b class="bg-primary col-9 text-white h5" style ="font-style: italic;">Ajouter un ouvrage dans la bibilioteque</b><div class="col-1"></div><button class="mb-2 col-2 btn btn-primary" id="testeur">Ajouter</button></div><hr>
        <div class="row" id="div"></div>
        <div class="row" >
            <div class="row">
                <div class="form-group col-5">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" name="titre" id="titre" class="form-control">
                </div>
                <div class="col-2"></div>
                <div class="form-group col-5">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <hr class="mt-1 mb-1">
            <div class="row ">
                <div class="form-group col-5">                
                    <label for="nombreexemplaires" class="form-label">Nombre d'exemplaire</label>
                    <input type="number" name="nombreexemplaires" id="nombreexemplaires" class="form-control">
                </div>
                <div class="col-2"></div>
                <div class="form-group col-5">
                    <label for="isbn" class="form-label">Isbn</label>
                    <input type="text" name="isbn" id="isbn" class="form-control">
                </div>
            </div>
            <hr class="mt-1 mb-1">
            <div class="row">
                <div class="form-group col-5">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="titre" id="type" class="form-control">
                </div>
                <div class="col-2"></div>
                <div class="form-group col-5">
                    <label for="categorie" class="form-label">Section</label>
                    <input type="text" name="categorie" id="categorie" class="form-control">
                </div>
            </div>
            <hr class="mt-1 mb-1">
            <div class="row">
                <div class="form-group col-5">
                    <label for="datepublication" class="form-label">Année de publication</label>
                    <input type="text" name="datepublication" id="datepublication" class="form-control">
                </div>
                <div class="col-2"></div>
                <div class="form-group col-5">
                    <label for="maison" class="form-label">Maison d'édition</label>
                    <input type="text" name="maison" id="maison" class="form-control">
                </div>
            </div>
            <hr class="mt-1 mb-1">
        </div>
        <!-----------------identification de l'auteur-------------->
        <div class="row"><b class="bg-primary col-7 text-white h5" style ="font-style: italic;">Auteur de l'ouvrage</b><label class="col-2 mb-1"> <input name="auteurexist" type="radio" id="newauteur"/> Nouveau auteur!</label><hr class="col-1 mt-3"/><label class="col-2 mb-1"><input name="auteurexist" type="radio" id="auteurexist"/> Auteur existant!</label></div>
        <!----------------- debut des champs d'identification de l'auteur-------------->
        <hr>
        <div class="row newauteur"  style="display: none;">
            <div class="row">
                <div class="form-group col-5">
                    <label for="prenomauteur" class="label control-label">Prenom</label>
                    <input type="text" id="prenomauteur" class="form-control"/>
                </div>
                <div class="form-group col-5">
                    <label for="nomauteur" class="label control-label">Nom</label>
                    <input type="text" id="nomauteur" class="form-control"/>
                </div>
            </div>
            <hr class="mt-2 mb-2">
            <div class="row">
                <div class="form-group col-5">
                    <label for="datenaissanceauteur" class="label control-label">Né(e) le</label>
                    <input type="text" id="datenaissanceauteur" class="form-control"/>
                </div>
                <div class="form-group col-5">
                    <label for="lieunaissanceauteur" class="label control-label">à</label>
                    <input type="text" id="lieunaissanceauteur" class="form-control"/>
                </div>
            </div>
            <hr class="mt-2 mb-2">
            <div class="row">
                <div class="form-group col-5">
                    <label for="nationnaliteauteur" class="label control-label">Nationnalité</label>
                    <input type="text" id="nationnaliteauteur" class="form-control"/>
                </div>
                <div class="form-group col-5">
                    <label for="detailsauteur" class="label control-label">Details sur l'auteur</label>
                    <input type="text" id="detailsauteur" class="form-control"/>
                </div>
            </div>
            <span class="text-danger mt-2" style="font-style: italic;">Laisser ce champs vide si l'auteur est en vie !</span>
            <hr class=" mb-2">
            <div class="row">
                <div class="form-group col-5">
                    <label for="datedeceauteur" class="label control-label">Décédé le</label>
                    <input type="text" id="datedeceauteur" class="form-control"/>
                </div>
                <div class="form-group col-5">
                    <label for="lieudeceauteur" class="label control-label"> à</label>
                    <input type="text" id="lieudeceauteur" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="row auteurexist" style="display: none;">
            <div class="form-group col-4">
                <label for="auteurselected" class="form-label">Auteur de l'ouvrage :</label>
                <select name="datepublication" id="auteurselected" class="form-control">
                    <option value="">Selectionner</option>
                    <option value="hugo">Hugo</option>
                    <option value="hugo">Hugo</option>
                    <option value="hugo">Hugo</option>
                    <option value="hugo">Hugo</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row"> <!-- liste des ouvrages enregistré-->
        <table class="table">
            <tr>
                <th>Code ouvrage </th>
                <th>Titre de l'ouvrage</th>
                <th>Année de publication</th>
                <th>Type d'ouvrages</th>
                <th>Nombre d'exemplaire</th>
                <th colspan="3">Action</th>
            </tr>
            <?php foreach ($data as $ouvrage ):?>
                <tr class="ouvrage">
                    <td><span style="cursor: pointer;" class="bi masqueur bi-chevron-double-right"></span><?= $ouvrage["codeouvrage"]?></td>
                    <td><?= $ouvrage["nomouvrage"]?></td>
                    <td><?= $ouvrage["datepublication"]?></td>
                    <td><?= $ouvrage["typouvrage"]?></td>
                    <td><?= $ouvrage["nombreexemplaires"]?></td>
                    <td><span style="cursor: pointer;" class="bi bi-trash3-fill text-danger"></span></td>
                    <td><span style="cursor: pointer;" class="bi bi-pencil-fill text-primary"></span></td>
                    <td><span style="cursor: pointer;" class="bi bi-journals text-info"></span></td>
                </tr>
                <tr style="background-color: #C0C0C0; display:none;">
                    <td colspan="8">
                        <b><?= $ouvrage["nomouvrage"]?></b><br>
                        est publié en <?= $ouvrage["datepublication"]?> par
                        <b><?= $ouvrage["maisonedition"]?></b>
                        "enregistré le" <?= $ouvrage["Ajout_le"]?>
                        dans la section <b><?= $ouvrage["categorieouvrage"]?> </b>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<script>
     $(document).ready(function(){

        $(".masqueur").click(function(){
            $(this).toggleClass("bi-chevron-double-right")
            $(this).toggleClass("bi-chevron-double-down")
            $(this).parents().filter(".ouvrage").toggleClass("bg-light")
            $(this).parents().filter(".ouvrage").next().fadeToggle(1000);
            })
        //------------------------------------------------------
        $("#btnajoutouvrage").click(function() { $(".ajout").slideToggle(1500); bt();       })
        $("#newauteur").click(function() { $(".auteurexist").fadeOut(1000);  $(".newauteur").fadeIn(1000);})
        $("#auteurexist").click(function() { $(".newauteur").fadeOut(1000);  $(".auteurexist").fadeIn(1000);})

        function bt() {if ($("#btnajoutouvrage").text()=="Ajouter un ouvrage"){ 
            $("#btnajoutouvrage").text("Annuler l'ajout")}else{$("#btnajoutouvrage").text("Ajouter un ouvrage")} }

            //-----------------------------------------------------------------------
            $("#testeur").click(function(){
                if ($("#titre").val()=="" || $("#isbn").val()=="" || $("#categorie").val()=="" || $("#maison").val()=="" || $("#type").val()=="" || $("#nombreexemplaires").val()=="" || $("#datepublication").val()=="" ) {
                    $("#div").html("<span class=\" alert alert-danger h5\">Veillez remplir tous les champs...</span>");
                } else {
                    executing();            
                } });

            function executing(){$.post(
                "traitement.php", 
                { 
                methode: "Ouvragesmodel", action : "Inserer", isbn: $("#isbn").val(), 
                titre : $("#titre").val(), nombreexemplaires:$("#nombreexemplaires").val(), type :$("#type").val(),
                categorie:$("#categorie").val(), datepublication :$("#datepublication").val(),
                maison :$("#maison").val(), prenomauteur: $("#prenomauteur").val(), nomauteur: $("#nomauteur").val(), 
                datenaissanceauteur: $("#datenaissanceauteur").val(), lieunaissanceauteur: $("#lieunaissanceauteur").val(),
                nationnaliteauteur: $("#nationnaliteauteur").val(), detailsauteur: $("#detailsauteur").val(),
                lieudeceauteur: $("#datedeceauteur").val(), datedeceauteur: $("#datedeceauteur").val(), auteurselected: $("auteurselected").val()
                }, 
                function(data) {
                    if(data !=1){                    
                    $("#div").html("<span class=\" alert alert-danger h5\">Votre inscription a échoué veillez réessayer...</span>");
                }else{
                    $("#div").html("<span class=\" alert alert-success h5\">Votre inscription a été éffectué avec succés...</span>");
                    $("#classe").val(""), $("#telephone").val(""), $("#matricule").val(""),
                    $("#prenom").val(""), $("#nom").val(""), $("#datenaissance").val("") ,$("#lieunaissance").val("") ,$("#adresse").val("")
                    setTimeout(() => {
                        $("#menuouvrages").click();
                    }, 3000);
                }
                });
            }
     })
</script>