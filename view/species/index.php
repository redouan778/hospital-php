<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li> <a href="<?=URL?>patiens/index">Patiens</li>
      <li> <a href="<?=URL?>clients/index">Clients</li>
      <li> <a href="<?=URL?>species/index">Species</li>
    </ul>

    <table border="1">
      <tr>
        <th>Species Description</th>
        <th colspan="2">Action</th>
      </tr>


      <?  foreach ($dataspecies as $species) {

              echo "<tr>";
              echo "<td>" . $species["species_description"]. "</td>";
              echo "<td>" . "<a href='" . URL . "species/edit/" . $species["species_id"] . "'>Edit</a></td>";
              echo "<td>" . "<a href='" . URL . "species/deleteThis/" . $species["species_id"] . "'>Delete</a></td>";
              echo "</tr>";
       }
       ?>
    </table>

    <p><a href="<?=URL ?>species/create">Create</a></p>
    <p><a href=<?=URL?> 'species/index'>Home</a></p>


  </body>
</html>
















<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>hoiii alles goed vandaag?</p>


  </body>
</html> -->
