<?php
//require MSQL Connection
require ('database/DBController.php');

//require Property
require ('database/Property.php');

//Database Object
$db = new DBController();

// Product object
$property = new Property($db);

//Fuction call initialized to variable
$property_shuffle=$property->getData();

//Print test database values on webpages
//print_r($property->getData());