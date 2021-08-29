<?php
require_once("./Payment.php");

class Card extends Payment {
    public $cvu;
    public $numbre;
    public $date;
    
    function __construct($id,$cvu,$number,$date){
        parent::__construct($id);
        $this->cvu= $cvu;
        $this->number = $number;
        $this->date=$date;
    }
}