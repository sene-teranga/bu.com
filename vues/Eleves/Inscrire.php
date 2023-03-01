<h1 class="bg-primary text-white text-center"><marquee>Ajouter un eleve dans la liste</marquee></h1>
<div class="row">
    <div class="row m-0">
        <div class="row m-0"><button style="float: right;" class="btn btn-info col-2 h2 text-white" style="cursor: pointer;" id="testeur">Ajouter</button></div>
        <div id="div" class="row m-0"></div>
    </div>
    <div class="row m-0">
        <form action="" method="post">
           <div class="row" style="justify-content: space-between;">
                <div class="form-group col-5">
                    <label for="prenom" class="label control-label">Prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group col-5">
                    <label for="nom" class="label control-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
            </div>
            <hr><!---------------------------------------------------------------------------------->
            <div class="row" style="justify-content: space-between;">
                <div class="form-group col-5">
                    <label for="datenaissance" class="label control-label">Date de naissance</label>
                    <input type="date" name="datenaissance" id="datenaissance" class="form-control">
                </div>
                <div class="form-group col-5">
                    <label for="lieunaissance" class="label control-label">Lieu de naissance</label>
                    <input type="text" name="lieunaissance" id="lieunaissance" class="form-control">
                </div>
            </div>
            <hr><!---------------------------------------------------------------------------------->
            <div class="row" style="justify-content: space-between;">
                <div class="form-group col-5">
                    <label for="classe" class="label control-label">Classe</label>
                    <select name="classe" id="classe" class="form-control">
                        <option value="">Selectionner</option>
                        <option value="Tl2A">TL2A</option>
                        <option value="TL2B">TL2B</option>
                        <option value="Tl1A">TL1A</option>
                        <option value="TS1">TS1</option>
                        <option value="TS2">TS2</option>
                    </select>
                </div>
                <div class="form-group col-5">
                    <label for="matricule" class="label control-label">Matricule</label>
                    <input type="text" name="matricule" id="matricule" class="form-control">
                </div>
            </div>
            <hr><!---------------------------------------------------------------------------------->
            <div class="row" style="justify-content: space-between;">
                <div class="form-group col-5">
                    <label for="adresse" class="label control-label">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="form-control">
                </div>
                <div class="form-group col-5">
                    <label for="telephone" class="label control-label">Telephone</label>
                    <input type="tel" name="telephone" id="telephone" class="form-control">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {$("#testeur").click(function(){
        if ($("#classe").val()=="" || $("#telephone").val()=="" || $("#matricule").val()=="" || $("#prenom").val()=="" || $("#nom").val()=="" || $("#datenaissance").val()=="" || $("#lieunaissance").val()=="" || $("#adresse").val()=="") {
            $("#div").html("<span class=\" alert alert-danger h5\">Veillez remplir tous les champs...</span>");
        } else {
            executing();            
        } });
        function executing(){$.post(
            "traitement.php", 
            { 
            methode: "Elevemodel", action : "Inserer", classe: $("#classe").val(), 
            telephone : $("#telephone").val(), prenom:$("#prenom").val(), nom :$("#nom").val(),
            datenaissance:$("#datenaissance").val(), lieunaissance :$("#lieunaissance").val(),
            adresse :$("#adresse").val(), matricule : $("#matricule").val() 
            }, 
            function(data) {
                if(data !=1){                    
                    $("#div").html("<span class=\" alert alert-danger h5\">Votre inscription a échoué veillez réessayer...</span>");
                }else{
                    $("#div").html("<span class=\" alert alert-success h5\">Votre inscription a été éffectué avec succés...</span>");
                    $("#classe").val(""), $("#telephone").val(""), $("#matricule").val(""),
                    $("#prenom").val(""), $("#nom").val(""), $("#datenaissance").val("") ,$("#lieunaissance").val("") ,$("#adresse").val("")
                    setTimeout(() => {
                        $("#menuelevesignin").click();
                    }, 3000);
                }
            });
        }
    })
</script>