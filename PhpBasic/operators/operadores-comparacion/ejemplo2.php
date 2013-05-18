<?php
$value = 12;
$result = ($value=='12')?true:false;
var_dump($result); /// devuelve 12
$result = ($value==12)?array('index1'=>12):array();
var_dump($result);   //// devuelve array('index1'=>12)