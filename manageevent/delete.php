<?php
include_once("../menubar.php");
use Oop\Account;
use Oop\Database;


if(!isset($_SESSION)){
    session_start();
}

if ($_SESSION['user']->getType()!='admin'){
  echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/\";</script>";
}else{
  $username = $_GET['username'];
  //  $connection = new PDO('mysql:host=localhost:3306;dbname=project;charset=utf8mb4','root','');
  //  $affectedRows = $connection->exec( "DELETE FROM accounts WHERE username='$username'");
  $db=new Database();
  $db->deleteEvent($username);
   echo "<script type='text/javascript'>window.location.href = \"http://localhost/project/manageuser\";</script>";
}


 ?>
