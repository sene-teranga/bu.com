
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = (isset($title)) ? $title : 'Bibliotheque LYNCOF' ; echo $title; ?> </title>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="layout/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout/style.css">
    <link rel="stylesheet" href="layout/bootstrap-5.2.0-beta1-dist/font/bootstrap-icons.css">
</head>
<body  class="body bg-light">
    <header class=" ">
        <div class="container-fluid">
            <div class="row p-4 text-primary">
                <h1 id="menuhome"><span style="cursor:pointer;" class="text-primary bi "><img style="width: 80px ; height:80px;" src="images/favicon.jpg" alt="Accueil"> Bienvenue à la bibliotéque </span> <span id="acces0" style="color: red; font-size: 40px; " class=" bi bi-record-fill"></span> <span id="acces" style="font-size: 40px;" class=" text-warning bi bi-record-fill"></span></h1>
            </div>
            <div class="list-group">
                <div class="list-group-item active"><hr style="font-size: 50px;" class="m-3"></div>
                    <div class="list-group-item d-flex">
                    <div style="cursor: pointer;" id="menuemprunts" class="col-2 p-0 text-center bg-primary rounded"><span class=" span bi bi-graph-up-arrow">200</span><span style="background-color: white; color:blue;" class="span h5 biititre rounded">Emprunts</span></div>
                    <div style="cursor: pointer;" id="menudisponibles" class="col-2 p-0 text-center bg-primary rounded"><span class=" span bi bi-stack-overflow">300</span><span style="background-color: white; color:blue;" class="span h5 biititre rounded">Disponibles</span></div>
                    <div style="cursor: pointer;" id="menusorties" class="col-2 p-0 text-center bg-primary rounded"><span class=" span bi bi-box-arrow-in-up-right">150</span><span style="background-color: white; color:blue;" class="span h5 biititre rounded">Sorties</span></div>
                    <div style="cursor: pointer;" id="menuretards" class="col-2 p-0 text-center bg-primary rounded"><span class=" span bi bi-speedometer">009</span><span style="background-color: white; color:blue;" class="span h5 biititre rounded">Retards</span></div>
                    <div style="cursor: pointer;" id="menuemprunter" class="col-2 p-0 text-center bg-primary rounded"><span class=" span bi bi-cart4">001</span><span style="background-color: white; color:blue;" class="span h5 biititre rounded">Emprunter</span></div>
                </div>
            </div>
        </div>
    </header>