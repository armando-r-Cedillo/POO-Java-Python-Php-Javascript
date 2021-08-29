<?php
require_once("Account.php");

class Car {
public int $id ;
public String $license;
public Account $driver;
public int $passengers;

    function __construct($license,$Account) {
        $this->license = $license;
        $this->driver = $Account;
    }
    function printDataCarFromUser(){
            echo ' Datos del conductor ';
            echo $this->driver->name." ";
            echo $this->driver->document;
    }
}