<?php 

require "vendor/autoload.php";
// require 'PersonalFinance.php';

use CLIApp\PersonalFinance;

$personalFinance = new PersonalFinance();
$personalFinance->run();