<?php $title="Disponibles" ?>
<h1>Liste des ouvrages disponibles</h1>
<table class="table">
    <?php $n =0; foreach ($data as $ouvrage ):  ?>
        <tr class="tr">
            <th>LIVRE</th>
            <th>CODE</th>
            <th>EXEMPLAIRE</th>
            <th>TYPE</th>
            <th>ACTION</th>
        </tr>
        <tr class="ouvrage">
            <td><span style="cursor: pointer;" class="bi masqueur bi-chevron-double-right"></span><span id="<?="titre".$n?>" class="h4 text-success" style=" text-decoration: underline; " > <?= $ouvrage["nomouvrage"]." "?>:</span></td>
            <td><?= $ouvrage["codeouvrage"]?></td>
            <td><?= $ouvrage["codeexemplaires"]?></td>
            <td><?= $ouvrage["typouvrage"]?></td>
            <td><span style="cursor: pointer;" class="bi bi-eye-fill text-info"> Consulter</span></td>
        </tr>
    <?php $n = $n +1; endforeach; ?>
</table>
    <script>
        for (let i = 0; i < <?php echo $n?>; i++) {
            let u= i+1
            if($("#titre"+i).parent().next().text() == $("#titre"+u).parent().next().text() ){
                $("#titre"+u).prev().removeClass('bi-chevron-double-right');
                $("#titre"+i).prev().removeClass('bi-chevron-double-right');
                $("#titre"+u).parents().filter("tr").prev().remove()                
                $("#titre"+u).hide()
            } 
        }
    </script>
