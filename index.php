<?php

require_once('include.php');


//Dans votre index.php créer un nouvel objet Session

$session = new Session();


$session->opla = "Test !";

var_dump($session->opla);
