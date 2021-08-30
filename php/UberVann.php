<?php
require_once("./Car.php");

class UberVann extends Car{
    private $typeCarAccepted;
    private $SeatsMaterial;

    public function __construct($license,$account,$Passenger,$typeCarAccepted,
    $SeatsMaterial ){
        if($Passenger == 6){
            parent::__construct($license,$account,$Passenger);
            $this->typeCarAccepted=$typeCarAccepted;
            $this->SeatsMaterial=$SeatsMaterial;
        }else{
            $this->typeCarAccepted=[];
            $this->SeatsMaterial=[];
            echo ' el numero de pasajeros debe ser de 6 ';
        }
    }

    function printUberVann(){
        if (!($this->SeatsMaterial == [] && $this->typeCarAccepted==[])) {
            for ($i=0; $i  < count($this->typeCarAccepted) ; $i++) { 
                echo ' '. $this->typeCarAccepted[$i];
            }

            for ($i=0; $i  < count($this->SeatsMaterial) ; $i++) { 
                echo ' '. $this->SeatsMaterial[$i];
            }
            parent::printDataCar();
        }else{
            echo 'asigne un valor correcto para pasajeros';
        }
    }

    function setTypeCarAccepted($typeCarAccepted){
        $this->typeCarAccepted=$typeCarAccepted;
    }

    function getTypeCarAccepted(){
        return $this->typeCarAccepted;
    }

    function setSeatsMaterial($SeatsMaterial){
        $this->SeatsMaterial=$SeatsMaterial;
    }

    function getSeatsMaterial(){
        return $this->SeatsMaterial;
    }

}