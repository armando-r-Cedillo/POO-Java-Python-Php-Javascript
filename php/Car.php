<?php
require_once("Account.php");

class Car {
private int $id ;
private String $license;
private Account $driver;
private int $passengers;

    function __construct($license,$Account,$passengers) {
        if ($passengers == 4 || $passengers ==6) {
            $this->license = $license;
            $this->driver = $Account;
            $this->passengers = $passengers;
        }else{
            echo 'error en la cantidad de pasajeros';
        }
    }
       
    function printDataCar(){

        if ($this->passengers == 4 || $this->passengers ==6) {
            
            echo ' Datos del conductor ';
            foreach ($this->driver as $key) {
                echo $key;
            }
        }else{
            echo 'error en la cantidad de pasajeros';
        }
    }
    

      function setLicense($license){
        $this->license=$license;
      }
      function getLicense(){
          return $this->license;
      }  
      function setPassenger($passengers){
          $this->passengers = $passengers;
      }  
      function getPassenger(){
        return $this->passengers;
      }  
        
            
    
}