<?
  require(ROOT . "model/patientsModel.php");
  require(ROOT . "model/clientsModel.php");
  require(ROOT . "model/speciesModel.php");


  function index(){
    $datapatients =  GetAllPatients();
    render("patients/indexP", array(
     "datapatients" => $datapatients
   ));
  }


function createP()
{
	render("patients/createP", array(
		'dataspecies' => GetAllSpecies(),
    'dataspecies' => GetAllPatients(),
		'dataclients' => GetAllClients()
	));
}


function createSave(){
  $createPatient=array(
  'patient_name' => $_POST['patient_name'],
  'species_id' => $_POST['species_id'],
  'patient_status' => $_POST['patient_status'],
  'client_id' => $_POST['client_id']
    );

	createFunc($createPatient);
	header("Location:" . URL . "Patients/index");
}



function editRoute($id){
  $data['patients']= GetOnePatient($id);

  render('patients/editP', array(
    'dataspecies' => GetAllSpecies(),
    'dataclients' => GetAllClients(),
    'onepatients' => GetOnePatient($id)
  ));
}

function editConfirm(){
  $data=array(
    'patient_name' => $_POST['patient_name'],
    'patient_status' => $_POST['patient_status'],
    'patient_id'   => $_POST["patient_id"]
  );
  editPatient($data);
  header("Location:" . URL . "Patients/index");
}

function deletePatient($id){
  deleteThis($id);
  header("Location:" . URL . "Patients/index");
}





 ?>
