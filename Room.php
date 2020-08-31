<?php
  // Classe Room
  class Room {
    public $id;

    public $room_number;

    public $floor;

    public $beds;

    public $created_at;

    public $updated_at;

    public function __construct($_id, $_room_number, $_floor, $_beds, $_created_at){
      $this->id = $_id;
      $this->room_number = $_room_number;
      $this->floor = $_floor;
      $this->beds = $_beds;
      $this->created_at = $_created_at;
    }

    public function getRoomData(){
      return [
        'id' => $this->id,
        'room_number' => $this->room_number,
        'floor' => $this->floor,
        'beds' => $this->beds,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }
  }
?>
