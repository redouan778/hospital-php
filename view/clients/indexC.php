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
         <th colspan="2">First name:</th>
         <th colspan="2">Last name:</th>
         <th colspan="2">Phone number:</th>
         <th colspan="2">E-mail:</th>
         <th colspan="2">Action:</th>
       </tr>
 <?

       foreach ($dataclients as $client) {
           echo "<tr>";
               echo "<td colspan=2>" .  $client["client_firstname"]. "</td>";
               echo "<td colspan=2>" .  $client["client_lastname"] . "</td>";
               echo "<td colspan=2>" .  $client["phone_number"] . "</td>";
               echo "<td colspan=2>" .  $client["E_mail"]. "</td>";
               echo "<td>" . "<a href='" . URL . "clients/edit/" . $client["client_id"]. "'>Edit</a></td>";
               echo "<td>" . "<a href='" . URL . "clients/deleteThis/" . $client["client_id"]. "'>Delete</a></td>";
             echo "</tr>";

       }

        ?>
     </table>

     <p><a href="<?=URL?>clients/create">Create</a></p>
     <p><a href=<?=URL?>"clients/index">Home</a></p>


   </body>
 </html>
