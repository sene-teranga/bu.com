$(document).ready(function(){   
    setTimeout(() => {
        setInterval(() => {    
            $("#acces2").toggle();
            }, 500);
    }, 1000);
    $("#menuhome").click(function(){requete ("Home/Accueil","Home") ; $("#signal").fadeToggle();});
    $("#menuelevesignin").click(function(){requete ("Eleves/Inscrire","Ajouter un eleve")});
    $("#menueleves").click(function(){requete ("Eleves/All","Tous les eleves")});
    $("#menuelevesconsult").click(function(){requete ("Eleves/Details","Details de l'eleve")});
    $("#menuemprunter").click(function(){requete ("Eleves/Emprunter","Emprunter")});

    //les fonction de l'utilisateur
    $("#menuuserall").click(function(){ requete("Users/All", "Liste des Utilisateur") });
    $("#menuusersignin").click(function(){ requete("Users/Signin", "Inscription Utilisateur") });
    $("#menuuserlogin").click(function(){ requete("Users/Login", "Authentification Utilisateur") });
    $("#menuuserparam").click(function(){ requete("Users/Details", "Parametres Utilisateur") });
    $("#menuuserlogout").click(function(){ requete("Users/Logout", "Accueil") });

    //les fonction concernant les ouvrages
    $("#menuemprunts").click(function(){requete ("Ouvrages/Emprunts","Statistique des Emprunts")});
    $("#menuouvrages").click(function(){requete ("Ouvrages/All","Ourages")});
    $("#menudisponibles").click(function(){requete ("Ouvrages/Disponibles","Disponibles")});
    $("#menusorties").click(function(){requete ("Ouvrages/Sorties","Sorties")});
    $("#menuretards").click(function(){requete ("Ouvrages/Retards","Retards")});
   
}); //-----------------------------------------
function requete (controler, title) {//debut de la function du click 
    $("title").text(title);
    $.ajax({ //debut de la function ajax
        type: "POST",
        url:"afficheur.php",
        data:'controleur='+ controler,
        success:function(data){
            $("#contenu").html(data);
        }
    })//fin de la function ajax 
}//fin de la function du click 
     