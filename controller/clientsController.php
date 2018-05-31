<?php
  require(ROOT . "model/clientsModel.php");

  function index(){
    $dataclients =  GetAllClients();
    render("clients/indexC", array(
     "dataclients" => $dataclients
   ));
  }

  function create(){
    render("clients/createC");
  }

  function create1(){
    $createSave=array(
    'client_firstname' => $_POST['client_firstname'],
    'client_lastname' => $_POST['client_lastname'],
    'phone_number' => $_POST['phone_number'],
    'E_mail' => $_POST['E_mail']
      );
    createThis($createSave);
    header('Location:' . URL . 'clients/index');
}

  function deleteThis($id){
    deleteProgres($id);
    header('Location:' . URL . 'clients/index');
  }

  function edit($id){
    $data['client'] = GetOneClient($id);
    render("clients/editC", $data);
    // var_dump($data);
  }

  function editSaveThis(){
    $save=array(
    'firstname' => $_POST['firstname'],
     'mail' => $_POST['mail'],
    'id' => $_POST['id']
    );

    var_dump($_POST);
    update($save);
    header('Location:' . URL . 'clients/index');
  }
?>
