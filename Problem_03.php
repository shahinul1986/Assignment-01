<?php
/**
 * Make a Class SuperPower. There will be many kind of super power methods in the class. Like Flying , LaserEye , etc. Now Make the classes like IronMan, CaptainAmerica, Thor . Inherit the SuperPower Class by the following classes. Now print the proper power method from the Superhero class.
 */
class SuperPower{
   function Flying(){
      echo "I can flying.<br />"; 
   }

   function LaserEye(){
      echo "My eye is laser eye.<br />";
   }
}

class IronMan extends SuperPower{}
class CaptainAmerica extends SuperPower{}
class Thor extends SuperPower{
   function LaserEye(){
      echo "My eye is not laser eye.<br />";
   }
}

$IronMan = new IronMan();
$IronMan->Flying();

$CaptainAmerica = new CaptainAmerica();
$CaptainAmerica->LaserEye();

$Thor = new Thor();
$Thor->LaserEye();