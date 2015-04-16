<?php

require 'Person.php';
require 'Address.php';

$address = new Address;
$person = new Person;



$person->firstName = "Sam";
$person->lastName = "Bui";
$person->birthDate = "11/16/1988";

$address->street1 = "3805 Sibley St";
$address->street2 = "Apt 203";
$address->city = "Burnsville";
$address->state = "MN";
$address->zipCode = "55337";    


echo $person ->firstName . "<br/>";
echo $person ->lastName. "<br/>";
echo $person ->birthDate. "<br/>";

echo "<br/>";

echo $address -> street1 . "<br/>";
echo $address->street2. "<br/>";
echo $address->city . "<br/>";
echo $address->state. "<br/>";
echo $address->zipCode. "<br/>";


?>