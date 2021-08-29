<?php
require_once("../Cursos_platzi/Desarrollo/EscueladeDesarrolloBackendJava/CursodeProgramacionOrientadaaObjetos/CursoPOOUber/php/Car.php");

class UberVann extends Car{
    public $Passenger;
    public $typeCarAccepted;
    public $SeatsMaterial;

    public function __construct($license,$account,$Passenger,$typeCarAccepted,
    $SeatsMaterial ){
        parent::__construct($license,$account);
        $this->passengers = $Passenger;
        $this->typeCarAccepted=$typeCarAccepted;
        $this->SeatsMaterial=$SeatsMaterial;
    }

}