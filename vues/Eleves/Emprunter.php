<h1 class="bg-primary text-white text-center">Vous pouvez emprunter un livre ici !</h1>
<div class="row"  style=" overflow-y: scroll; height: 66vh;">
    <div class="col-lg-1"></div>
    <div class="col-lg-10 col-sm-12 col-md-12 col-xs-12">
            <div class="row" style="justify-content: space-between;">
                <div class="form-group">
                    <label for="recherchelivre" style=" font-style:italic;" class="label h5 control-label">R e c h e r c h e r  <span> _ </span>   l e   <span> _ </span>   l i v r e :</label>
                    <div style="border: 2px solid blue; font-style:italic;" class="row d-inline-flex form-control">
                        <input style="border: 0; border-bottom:2px solid blue; font-style:italic;" type="search" name="recherchelivre" class="border-primary text-primary" placeholder="Rechercher ici !" id="recherchelivre">
                        <button value="Rechercher" class="btn mt-1 btn-primary" id="sendsearchlivre">Rechercher</button>
                    </div>
                </div>                    
            </div>
            <hr><!---------------------------------------------------------------------------------->
    </div>
    <div class="row" id="divemprunter"></div>
</div>
<script>
    $(document).ready(function() {
        $("#sendsearchlivre").click(function() {
            $.post(
                "traitement.php",
                {   methode: "OuvragesModel", 
                    action : "Emprunter",
                    valeur: $("#recherchelivre").val()
                },
                function (data) {
                    $("#divemprunter").html(data)
                }
            )
        })
    })
</script>