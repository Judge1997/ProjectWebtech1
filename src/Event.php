<?php
namespace Oop;

class Event{
  protected $id_ev;
  protected $id_ac;
  protected $name_event;
  protected $detail;
  protected $image;
  protected $teaser_VDO;
  protected $date;
  protected $time;
  protected $location;
  protected $map;
  protected $capacity;
  protected $free;
  protected $type;

  function __construct($id_ev,$id_ac,$name_event, $detail,$image, $teaser_VDO,$date, $time,$location, $map,$capacity, $free,$type)
  {
    $this->id_ev = $id_ev;
    $this->id_ac = $id_ac;
    $this->name_event = $name_event;
    $this->detail = $detail;
    $this->image = $image;
    $this->teaser_VDO = $teaser_VDO;
    $this->date = $date;
    $this->time = $time;
    $this->location = $location;
    $this->map = $map;
    $this->capacity = $capacity;
    $this->free = $free;
    $this->type = $type;
  }

  function get_id_ev(){
    return $this->id_ev;
  }

  function get_id_ac(){
    return $this->id_ac;
  }

  function getName_event(){
    return $this->name_event;
  }

  function get_detail(){
    return $this->detail;
  }
  function get_image(){
    return $this->image;
  }

  function get_teaser_VDO(){
    return $this->teaser_VDO;
  }

  function get_date(){
    return $this->date;
  }

  function get_time(){
    return $this->time;
  }

  function get_location(){
    return $this->location;
  }

  function get_map(){
    return $this->map;
  }

  function get_capacity(){
    return $this->capacity;
  }

  function get_free(){
    return $this->free;
  }

  function get_type(){
    return $this->type;
  }

}

 ?>
