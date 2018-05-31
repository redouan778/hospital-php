<div class="container">
	<h1>Create Patient</h1>
	<form action="<?= URL ?>patients/createSave" method="post">
		<p><input type="text" name="patient_name" placeholder="Patient name"></p>
		<p><select name="species_id">
			<?php foreach ($dataspecies as $specie) { ?>
				<option value="<?= $specie['species_id'] ?>"> <?= $specie['species_description'] ?></option>
			<?php } ?>
		</select></p>

		<p><input type="text" name="patient_status" placeholder="Patient status"></p>
		<p><select name="client_id">
			<?php foreach ($dataclients as $clients) { ?>
				<option value="<?= $clients['client_id'] ?>"><?= $clients['client_firstname'] . " " . $clients['client_lastname'] ?></option>
			<?php } ?>
		</select></p>
		<input type="submit" value="Verzenden">
	</form>
</div>
