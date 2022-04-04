<?php
require('vendor/autoload.php');
require('Controllers/MainRequestController.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mainRequestController=new MainRequestController();
$mainRequestController->doResource();

