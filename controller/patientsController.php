<?
  require(ROOT . "model/patientsModel.php");
  require(ROOT . "model/clientsModel.php");
  require(ROOT . "model/speciesModel.php");


  function index(){
    echo "Aanroep HospitalController";
    $datapatients =  GetAllPatients();
    render("patients/indexP", array(
     "datapatients" => $datapatients
   ));
  }

  function createP(){
    render("patients/createP");
    function create(){
      $createPatient=array(
        'patient_name' => $_POST['patient_name'],
        'patient_gender' => $_POST['patient_gender'],
        'patient_status' => $_POST['patient_status']
        );

      createFunc($createPatient);
      header('Location:' . URL . 'patients/index');
    }
}










 ?>
