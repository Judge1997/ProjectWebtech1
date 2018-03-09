<?php
namespace Oop;
use PDO;
use Oop\Account;
use Oop\Event;
use Oop\Log;
use Oop\Comment;

class Database {
  function checkUsernameAndPassword($username, $password){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');

    $statement = $connection->query('SELECT * FROM accounts  WHERE username="'.$username.'" and password="'.$password.'"');
    $user="wrong";
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
          $user=new Account($row['id_ac'],$row['username'],$row['password'],$row['first_name'],$row['last_name'],$row['age']
          ,$row['gender'],$row['email'],$row['phone'],$row['address'],$row['ID'],$row['type'],$row['image']);
          return $user;
        }
    return $user;
  }


  function loadAccount($id_ac){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM accounts WHERE id_ac="'.$id_ac.'"');
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $user = new Account($row['id_ac'],$row['username'],$row['password'],$row['first_name'],$row['last_name'],$row['age']
      ,$row['gender'],$row['email'],$row['phone'],$row['address'],$row['ID'],$row['type'],$row['image']);
      return $user;
    }
  }
  function loadAccounts(){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM accounts');
    $users = array();
    $count = 0;
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $user = new Account($row['id_ac'],$row['username'],$row['password'],$row['first_name'],$row['last_name'],$row['age']
      ,$row['gender'],$row['email'],$row['phone'],$row['address'],$row['ID'],$row['type'],$row['image']);
      $users[$count] = $user;
      $count = $count + 1;
    }
    return $users;
  }

  function loadAllaccounts(){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM accounts');
    $statement->execute();
    $people = $statement->fetchAll(PDO::FETCH_OBJ);
    return $people;
  }

  function addAccounts($user){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
      $affectedRows = $connection->exec(
        "INSERT INTO accounts VALUES ('".$user->getIdAcount()."','".$user->getUsername()."','" .$user->getPassword().
        "','".$user->getFirst_name()."','".$user->getLast_name()."','" .$user->getAge()."'
        ,'".$user->getGender()."','".$user->getEmail()."','" .$user->getPhone()."','".$user->getAddress().
        "','".$user->getId()."','" .$user->getType()."','" .$user->getImage()."')"
      );

  }
  function deleteAccounts($username){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $affectedRows = $connection->exec( "DELETE FROM accounts WHERE username='$username'");
  }

  function updateAccounts($user,$idt){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');

    $sql = "UPDATE accounts SET username='".$user->getUsername()."', password='".$user->getPassword()."',first_name='".$user->getFirst_name().
    "',last_name='".$user->getLast_name()."' ,age='".$user->getAge()."', gender='".$user->getGender()."',email='".$user->getEmail().
    "' ,phone='".$user->getPhone()."',address='".$user->getAddress()."',id='".$user->getId()."' , type='".$user->getType()."',image='".$user->getImage().
    "' WHERE username='$idt'";

    $affectedRows = $connection->exec($sql);
  }

  function loadAttendants($id_ev){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT ac.* FROM accounts as ac,attendants as at WHERE '.'"ac.id_ac"="at.id_ac" and "at.id_ev"='.$id_ev);
    $users = array();
    $count = 0;
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $user = new Account($row['id_ac'],$row['username'],$row['password'],$row['first_name'],$row['last_name'],$row['age']
      ,$row['gender'],$row['email'],$row['phone'],$row['address'],$row['ID'],$row['type'],$row['image']);
      $users[$count] = comment;
      $count = $count + 1;
    }
    return $users;
  }

  function loadProfile($username){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM accounts WHERE "username"=' . $username);
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $user = new Account($row['id_ac'],$row['username'],$row['password'],$row['first_name'],$row['last_name'],$row['age']
      ,$row['gender'],$row['email'],$row['phone'],$row['address'],$row['ID'],$row['type'],$row['image']);
      $_SESSION['user']=$user;
      return $user;
    }
  }

  function loadEvents(){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM events');
    $events = array();
    $count = 0;
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $event = new Event($row['id_ev'],$row['id_ac'],$row['name_event'],$row['detail'],$row['image'],$row['teaser_VDO'],$row['date'],$row['time'],$row['location'],$row['map'],$row['capacity']
      ,$row['free'],$row['type']);
      $events[$count] = $event;
      $count = $count + 1;
    }

    return $events;
  }


  function deleteEvent($id_ev){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $affectedRows = $connection->exec( "DELETE FROM events WHERE id_ev='$id_ev'");
  }


  function loadAllevents(){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM events');
    $statement->execute();
    $people = $statement->fetchAll(PDO::FETCH_OBJ);
    return $people;
  }

  function addEvents($event){

    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
      $affectedRows = $connection->exec(
        "INSERT INTO events VALUES ('".$event->get_id_ev()."','".$event->get_id_ac()."','" .$event->getName_event().
        "','".$event->get_detail()."','".$event->get_image()."','" .$event->get_teaser_VDO()."'
        ,'".$event->get_date()."','".$event->get_time()."','" .$event->get_location()."','".$event->get_map().
        "','".$event->get_capacity()."','" .$event->get_free()."','" .$event->get_type()."')"
      );

  }

  function loadLogs(){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM logs');
    $logs = array();
    $count = 0;
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $log = new Event($row['id_lo'], $row['id_ac'], $row['event'], $row['date'], $row['time']);
      $logs[$count] = $log;
      $count = $count + 1;
    }

    return $logs;
  }

  function loadComments($id_ev){
    $connection = new PDO('mysql:host=localhost;dbname=project;charset=utf8mb4','root','');
    $statement = $connection->query('SELECT * FROM comments WHERE "id_ev"='.$id_ev);
    $comments = array();
    $count = 0;
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $comment = new Comments($row['id_co'], $row['id_ac'], $row['id_ev'], $row['message'], $row['date'], $row['time']);
      $comments[$count] = comment;
      $count = $count + 1;
    }

    return $comments;
  }

}

 ?>
