<?php 

require "vendor/autoload.php";

use CLIApp\PersonalFinance;

$personalFinance = new PersonalFinance();
$personalFinance->run();