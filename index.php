<!--le header-->
<?php include 'includes/header.php' ?>
    <!-- corps du document-->
    <section class="mt-3">
            <div class="container-fluid text-warning">
                <div class="row">
                    <!--colonne contenant les element d'optimisation des recherche-->
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                        <div class="list-group mb-2">
                            <div style="cursor: pionter;" id="menuouvrages" class="list-group-item active"><h5 class="d-flex" style="cursor: pointer;"> <span class="bi bi-file-text"> </span> Ouvrages</h5></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-file-earmark-zip-fill"> </span> Section</h6></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-file-earmark-zip"> </span> Type</h6></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-vector-pen"> </span> Auteur</h6></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-flag-fill"> </span> Pays</h6></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-cloud-moon-fill"> </span> Année</h6></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-bank"> </span> Maison</h6></div>
                        </div>
                        <div class="list-group mb-2">
                            <div style="cursor: pionter;" class="list-group-item active"><h5 class="d-flex" style="cursor: pointer;"> <span class="bi bi-eject"> </span>Classes</h5></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-bar-chart-steps"> </span> Ajouter</h6></div>
                            <div style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-mortarboard-fill"> </span> Consulter</h6></div>
                        </div>
                    </div>
                    <!---------------------------colonne contenant le contenu de la page------------------------->
                    <div id="contenu"  class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        
                    </div>
                     <!--colonne contenant les elements d'identification-->
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                        <div  class="list-group mb-2">
                            <div id="menueleves"  style="cursor: pionter;" id="menuelevss" class="list-group-item active"><h5 style="cursor: pointer;"><span class="bi bi-mortarboard-fill"> </span> Eleves</h5></div>
                            <div id="menuelevesignin" style="cursor: pionter;" class="list-group-item text-primary"><h6 style="cursor: pointer;"><span class="bi bi-pencil-square"> </span> Inscrire</h6></div>
                            <div id="menuelevesconsult" style="cursor: pionter;" class="list-group-item text-primary"><h6 style="cursor: pointer;"><span class="bi bi-journals"> </span> Consulter</h6></div>
                        </div> 
                        <div class="list-group mb-2">
                            <div id="menuuserall" style="cursor: pionter;" class="list-group-item active"><h5 class="d-flex" style="cursor: pointer;"><span class="bi bi-people-fill"> </span> Utilisateur</h5></div>
                            <div id="menuusersignin" style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-pencil-square"> </span>  (S') inscrire</h6></div>
                            <div id="menuuserlogin" style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-person-workspace"> </span>  S'identifier</h6></div>
                            <div id="menuuserparam" style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-gear-fill"> </span> Parameteres</h6></div>
                            <div id="menuuserlogout" style="cursor: pionter;" class="list-group-item text-primary"><h6 class="d-flex" style="cursor: pointer;"><span class="bi bi-box-arrow-in-right"> </span> Deconnexion</h6></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- corps du document-->
<?php include 'includes/footer.php' ?>
<!--le footer-->
