<?php
require_once("function.php");
// adapteur data
$adapteur = new ReadHCPoem();
// coeur
$core = new PoemCore($adapteur);
// adapteur pilote
$application = new InterfaceRequest($core);
echo($application->request());
