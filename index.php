<!DOCTYPE html>
<?php include_once("menubar.php"); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title style="font-family: 'Roboto Condensed', sans-serif;">Surat Garden</title>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
      .contain_box{
        text-align: center;
        /* font-family: 'Itim', cursive; */
        font-size : 30px;
        display : flex;
        flex-direction : row;
        flex-wrap : wrap;
        justify-content : center;
        align-items: center;
        /* border: 5px solid #00e676; */
        /* background-color:lightyellow; */
        width: 100%;
      }

      .box{
        border: 5px solid #A1B0BF;
        height: 300px;
        width: 350px;
        margin: 3%;
      }
      form{
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;

             padding: 20px 20px ;
             border:2px  ;
             border:2px solid black ;
             border-color: #A1B0BF ;
             border-width: 5px;
             border-radius: 25px;
             margin:40px 250px 250px 250px;
             margin: auto;
             margin-top: 40px ;
             width: 80%;
             font-family: 'Roboto Condensed', sans-serif;

      }
      p{
        font-size: 30px;
        color: #EBEBED;
        text-shadow:3px 3px 20px #FFFFFF ;


           font-family: 'Roboto Condensed', sans-serif;

      }
      body{
          background-image: url("/project/picture/img/gray2.jpg");
          background-size: cover ;
          background-attachment: fixed;
      }

    </style>





      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body >
    <br>
    <center><p>What do you love?<br>
      Do more of it with Meetup</p></center>

    <center><img src="/project/picture/img/mt2.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="500px"></center>

    <p style="padding-left:40px ;margin:40px 250px 40px 250px;">Meetups Lists</p>




    <?php
    require 'vendor/autoload.php';
    use Oop\Account;
    use Oop\Database;
    use Oop\Event;

    $database = new Database();

    $events = $database->loadEvents();
    function renderEvents($events,$page=1){
      for ($i = ($page*25)-25; $i < count($events); $i++){
            $pic=$events[$i]->get_image();

        $output = '<form id="form'.$i.'" class="box" action="" method="get" style="background-image: url('.$pic.')">
                      <input hidden type="text" name="username" value="'.$events[$i]->get_id_ev().'">
                      <div style="width: 100%;height:100%;" href="/index.php?firstname=Mickey">'.($i+1).'.'.$events[$i]->getName_event().'</div>

                      <input hidden type="submit" value="Submit">

                  </form>'

                  ;
          // echo "string";
        // $output = '<div class="box" href="/index.php?firstname=Mickey">'.($i+1).'.'.$events[$i]->getName_event().'</div>';


        echo $output;

      }
    }

    echo '<div class="contain_box">';
    if (isset($page)){
      renderEvents($events,$page);
    } else {
      renderEvents($events);
    }
    echo '</div>';

     ?>
     <!-- <script src="jquery-3.3.1.min.js" charset="utf-8"></script> -->

     <script type="text/javascript">
          $(document).ready(function(){
            console.log("Ready start");
            <?php
              function renderScriptEvents($events,$page=1){
                for ($i = ($page*25)-25; $i < count($events); $i++){
                $output = '$("#form'.$i.'").on({
                  click: function(){
                    document.getElementById("form'.$i.'").submit();
                  }
                });';
                echo $output;
                }
              }

              if (isset($page)){
                renderScriptEvents($events,$page);
              } else {
                renderScriptEvents($events);
              }

           ?>

          });
    </script>


  </body>
</html>
