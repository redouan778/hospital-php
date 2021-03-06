<?php
  function GetAllPatients(){
    $db = openDatabaseConnection();

    $sql = "SELECT
     patients.patient_id,
     patients.patient_name,
     patients.patient_status,

     clients.E_mail,
     clients.client_id,
     clients.client_firstname,
     clients.client_lastname,
     clients.phone_number,

     species.species_id,
     species.species_description

     FROM patients

     LEFT JOIN clients ON patients.client_id = clients.client_id
     LEFT JOIN species on patients.species_id = species.species_id

     ORDER BY patient_name";

    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
  }

  function GetOnePatient($id){
      $db = openDatabaseConnection();
      $sql = "SELECT * FROM patients WHERE patient_id = :id";
      $query = $db->prepare($sql);
      $query ->bindParam(":id", $id);
      $query->execute();
      $db = null;
      return $query->fetch();
  }

  function createFunc($createPatient){
  	$patient_name = ($createPatient['patient_name']);
  	$species_id = ($createPatient['species_id']);
  	$patient_status = ($createPatient['patient_status']);
  	$client_id = ($createPatient['client_id']);

  	$db = openDatabaseConnection();

  	$sql = "INSERT INTO patients(patient_name, species_id, patient_status, client_id) VALUES (:patient_name, :species_id, :patient_status, :client_id)";

  	$query = $db->prepare($sql);
    $query->bindParam(':patient_name', $createPatient['patient_name']);
    $query->bindParam(':species_id', $createPatient['species_id']);
    $query->bindParam(':patient_status', $createPatient['patient_status']);
    $query->bindParam(':client_id', $createPatient['client_id']);
  	$query->execute();

  	$db = null;

  	return true;
  }

  function deleteThis($id){
    $db = openDatabaseConnection();
    $sql = "DELETE FROM patients WHERE patient_id = :id";
    echo $sql;
    $query = $db->prepare($sql);
    $query->execute(array(
      ':id' => $id));
    $db = null;
    return true;
  }

  function editPatient($dataP){
  	$db = openDatabaseConnection();
  	$sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status, species_id= :species_id, client_id = :client_id  WHERE patient_id = :patient_id";
  	$query = $db->prepare($sql);
    $query->bindParam(':patient_name' ,$dataP['patient_name']);
    $query->bindParam(':species_id', $dataP['species_id']);
    $query->bindParam(':patient_status', $dataP['patient_status']);
    $query->bindParam(':client_id', $dataP['client_id']);
    $query->bindParam(':patient_id', $dataP['patient_id']);

  	$query->execute();
  	$db = null;

  	return true;
  }
?>
