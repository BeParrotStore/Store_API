<?php
header('Content-Type: application/json');
$request = file_get_contents('php://input');
print_r(' ---New request.--- ');
$req_dump = print_r( $request, true );
$json_data = file_put_contents( 'request.log', $req_dump );
print_r(' ---Finish request.--- ');
$new_product_wh = json_decode($json_data, true);

require "Controllers/ProductsController.php";
$productsController=new ProductsController();
$productsController->create($new_product_wh->name);