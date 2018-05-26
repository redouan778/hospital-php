<?php
  echo "hello";
  var_dump($species["species_description"]);
 ?>

<div class="">
  <form action="<?= URL ?>species/deleteThis" method="POST">
    <label class="title" value= "<?php  $dataspecies["species_description"] ?>" for="fname">Naam</label>
    <input type="text"  id="person" name="person" placeholder="Nieuwe naam">
    <input type="hidden" name="id" value="<?php echo $species['species_id']; ?>">
    <input id="button" type="submit" value="Verwijderen">
  </form>
</div>
