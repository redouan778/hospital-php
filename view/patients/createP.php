<div>
  <form action="<?= URL ?>patients/createP" method="POST">
    <label class="title" for="fname">patient_name</label>
    <input type="text" name="patient_name" placeholder="patient_name">

    	<select name="species_id">
      <?
        foreach ($species as $specie) {?>
          <option value="<? $specie['species_id'] ?>"><? $specie['species_description']?></option>        }
      <?}?>
    </select>

    <label class="title" for="fname">patient_status</label>
    <input type="text" name="patient_status" placeholder="patient_status">

    <input id="button" type="submit" value="Versturen">
  </form>
</div>
