<?php


class Room {
    public $room_number;
    public $beds;
    public $floor;

    function __construct($pippo, $pluto, $paperino) {
        $this->room_number = $pippo;
        $this->beds = $pluto;
        $this->floor = $paperino;

    }

    function printing() {
        echo 'Il numero della stanza: '.$this->room_number.' Il piano è: '.$this->floor.' Il numero di letti: '.$this->beds;
    }

}


$suite = new Room(15, 3, 6);

$suite->printing();


?>