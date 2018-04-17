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
      deleteProgres($id);
      header('Location:' . URL . 'species/index');
    }

    // http://localhost/hospital/species/edit/45
    function edit($id){
      $dataspecies["species"] = GetOneSpecies($id);
      // var_dump($dataspecies);
      render("species/edit", $dataspecies);
    }


    function editSaveThis(){
        $dataSafe123=array(
      		'description' => $_POST['description'],
          'id' => $_POST['id']
        	);

          var_dump($dataSafe123);

        editSpecies($dataSafe123);
        header("location:" . URL . "species/index" );

      }


    // function editThis($id){
    //   $data['person']= GetOneBirthday($id);
    //   // var_dump($data);
    //   render("calender/edit",$data);
    //
    //     // enkele birthday ophalen die stuur ik mee naar edit
    //     editBirthday($data123);
    //
    // }

























?>
