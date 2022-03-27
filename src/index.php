<?php
require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
echo $_ENV["BEPPARROT_DB_NAME"];