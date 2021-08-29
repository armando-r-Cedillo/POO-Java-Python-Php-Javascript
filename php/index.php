<?php
require_once("Car.php");
require_once("Account.php");
require_once("UberX.php");
require_once("./Card.php");
require_once("./Paypal.php");
require_once("./Cash.php");
require_once("./User.php");
require_once("./Driver.php");
$uberTypeX= new UberX(12424,new Account(1,'armando','1234','armand@12.com','ksk1'),"abcd","aszv");

echo $uberTypeX->printDataCarFromUser();


$card = new Card(12,1312393994012,1230199231,"12/12/22");
$card2 = new Card(21,1391239193,912921919,31);
echo "";
echo $card->cvu;


$paypal = new Paypal(1,"armand@gggmail.com");
echo "";
echo $paypal->email;


$cash = new Cash(2);
echo "";

echo $cash->id;

$user = new User(1,"armando","12ff","arm@gm.com","12kd1");

echo $user->id . " " . $user->name;

$driver = new Driver(1,"Karla","1f1aa","ckar@gm.com","13fas");

echo $driver->id. " ". " ". $driver->name;

/*
$account = new Account("Armando","1203DD");
echo "Imprimiendo directo los datos del objeto account " .$account->name;

$car = new Car("13DA",$account);
echo $car->driver->name;
$car->printUserInfo();

$car2 = new Car("13DA",new Account("Lorena","LRC1241"));
echo " Imprimiendo los datos del objeto account mediante el objeto Car2 " . $car->driver->name;
$car2->printUserInfo();
*/