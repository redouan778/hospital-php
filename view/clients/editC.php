<div>
  <form action="<?php echo URL ?>clients/editSaveThis" method="POST">
    <label class="title" for="fname"> First name</label>
    <input required type="text" id="person" name="firstname" value="<?php echo $client['client_firstname']; ?>" placeholder="Nieuwe naam">
    <input type="hidden" name="id" value="<?php echo $client['client_id']; ?>">

    <label class="title" for="fname">Last name</label>
    <input required type="text" id="day" name="lastname" value="<?php echo $client["client_lastname"]; ?>" placeholder="Dag">
    <input type="hidden" name="id" value="<?php echo $client['client_id']; ?>">

    <label class="title" for="fname">phone_number</label>
    <input required type="text" id="month" name="phone"  value="<?php echo $client["phone_number"]; ?>"  placeholder="Maand">
    <input type="hidden" name="id" value="<?php echo $client['client_id']; ?>">

    <label class="title" for="fname">mail</label>
    <input required type="text"  id="year" name="mail" value="<?php echo $client["E_mail"]; ?>" placeholder="Jaar">
    <input type="hidden" name="id" value="<?php echo $client['client_id']; ?>">

    <input id="button" type="submit" value="Versturen">
  </form>
</div>
