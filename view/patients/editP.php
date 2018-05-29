<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Patients/editConfirm" method="POST">

		<p><input type="text" name="patient_name" placeholder="Patient name" value="<?= $patients['patient_name'] ?>"></p>
		<p><select name="species_id">
			<?php foreach ($dataspecies as $specie) { ?>
				<option value="<?= $specie['species_id'] ?>"><?=  $specie['species_description'] ?></option>
			<?php } ?>
		</select></p>
		<p><input type="text" name="patient_status" placeholder="Patient status" value="<?= $patients['patient_status'] ?>"></p>

		<p><select name="client_id">
			<?php foreach ($dataclients as $client) { ?>
				<option value="<?= $client['client_id'] ?>"><?=  $client['client_firstname'] . " " . $client['client_lastname'] ?></option>
			<?php } ?>
		</select></p>





		<input type="hidden" name="patient_id" value="<?= $patients['patient_id']; ?>">
		<input type="submit" value="Verzenden">

	</form>

</div>
