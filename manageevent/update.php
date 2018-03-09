<?php

include_once("../menubar.php");
use Oop\Account;
use Oop\Database;

if(!isset($_SESSION)){
        session_start();
}

if ($_SESSION['user']->getType()!='admin'){
  echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/\";</script>";
}
else{


  $name_event=$_POST["nameevent"];
  $detail =$_POST["detail"];



  $date=$_POST["date"];
  $time=$_POST["time"];
  $location=$_POST["location"];
  $map=$_POST["latlng"];
  $capacity=$_POST["capacity"];
  $free=$_POST["free"];
  $type=$_POST["type"];


  if (isset($_FILES['fileimage'])){
    $pic= basename($_FILES['fileimage']["name"]);
    $image= "/project/picture/event/$pic";
    if (move_uploaded_file($_FILES["fileimage"]["tmp_name"],"../picture/event/$pic")){
        echo "uploaded";
    }else{
        echo "cant";
    }
  }
  if (isset($_FILES['teaser'])){
    $video= basename($_FILES['teaser']["name"]);
    $video2= "/project/picture/video/$video";
    if (move_uploaded_file($_FILES["teaser"]["tmp_name"],"../picture/video/$video")){
        echo "uploaded";
    }else{
        echo "cant";
    }
  }


  echo $image;
  echo $video2;



  $db=new Database();
  // $user = new Account('',$username,$password,$first_name,$last_name,$age,$gender,$email,$phone,$address,$id,$type,$image);
  // $db->updateAccounts($user,$idt);

  // echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/manageuser\";</script>";
}



 ?>
