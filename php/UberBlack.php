<?php
require_once("../Cursos_platzi/Desarrollo/EscueladeDesarrolloBackendJava/CursodeProgramacionOrientadaaObjetos/CursoPOOUber/php/Car.php");

class UberBlack extends Car{
    public $Passenger;
    public $typeCarAccepted;
    public $SeatsMaterial;
    
    public function __construct($license,$driver,$Passenger,$typeCarAccepted,
    $SeatsMaterial){
        parent::__construct($license,$driver);
        $this->passengers = $Passenger;
        $this->typeCarAccepted=$typeCarAccepted;
        $this->SeatsMaterial=$SeatsMaterial;
    }

}