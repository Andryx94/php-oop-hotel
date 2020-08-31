<?php
  require_once(__DIR__ . '/Room.php');
  require_once(__DIR__ . '/database.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Hotel oop</title>
  </head>
  <body>
      <h1>Hotel database oop</h1>

      <!-- Tabella stanze -->
      <table>
        <tr>
          <th>id</th>
          <th>room_number</th>
          <th>floor</th>
          <th>beds</th>
          <th>created_at</th>
          <th>updated_at</th>
        </tr>

        <!-- Scorro stanza in stanze -->
        <?php
        foreach ($rooms_array as $room) {
          $stanza = new Room($room['id'], $room['room_number'], $room['floor'], $room['beds'], $room['created_at']);
          $stanza->updated_at = $room['updated_at'];
          $stanza_data = $stanza->getRoomData();
          ?>

          <tr>
            <td> <?php echo $stanza_data['id'] ?> </td>
            <td> <?php echo $stanza_data['room_number'] ?> </td>
            <td> <?php echo $stanza_data['floor'] ?> </td>
            <td> <?php echo $stanza_data['beds'] ?> </td>
            <td> <?php echo $stanza_data['created_at'] ?> </td>
            <td> <?php echo $stanza_data['updated_at'] ?> </td>
          </tr>
        <?php } ?>
      </table>
      <!-- fine tabella stanze -->
  </body>
</html>
