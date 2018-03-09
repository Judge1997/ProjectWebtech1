<!DOCTYPE html>
<?php include("menubar.php");

require 'vendor/autoload.php';
use Oop\Database;
  use Oop\Account;
?>
<?php
$username="";
$password="";
$first_name="";
$last_name="";
$age="";
$gender="";
$email="";
$phone="";
$address="";
$id="";
$type="";
$image="/project/picture/img/icon.png";





      if(isset($_POST["username"])){
        $username = $_POST["username"];

      }

      if(isset($_POST["password"])){
        $password = $_POST["password"];
      }
      if(isset($_POST["first_name"])){
        $first_name = $_POST["first_name"];
      }
      if(isset($_POST["last_name"])){
        $last_name = $_POST["last_name"];
      }
      if(isset($_POST["age"])){
        $age = $_POST["age"];
      }
      if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
      }

      if(isset($_POST["email"])){
        $email = $_POST["email"];
      }
      if(isset($_POST["phone"])){
        $phone = $_POST["phone"];
      }
      if(isset($_POST["address"])){
        $address = $_POST["address"];
      }
      if(isset($_POST["id"])){
        $id = $_POST["id"];
      }
      if(isset($_POST["type"])){
      $type = $_POST["type"];
      }


      if(isset($_POST["username"])){
        $db=new Database();
        $count=$db->loadAccounts();
        $num=0;
        if (sizeof($count)<=0){
          
        }else{
            $num= $count[sizeof($count)-1]->getIdAcount();
        }

        $num+=1;
        $user = new Account($num,$username,$password,$first_name,$last_name,$age,$gender,$email,$phone,$address,$id,$type,$image);
        $db->addAccounts($user);
         echo "<script type='text/javascript'>window.location.href = \"http://localhost/project\";</script>";
        }
?>


<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
      form{
        padding: 20px 20px ;
        border:2px  ;
        border:2px solid black ;
        border-color: #989090 ;
        border-width: 5px;
        /* margin:40px 250px 250px 250px; */
        margin: auto;
        margin-top: 40px ;
        width: 60%;
        font-family: 'Roboto Condensed', sans-serif;
      }
      p{

        font-size: 20px;
        padding: 10px;

        /* margin: 0px 40px 0px 40px ; */
        margin: auto;
        width: 80%;
        padding-left: 40px;
        padding-right: 40px ;
        /* align-items: center ;
        text-align: center; */
      }
      h1{
        color: #AA2231;
        padding-left: 10px;
      }
      body{
        background-color: #F1F1F1;
      }
    </style>
  </head>
  <body>



    <form method="post" >
          <h1>Register</h1><br>

    <p>
    <div class="input-group input-group-sm mb-3" >
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
      </div>

      <input type="text"  name="username" placeholder="Enter your username" required value=""
      class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
      </div>

      <input type="text"  name="password" placeholder="Enter password" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
      </div>
      <input type="text" name="first_name" placeholder="ใส่ชื่อ" required value=""  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Surname</span>
      </div>
      <input type="text" name="last_name" placeholder="ใส่นามสกุล" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Age</span>
      </div>
      <input type="number" name="age" placeholder="อายุ" min="1" max="999"  data-format = "iii" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Gender</span>
      </div>
      <input type="radio" name="gender" value="male" checked="checked" > Male <input type="radio" name="gender" value="female">  Female

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
      </div>
       <input type="email" name="email" placeholder="ใส่อีเมล" value="" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Contact</span>
      </div>
      <input type="text" name="phone" placeholder="เบอร์โทร" minlength="9" maxlength="10" required value="" onKeyUp="if(this.value*1!=this.value) this.value='' ;" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
      </div>
      <input type="text" name="address" value=""  placeholder="ที่อยู่" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>

    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">ID card </span>
      </div>
      <input type="text" name="id" placeholder="รหัสบัตรประชาชน" onKeyUp="if(this.value*1!=this.value) this.value='' ;"  minlength = "13" maxlength = "13" data-format = "ddddddddddddd" required  value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    </div>
    </p>


      Role
        <select name="type">
          <option  value="admin">Admin</option>
            <option  value="organizer">Organizer</option>
            <option  value="attendant">Attendant</option>
          </select>

      <br>
      <br>
      <input type="submit" class="btn btn-info" name="submit" value="Accept" id="but">
     </p>
      <br>
         <br>
     </form>


  </body>
</html>
