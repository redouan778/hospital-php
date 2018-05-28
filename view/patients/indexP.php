<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <table>
      <tr>
        <th colspan="2">Patient Name:</th>
        <th colspan="2">Species:</th>
        <th colspan="2">Patient Status:</th>
        <th colspan="2">Client:</th>
        <th colspan="2">Action:</th>
      </tr>
      <?
        foreach ($datapatients as $patients){
          echo "<tr>";
            echo "<td colspan=2>" . $patients["patient_name"] . $patients["id"];
            echo "<td colspan=2>" . $patients["species_description"];
            echo "<td colspan=2>" . $patients["patient_status"];
            echo "<td colspan=2>" . $patients["client_firstname"] . $patients["client_lastname"];

            echo "<td>" . "<a href='" . URL . "patients/editRoute/" . $patients["patient_id"] . "'>Edit</a></td>";
            echo "<td>" . "<a href='" . URL . "patients/deletePatient/" . $patients["patient_id"]  . "'>Delete</a></td>";
          echo "</tr>";
        }
      ?>
    </table>
    <p><a href="<?= URL?>patients/createP">Create</a></p>
  </body>
</html>
