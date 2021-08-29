<?php
class Account {
public int $id ;
public String $name;
public String $document;
public String $email;
public String $password;
    function __construct($id,$name,$document,$email,$password) {
        $this->id=$id;
        $this->email=$email;
        $this->password=$password;
        $this->name = $name;
        $this->document = $document;
     }
}