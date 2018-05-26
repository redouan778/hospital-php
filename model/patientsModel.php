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
     LEFT JOIN species on patients.species_id = species.species_id";

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
    $db = openDatabaseConnection();
    $sql = "INSERT INTO patients (patient_name, patient_gender, patient_status) VALUES(:patient_name, :patient_gender, :patient_status)";
    $query = $db->prepare($sql);
    $query->bindParam(':patient_name', $createPatient['patient_name']);
    $query->bindParam(':patient_gender', $createPatient['patient_gender']);
    $query->bindParam(':patient_status', $createPatient['patient_status']);
    $query->execute();
  }
?>
