<?php include_once("menubar.php");
use Oop\Account;
use Oop\Database;
use Oop\Event;
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php   $database = new Database();

      $events = $database->loadEvents();


      if (isset($_GET['day'])) {

          $events = $database->loadEvents();
          $n=0;
          $ar=array();
          for ($i = 1; $i < 8; $i++){
              for ($j = 0; $j < count($events); $j++){
                 $date=date_create($events[$j]->get_date());
                  if (  date_format($date,"N")==$i){
                    $ar[$n]=$events[$j];
                    $n+=1;
                  }

              }

          }

          $events=$ar;
          
          }

      if (isset($_GET['id'])) {
        $events = $database->loadEvents();



      }

       ?>

      <span>Filter</span>

      <input id="id" type="radio" name="radio" value="" onclick="location.href='eventPdf.php?id=true'"> id
      <input id="day"  type="radio" name="radio" value=""  onclick="location.href='eventPdf.php?day=true'" > รายวัน
      <input id="month"  type="radio" name="radio" value="" onclick="location.href='eventPdf.php?month=true'">  เดือน
      <input id="year"  type="radio" name="radio" value="" onclick="location.href='eventPdf.php?year=true'">  ปี
      <input id="user" type="radio" name="radio" value="" onclick="location.href='eventPdf.php?user=true'">  ตามผู้จัด
      <input id="capacity" type="radio" name="radio" value="" onclick="location.href='eventPdf.php?capacity=true'">  จำนวนผู้เข้าร่วม
      <input id="location" type="radio" name="radio" value="" onclick="location.href='eventPdf.php?location=true'">  สถานที่
      <br>
      <br>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">event name</th>
      <th scope="col">date</th>
      <th scope="col">id_ac</th>
      <th scope="col">capacity</th>
      <th scope="col">day</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($events as $event): ?>
      <tr>
        <td><?= $event->get_id_ev(); ?></td>
        <td><?= $event->getName_event(); ?></td>
        <td><?= $event->get_date(); ?></td>
        <td><?= $event->get_id_ac(); ?></td>
        <td><?= $event->get_capacity(); ?></td>
        <?php   $date=date_create($event->get_date());
            $day=date_format($date,"N");

          if (date_format($date,"N")==1) {
              $day='Monday';
          }elseif (date_format($date,"N")==2) {
              $day='Tuesday';
          }elseif (date_format($date,"N")==3) {
              $day='Wednesday';
          }elseif (date_format($date,"N")==4) {
              $day='Thursday';
          }elseif (date_format($date,"N")==5) {
              $day='Friday';
          }elseif (date_format($date,"N")==6) {
              $day='Saturday';
          }elseif (date_format($date,"N")==7) {
            $day='Sunday';
          }

        ?>
        <td><?= $day ?></td>
      </tr>


    <?php endforeach;

    ?>
  </tbody>
</table>
  </body>
</html>

<?php
      if (isset($_GET['day'])) {

          echo "<script>document.getElementById('day').checked = true;</script>";
          }

      if (isset($_GET['id'])) {

            echo "<script>document.getElementById('id').checked = true;</script>";

      } ?>
