<html>
<?php
  include_once("../menubar.php");
  use Oop\Account;
  use Oop\Database;

  $db=new Database();
  $people=$db->loadAllevents();

  if (isset($_SESSION['user'])){
    if ($_SESSION['user']->getType()!='admin'){
      echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/\";</script>";
    }
  }else {
    echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/\";</script>";
  }


?>

  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    }
    #description {
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    }

    #infowindow-content .title {
    font-weight: bold;
    }

    #infowindow-content {
    display: none;
    }

    #map #infowindow-content {
    display: inline;
    }

    .pac-card {
    margin: 10px 10px 0 0;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    background-color: #fff;
    font-family: Roboto;
    }

    #pac-container {
    padding-bottom: 12px;
    margin-right: 12px;
    }

    .pac-controls {
    display: inline-block;
    padding: 5px 11px;
    }

    .pac-controls label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
    }

    #pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 400px;
    }

    #pac-input:focus {
    border-color: #4d90fe;
    }

    #title {
    color: #fff;
    background-color: #4d90fe;
    font-size: 25px;
    font-weight: 500;
    padding: 6px 12px;
    }
    #target {
    width: 345px;
    }
    #floating-panel {
    position: absolute;
    top: 10px;
    left: 25%;
    z-index: 5;
    background-color: #fff;
    padding: 5px;
    border: 1px solid #999;
    text-align: center;
    font-family: 'Roboto','sans-serif';
    line-height: 30px;
    padding-left: 10px;
    }


    /* aaa */

    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
      body{
          font-family: 'Roboto Condensed', sans-serif;
        background-color: #F1F1F1;
      }
      h1{
        color: #AA2231;
        padding-left: 10px;
      }
      form{
        padding: 20px 20px ;
        border:2px  ;
        border:2px solid black ;
        border-color: #989090 ;
        border-width: 5px;
        margin:40px 250px 250px 250px;
        margin: auto;
        margin-top: 40px ;
        width: 80%;
        font-family: 'Roboto Condensed', sans-serif;
      }

      #map {
        height: 50%;
        width: 100%;
        margin-top: 10px;
      }



/* asasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa */
    table{
      table-layout: fixed;
    }


th {
  text-align: center;

}
td{
  word-wrap: break-word;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 45%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}


.close  {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


.modal-header {
    padding: 2px 16px;
    background-color: SkyBlue   ;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    color: white;
}
</style>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">


        <script>
            $(document).ready(function() {
                  $('#example').DataTable();
                } );
        </script>
  </head>
  <body>
<br>

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

     <thead>
  <tr>
    <th>id_ev</th>
    <th>name_event</th>
    <th>id_ac</th>
      <th>username</th>



    <th >capacity</th>
    <th >price</th>
    <th>type</th>
      <th>time</th>
    <th>day</th>
    <th>month</th>
      <th>date</th>
    <th>action</th>
    <th>img</th>

  </tr>
</thead>
<tbody>
  <?php foreach($people as $person): ?>
    <tr>
      <td><?= $person->id_ev; ?></td>
      <td><?= $person->name_event; ?></td>
      <td><?= $person->id_ac; ?></td>

      <?php

        $a=$db->loadAccount($person->id_ac);
        ?>

      <td><?= $a->getUsername() ?></td>
      <td><?= $person->capacity; ?></td>
      <td><?= $person->free; ?></td>
      <td><?= $person->type; ?></td>
      <td><?= $person->time; ?></td>

    <td>
      <!-- <?php echo $person->image  ?> -->
      <img src=<?= $person->image ?> class='rounded-circle' height='50' width='50'>
    </td>


      <?php


      ?>
      <?php   $date=date_create($person->date);
          $day=date_format($date,"N");

        if (date_format($date,"N")==1) {
            $day='(1) Monday';
        }elseif (date_format($date,"N")==2) {
            $day='(2) Tuesday';
        }elseif (date_format($date,"N")==3) {
            $day='(3) Wednesday';
        }elseif (date_format($date,"N")==4) {
            $day='(4) Thursday';
        }elseif (date_format($date,"N")==5) {
            $day='(5) Friday';
        }elseif (date_format($date,"N")==6) {
            $day='(6) Saturday';
        }elseif (date_format($date,"N")==7) {
          $day='(7) Sunday';
        }

      ?>
      <td ><?= $day ?></td>

      <?php   $date=date_create($person->date);
          $month=date_format($date,"n");

        if ($month==1) {
            $month='('.$month.') January';
        }elseif ($month==2) {
              $month='('.$month.') February';
        }elseif ($month==3) {
              $month='('.$month.') March';
        }elseif ($month==4) {
              $month='('.$month.') April';
        }elseif ($month==5) {
              $month='('.$month.') May';
        }elseif ($month==6) {
              $month='('.$month.') June';
        }elseif ($month==7) {
            $month='('.$month.') July';
        }elseif ($month==8) {
            $month='('.$month.') August';
        }elseif ($month==9) {
            $month='('.$month.') September';
        }elseif ($month==10) {
            $month='('.$month.') October';
        }elseif ($month==11) {
            $month='('.$month.') November';
        }elseif ($month==12) {
            $month='('.$month.') December';
        }

      ?>
      <td><?= $month ?></td>
      <td><?= $person->date; ?></td>

      <textarea hidden id="<?= $person->id_ev ?>"  rows="8" cols="80" ><?= $person->detail ?></textarea>
      <textarea hidden id="<?= $person->id_ev ?>_2"  rows="8" cols="80" ><?= $person->location ?></textarea>
      <td>


        <button class="btn btn-info" onclick="ball('<?= $person->id_ev ?>','<?= $person->id_ac ?>','<?= $person->name_event ?>
          ','<?= $person->image ?>','<?= $person->teaser_VDO ?>','<?= $person->date ?>','<?= $person->time ?>
          ','<?= $person->map ?>','<?= $person->capacity ?>','<?= $person->free ?>','<?= $person->type ?>')">Edit</button>

        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?username=<?= $person->username ?>" class='btn btn-danger'>Delete</a>
      </td>
    </tr>
  <?php endforeach;
  ?>



</tr>
</tbody>
</table>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" >
    <div class="modal-header">
      <span class="close">&times;</span>

    </div>
    <div class="modal-body">

            <form  action="update.php" method="post" enctype="multipart/form-data" >

              <!-- <h2 style="color:#FFFFFF;margin-right:80% ; background-color:#343A40 ;padding:10px  ; padding-left:20px ">Create Event</h2> -->
              <!-- name event:<input type="text" name:"event" size="50px"> -->

              <div class="input-group input-group-sm mb-3" style="padding-right:35%">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm"  style="color:#343A40  ;margin-top:10px ;  font-size:18px ;background-color: #00cc99;">Name event</span>
                </div>
                <input id='nameevent' required value="" onkeypress="return event.keyCode != 13;" type="text"  name="nameevent" size="50px" style="margin-top:10px ;  " class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
              </div>


              <!-- details: -->
              <div class="input-group input-group-sm mb-3 detailbox"  style="padding-right:35%">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ; font-size:18px ;background-color: #00cc99;" >Details</span>
                  <textarea id="textarea" rows=5% cols="50%" name="detail" >
                  </textarea>
                </div>
                <!-- <input type="text"  name="comment"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" > -->
              </div>

              <!-- <br> -->
              <!-- <div class="detailbox">
                <textarea rows="4" cols="50" name="comment" >
                </textarea>
              </div> -->



              <div class="input-group input-group-sm mb-3 "  style="padding-right:68%">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ; margin-top:10px ;  font-size:18px ;background-color: #00cc99;">Date</span>
                </div>
                <input id='date' required value="" onkeypress="return event.keyCode != 13;" type="date"  name="date" size="50px" style="margin-top:10px ; "class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
              </div>
              <!-- date:<input type="date" name="date" > -->



              <!-- time:<input type="number" name="hours" min="1"max="12">:<input type="number" name="minute"min="0" max="59"><input type="radio" name="am" value="am">am <input type="radio" name="pm" value="pm">pm -->


              <div class="input-group input-group-sm mb-3" style="padding-right:68%">
                <div class="input-group-prepend">
                  <span class="input-group-text form-control " type="time" value="00:00:00"  id="example-time-input" style="color:343A40 ; font-size:18px ;background-color: #00cc99;">Time</span>
                </div>
                <input id='time' required value="" onkeypress="return event.keyCode != 13;" type="time" name="time"  size="50px" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
              </div>

              <!-- <label for="example-time-input" class="col-2 col-form-label">Time</label>
              <input class="form-control" type="time" value="00:00:00" id="example-time-input"> -->




          <div class="input-group input-group-sm mb-3 detailbox" style="padding-right:35%">
            <div class="input-group-prepend" style="padding-right:68%">
              <span class="input-group-text" id="example-time-input" style="color:343A40 ; font-size:18px ;background-color: #00cc99;" >Location</span>
              <textarea id="location" rows=5% cols="50%" name="location" >
              </textarea>
            </div>



          <input onkeypress="return event.keyCode != 13;" id="pac-input" class="controls" type="text" placeholder="Search Box">


          <div id="map"></div>

          <script>
          var b=1;
          var map;
          var markers = [];

            function initAutocomplete() {
               map = new google.maps.Map(document.getElementById('map'), {
                center: {lat:13.7563, lng: 100.5018},
                zoom: 10,
                mapTypeId: 'roadmap'
              });
              var input = document.getElementById('pac-input');
              var searchBox = new google.maps.places.SearchBox(input);
              map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
              map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
              });


              searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();
                if (places.length == 0) {
                  return;
                }
                markers.forEach(function(marker) {
                  marker.setMap(null);
                });
                // markers = [];
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                  if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                  }
                  var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                  };
                  markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                  }));
                  if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                  } else {
                    bounds.extend(place.geometry.location);
                  }
                });
                map.fitBounds(bounds);
              });

            map.addListener('click', function(event) {
            addMarker(event.latLng);
          });

          function addMarker(location) {

                  setMapOnAll(null);
                   // markers = [];
                 var marker = new google.maps.Marker({
                   position: location,
                   map: map
                 });
                 markers.push(marker);
               }

               function setMapOnAll(map) {
                 for (var i = 0; i < markers.length; i++) {
                   markers[i].setMap(map);
                 }

               }

              }


          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPofnI_kmNRH6rSTH-AZbIwQiywFwQLmk&libraries=places&callback=initAutocomplete"
          async defer></script>

          <br>
          <input hidden id="latlng" type="text" name="latlng" value="">
          <br>
          <br>



          <br>
          <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ; margin-top:10px ; font-size:18px ;background-color: #00cc99;">Capacity</span>
          </div>
          <input id='capacity' required value="" onkeypress="return event.keyCode != 13;" type="number"  name="capacity"  min="1" size="40px" style="margin-top:10px ; "  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
          </div>

          <br>
          <br>

          <br>


          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ; margin-top:10px ; font-size:18px ;background-color: #00cc99;">Price(bath)</span>
          </div>
          <input  id="price" required value="" onkeypress="return event.keyCode != 13;" type="number"  name="free"  min="0" size="40px" style="margin-top:10px ; "  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
          </div>



          <h1 style="color:#5FBF89 ; font-size:22px ; padding-right:10px">Image</h1>

          <!-- <form class="" action="index.html" method="post" enctype="multipart/form-data"> -->

          <input onkeypress="return event.keyCode != 13;" type="file" class="btn btn-success"   style="margin-bottom:10px"  id="inputGroupFile02" name="fileimage"  >

          <!-- <input  type="file" name="image"> -->


          <br>
          <h1 style="color:#25A2B7 ; font-size:22px ;padding-right:10px">Teaser</h1>

          <!-- <input type="file" name="teaser" > -->
          <input onkeypress="return event.keyCode != 13;" type="file" class="btn btn-info" class="custom-file-input"  class="custom-file-label" style="margin-right:20px" id="inputGroupFile03" name="teaser">
          <br>


          <br>

            <p style="color:#343A40; font-size:20px;background-color:#20CB9A ;margin-right:93.6%">Type</p>
          <select id='type' class="typedetail" name="type">
            <option value="sport">sport</option>
            <option value="education">education</option>
            <option value="entertainment">entertainment</option>
            <option value="Workshops">Workshops</option>
            <option value="Technology">Technology</option>
            <option value="party">party</option>
          </select>
          <br>
          <br>

            <!-- <br> -->

            <input type="submit" class="btn btn-secondary" name="submit" value="submit" >


            </form>


            <br>




  </div>
</div>



  </body>
</html>
<script>

var modal = document.getElementById('myModal');


var span = document.getElementsByClassName("close")[0];

function ball(id_ev,id_ac,name_event,image,teaser_VDO,date,time,location,capacity,free,type) {
    modal.style.display = "block";
    document.getElementById("nameevent").value=name_event.trim();
    document.getElementById("textarea").value=document.getElementById(id_ev).value.trim();
    document.getElementById("location").value=document.getElementById(id_ev+"_2").value.trim();
    document.getElementById("date").value=date.trim();

    document.getElementById("time").value=time.trim();
    document.getElementById("capacity").value=capacity.trim();
    document.getElementById("price").value=free.trim();
    var element = document.getElementById('type');
    element.value = type.trim();

    var res = location.split(",");

      var latlng = {lat: parseFloat(res[0]), lng: parseFloat(res[1])};
      console.log(latlng);

    map.setCenter(latlng);
    var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });
    markers.push(marker);






}




span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}
</script>
