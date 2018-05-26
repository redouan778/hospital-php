<?php
function GetAllClients(){
  // echo "GetAllClients()";
  $db = openDatabaseConnection();
  $sql = "SELECT * FROM clients";
  $query = $db->prepare($sql);
  $query->execute();
  $db = null;
  return $query->fetchAll();
}


  function createThis($createSave){
    $db = openDatabaseConnection();
    $sql = "INSERT INTO clients (client_firstname, client_lastname, phone_number, E_mail) VALUES(:client_firstname, :client_lastname, :phone_number, :E_mail)";
    $query = $db->prepare($sql);
    $query->bindParam(':client_firstname', $createSave['client_firstname']);
    $query->bindParam(':client_lastname', $createSave['client_lastname']);
    $query->bindParam(':phone_number', $createSave['phone_number']);
    $query->bindParam(':E_mail', $createSave['E_mail']);
    $query->execute();
  }

  function GetOneClient($id){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM clients WHERE client_id = :id";
    $query = $db->prepare($sql);
    $query->execute(array(
      ':id' => $id));
    $db = null;
    return $query->fetch();
  }

  function deleteProgres($id){
    $db = openDatabaseConnection();
    $sql = "DELETE FROM clients WHERE client_id = :id";
    echo $sql;
    $query = $db->prepare($sql);
    $query->execute(array(
      ':id' => $id));
    $db = null;
    return true;
  }

function update($save){
  $db = openDatabaseConnection();
  $sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname, phone_number = :phone, E_mail = :mail WHERE client_id = :id";
  $query = $db->prepare($sql);
  $query->execute(array(
    ':firstname'=> $save['firstname'],
    ':lastname'=> $save['lastname'],
    ':phone'=> $save['phone'],
    ':id'=> $save['id'],
    ':mail'=> $save['mail']
    ));
  }
?>
