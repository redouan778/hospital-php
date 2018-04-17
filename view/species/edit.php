




<div>
  <form action="<?php echo URL ?>species/editSaveThis" method="POST">
    <label class="title" for="fname"> Species Description</label>
    <input required type="text" name="description" value="<?php echo $species['species_description']; ?>" placeholder="Species Description">
    <input type="hidden" name="id" value="<?php echo $species['id']; ?>">

    <input id="button" type="submit" value="Versturen">
  </form>
</div>
