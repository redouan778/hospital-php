<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Patients/editConfirm" method="post">

		<p><input type="text" name="patient_name" placeholder="Patient name" value="<? echo $patients['patient_name'] ?>"></p>
		<p><select name="species_id">
			<?php foreach ($dataspecies as $specie) { ?>
				<option value="<?= $specie['species_id'] ?>"><? echo $specie['species_description'] ?></option>
			<?php } ?>
		</select></p>

		<p><input type="text" name="patient_status" placeholder="Patient status" value="<? echo $patients['patient_status'] ?>"></p>

		<p><select name="client_id">
			<?php foreach ($dataclients as $client) { ?>
				<option value="<?= $client['client_id'] ?>"><? echo $client['client_firstname'] . " " . $client['client_lastname'] ?></option>
			<?php } ?>
		</select></p>


		<input type="hidden" name="id" value="<?= $patients['patient_id']; ?>">
		<input type="submit" value="Verzenden">

	</form>
</div>


<!-- <div>
  <form action="<?php echo URL ?>calender/editSaveThis" method="POST">
    <label class="title" for="fname"> Naam</label>
    <input required type="text" id="person" name="person" value="<?php echo $person['person']; ?>" placeholder="Nieuwe naam">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">

    <label class="title" for="fname">Dag</label>
    <input required type="number" id="day" name="day" value="<?php echo $person["day"]; ?>" min="1" max = "31" placeholder="Dag">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">

    <label class="title" for="fname">Maand</label>
    <input required type="number" id="month" name="month"  value="<?php echo $person["month"]; ?>" min="1" max = "12" placeholder="Maand">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">

    <label class="title" for="fname">Jaar</label>
    <input required type="number"  id="year" name="year" value="<?php echo $person["year"]; ?>"  min="1900" max = "2018" placeholder="Jaar">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">

    <input id="button" type="submit" value="Versturen">
  </form>
</div> -->
