<?php

function GetAllSpecies(){
  // echo "GetAllClients()";
  $db = openDatabaseConnection();
  $sql = "SELECT * FROM species";
  $query = $db->prepare($sql);
  $query->execute();
  $db = null;
  return $query->fetchAll();
}


function createUpdate($createSafe){
      $db = openDatabaseConnection();
      $sql = "INSERT INTO species (species_description) VALUES(:species_description)";
       $query = $db->prepare($sql);
         $query->bindParam(':species_description', $createSafe['species_description']);
      $query->execute();
      $db = null;
}

function deleteProgres($id){
  $db = openDatabaseConnection();
  $sql = "DELETE FROM species WHERE species_id = :id";
  $query = $db->prepare($sql);
      $query ->bindParam(":id", $id);
  $query->execute();
  $db = null;
  return $query->fetch();

  // return true;
}


function GetOneSpecies($id){
  $db = openDatabaseConnection();
  $sql = "SELECT * FROM species WHERE species_id = :id";
  $query = $db->prepare($sql);
    $query ->bindParam(":id", $id);
  $query->execute();

  $db = null;

  return $query->fetch();
}



function editSpecies($dataSafe123){
  $db = openDatabaseConnection();
  $sql = "UPDATE species SET species_description = :description WHERE species_id = :id";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':description' => $dataSafe123['description'],
    ':id' => $dataSafe123['id']
 ));

 $db = null;

 return true;
}






















 ?>
