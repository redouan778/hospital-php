<?php
    require(ROOT . "model/speciesModel.php");

    function index(){
      echo "Aanroep HospitalController";
      $dataspecies =  GetAllSpecies();
      render("species/index", array(
       "dataspecies" => $dataspecies
     ));
    }

    function create(){
      render("species/create");
    }


    function createThis(){
      createUpdate($_POST);
      header('Location:' . URL . 'species/index');
    }


    function delete(){
      render("species/delete");
    }


    function deleteThis($id){
      deleteSpecies($id);
      header('Location:' . URL . 'species/index');
    }


    function edit($id){
      $dataspecies["species"] = GetOneSpecies($id);
      render("species/edit", $dataspecies);
    }


    function editSaveThis(){
      $dataSafe123=array(
        'description' => $_POST['description'],
        'id' => $_POST['id']
    	);

      editSpecies($dataSafe123);
      header("location:" . URL . "species/index" );
    }
?>
