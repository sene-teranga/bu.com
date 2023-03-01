<h1>Les informations concernants (" <span id="eleve">eleve</span> ").</h1>
<div class="row">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 col-sm-12 col-md-12 col-xs-12">
                <div class="row" style="justify-content: space-between;">
                    <div class="form-group">
                        <label for="recherche" style=" font-style:italic;" class="label h5 control-label">R e c h e r c h e r :</label>
                        <div style="border: 2px solid blue; font-style:italic;" class="row d-inline-flex form-control">
                            <input style="border: 0; border-bottom:2px solid blue; font-style:italic;" type="search" name="recherche" id="recherche" class="border-primary text-primary" placeholder="Rechercher un eleve ici !">
                            <input  name="sendsearch" value="Rechercher" class="btn mt-1 btn-primary" id="sendsearch">
                        </div>
                    </div>
                        
                </div>
                <hr><!---------------------------------------------------------------------------------->
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row" id="div">

    </div>
</div>
<script>
    $(document).ready(function () {
        $("#recherche").keyup(function() {
            $.post("traitement.php", 
            {methode : "Elevemodel", action: "Recherche", valeur : $("#recherche").val()},
            function(data) { $("#div").html(data); $("#eleve").text($("#recherche").val()); }
            )
        })
        $("#sendsearch").click(function() {
            $.post("traitement.php", 
            {methode : "Elevemodel", action: "Recherche", valeur : $("#recherche").val()},
            function(data) { $("#div").html(data); $("#eleve").text($("#recherche").val());  }
            )
        })
        
    })
</script>