<?php
/**
 * Make a Car class. Take EngineStatus,BodyPart property for Car class. Take another class named Audi. Take property color, Seats . then Print all of them EngineStatus,BodyPart,property color by inherit Car Class. You can use Getter Setter if you want.
 */
class Car{
   public $EngineStatus;
   public $BodyPart;
}
class Audi extends Car{
   public $color;
   public $Seats;
}

$Audi = new Audi();
$Audi->EngineStatus = "This is EngineStatus...<br>";
echo $Audi->EngineStatus;

$Audi->BodyPart = "This is BodyPart...<br>";
echo $Audi->BodyPart;

$Audi->color = "This is color...<br>";
echo $Audi->color;

$Audi->Seats = "This is Seats...<br>";
echo $Audi->Seats;