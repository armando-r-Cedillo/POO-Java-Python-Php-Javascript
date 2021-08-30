<?php
require_once("Car.php");
class UberX extends Car{
    private $brand;
    private $model;
    public function __construct($license, $driver, $passengers ,$brand, $model){
        if ($passengers == 4 ) {
        parent::__construct($license,$driver,$passengers);
        $this->brand=$brand;
        $this->model=$model;
        }else{
            $this->brand='';
            $this->model='';
            echo " El numero de pasajeros debe ser de 4";
        }
    }
    public function printDataCar(){
        if (! (($this->brand == '' ) || ($this->model=='')) ){
            echo " Marca: ".$this->brand." Modelo: ".$this->model. " ";
            parent::printDataCar();
        }else{
            echo ' asigne un valor correcto para pasajeros';
        }
       
      
    }
    function setBrand($brand){
        $this->brand=$brand;
      }
      function getBrand(){
          return $this->brand;
      }  
}