<!DOCTYPE html>
<?php
require 'vendor/autoload.php';
use Oop\Account;
use Oop\Database;



if(!isset($_SESSION)){
    session_start();
}

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <style>



    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


  </head>
  <body>


   <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color: #e3f2fd;">
     <div class="container-fluid" >

       <div class="navbar-header">
         <a class="navbar-brand" style='font-size: 36px;color: white; ' href="/project/index.php">Surat Event</a>

       </div>

       <ul class="nav navbar-nav" >
         <li id="login" class="nav-item">
           <a class="nav-link" href="/project/login.php">Login</a>
          </li>

          <li id="regis" class="nav-item">
            <a class="nav-link" href="/project/regis.php">Register</a>
           </li>





         <li class="nav-item dropdown" id="menu">
           <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
             Menu
           </a>
           <div class="dropdown-menu">
             <a id="manage" class="dropdown-item" href="/project/manageuser/">จัดการผู้ใช้</a>
             <a id="createEvent" class="dropdown-item" href="/project/createEvent.php">สร้างEvent</a>
              <a id="eventPdf" class="dropdown-item" href="/project/manageevent/manageevent.php">จัดการEvent</a>
             <a id="logout" class="dropdown-item" href="/project/logout.php">logout</a>

           </div>
         </li>

         <?php if(isset($_SESSION['user'])){
          $username=$_SESSION['user']->getUsername();


          $pic=$_SESSION['user']->getImage();



          echo "<img src=$pic class='rounded-circle' height='50' width='50'>";
          echo "<span style='font-size: 22px;  color: white;    margin-left: 10px;'>$username</span>";

          // try {
          //
          //       echo "<img src=$pic  height='50' width='50'>";
          // } catch (Exception $e) {
          //     echo "<img src='/project/img/icon.png' class='rounded-circle' height='50' width='50'>";
          //
          // }


        }
         ?>



       </ul>
     </div>
   </nav>

  </body>
</html>

<?php

echo
"<script type='text/javascript'>
document.getElementById('menu').style.display = 'none';
document.getElementById('manage').style.display = 'none';
document.getElementById('createEvent').style.display = 'none';
document.getElementById('logout').style.display = 'none';
document.getElementById('eventPdf').style.display = 'none';

</script>";

if(isset($_SESSION) ){
  if(isset($_SESSION['user'])){

    echo
    "<script type='text/javascript'>

    document.getElementById('regis').style.display = 'none';
    document.getElementById('menu').style.display = 'block';
    document.getElementById('manage').style.display = 'none';
    document.getElementById('createEvent').style.display = 'none';
    document.getElementById('logout').style.display = 'block';
    document.getElementById('login').style.display = 'none';
    document.getElementById('eventPdf').style.display = 'none';
    </script>";





   if($_SESSION['user']->getType()=='admin'){
     echo
     "<script type='text/javascript'>
     document.getElementById('manage').style.display = 'block';
     document.getElementById('createEvent').style.display = 'block';
     document.getElementById('eventPdf').style.display = 'block';
     </script>";

   }
   if($_SESSION['user']->getType()=='organizer'){
     echo
     "<script type='text/javascript'>
     document.getElementById('manage').style.display = 'none';
     document.getElementById('createEvent').style.display = 'block';
      document.getElementById('eventPdf').style.display = 'block';
     </script>";

   }

  }else{
    echo
    "<script type='text/javascript'>
    document.getElementById('menu').style.display = 'none';
    document.getElementById('manage').style.display = 'none';
    document.getElementById('createEvent').style.display = 'none';
    document.getElementById('logout').style.display = 'none';
    document.getElementById('login').style.display = 'block';
    </script>";

        }



}


  ?>
