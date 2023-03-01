<h1>La listes des auteurs ayant des oeuvres dans la blibliothéque</h1>
<?php
while ($auteur = $data->fetch()) { ?>
<td><?= $data["prenomauteur"]." ".$data["nomauteur"] ?></td>
<td><?= "Né(e) le ".$data["auteur"]." à ".$data["lieunaissanceauteur"] ?></td>
<?php}