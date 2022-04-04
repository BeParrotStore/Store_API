<?php
/**
* BeParrot Store -> Store_API
*
* @author Adan Nahir Abad Mora [Soluciones Informáticas NubezarTech]
* @author http://www.nubezar.tech
*
*/
require(__DIR__.'/../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();

header('Content-Type: application/json');
$request = file_get_contents('php://input');

$req_dump = print_r( $request, true );
file_put_contents('request.log', $req_dump );

$new_product_wh = json_decode($req_dump);



require "../../Controllers/OrdersController.php";
$productsController=new OrdersController();
//$productsController->create($new_product_wh->name,$new_product_wh->type,$new_product_wh->status);
$productsController->create($new_product_wh);