<?php include_once("menubar.php");

if ($_SESSION['user']->getType()=='attendant'){
  echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/\";</script>";

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Profile</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
  body{
      font-family: 'Roboto Condensed', sans-serif;
    background-color: #F1F1F1;
      background-image: url("/project/picture/img/gray2.jpg");

  }


form{
  padding: 20px 20px ;
  border:2px  ;
  border:2px solid black ;
  border-color: #989090 ;
  border-width: 5px;
  border-radius: 25px;
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
  color:#25A2B7
  /* align-items: center ;
  text-align: center; */
}
h1{
  color: #2FA2B6;
  /* padding-left: 30px; */
  /* background-color: white; */
  text-shadow:1px 2px 20px #000000 ;

  margin-right:75% ;
  margin-left: 10%;
}

</style>
  </head>
  <body>
    <form>


<p>
        <h1> Profile</h1><br>
    <div class="container-fluid">
      <center><img id="imageold" class="rounded-circle" src='./image/8.jpg' > </center>
      <br>
      <form class="" method="post" enctype="multipart/form-data">
     <center><input type="file" class="btn btn-success" id="inputGroupFile02" name='file'></center>
       <br>



     <div class="input-group input-group-sm mb-3" >
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Username</span>
       </div>

       <input type="text"  name="username" placeholder="Enter your username" required value=""
       class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<php echo $row[]" id="usernameold">
     </div>

     <!-- username:  <input type="text" name:"username" size="50px" value="<php echo $row[]" id="usernameold"> -->

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Password</span>
       </div>

       <input type="text"  name="password" placeholder="Enter your password" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required value="" id="passwordold">
     </div>
     <!-- password:  <input class="glyphicon glyphicon-lock" type="password" name:"password" size="50px" required value="" id="passwordold"> -->

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Name</span>
       </div>
       <input type="text" name="firstname" placeholder="Enter your name" required value=""  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="firstnameold">

     </div>
     <!-- firstname: <input type="text" name:"firstname" size="50px" required value="" id="firstnameold"> -->

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Surname</span>
       </div>
       <input type="text" name="last_name" placeholder="Enter your Surname" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="lastnameold">

     </div>
     <!-- lastname:  <input type="text" name:"lastname" size="50px" required value="" id="lastnameold"> -->


     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Age</span>
       </div>
       <input type="number" name="age" placeholder="Enter your age" min="15" max="99"  data-format = "iii" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="ageold">

     </div>
     <!-- age: <input type="number" name="age" min="15" max="99" size="50px" required value="" id="ageold"> -->

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="margin-right:10px ;color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Gender</span>
         <select class="genderID" required value="" id="genderold">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
       </div>

     </div>


     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">E-mail</span>
       </div>
        <input type="email" name="email" placeholder="Enter your E-Mail" value="" required value="" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  id="emailold">

     </div>
     <!-- email: <input type="email" name="email" size="50px" id="emailold" placeholder="Email"> -->

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Contact</span>
       </div>
       <input type="text" name="phone" placeholder="Enter your number" minlength="9" maxlength="10" required value=""
       onKeyUp="if(this.value*1!=this.value) this.value='' ;" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
       id="phoneold">

     </div>
     <!-- phone: <input type="text" minlength="9" maxlength="10" required value="" onKeyUp="if(this.value*1!=this.value) this.value=''" id="phoneold"> -->

     <div class="input-group input-group-sm mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroup-sizing-sm" style="color:343A40 ;  font-size:16px ;background-color: #25A2B7;">Address</span>
       </div>
       <textarea rows="4" cols="1500" name="address" id="addressold"placeholder="Enter your address" ></textarea>
     </div>

</p>

     <!-- address: -->
     <!-- <br> -->
     <!-- <textarea rows="4" cols="50" name="address" id="addressold" >
        </textarea> -->


    <input style="margin-left:85%" type="submit" class="btn btn-secondary"name="" value="submit" >


        <br>


        </form>
        <?php
        $connection = new PDO(
         'mysql:host=localhost:3306;dbname=project;charset=utf8mb4',
         'root',
         '');


          $num=0;
           $statement = $connection->query('SELECT * FROM accounts');

              while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                  $num=$row->id_ac;
              }
         ?>









    </div>


  </body>
</form>
</html>
<script>
document.getElementById("usernameold").value=username;
document.getElementById("passwordold").value=password;
document.getElementById("firstnameold").value=first_name;
document.getElementById("lastnameold").value=last_name;
document.getElementById("ageold").value=age;
document.getElementById("genderold")element.value = gender;
document.getElementById("emailold").value=email;
document.getElementById("phoneold").value=phone.trim();
document.getElementById("addressold").value=address;
document.getElementById("imageold").value=image;
</script>
