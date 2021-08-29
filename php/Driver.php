<?php
require_once("./Account.php");
class Driver extends Account{

    function __construct($id,$name,$document,$email,$password){
        parent::__construct($id,$name,$document,$email,$password);
    }
    
}
