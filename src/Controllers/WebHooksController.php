<?php
require "ProductsController.php";
require "OrdersController.php";
class WebHooksController{
    private $productsController;
    private $ordersController;
    public function __construct(){
        $this->productsController=new ProductsController();
        $this->ordersController=new OrdersController();
    }
    private function newProduct(){

    }
    private function newOrder(){
        
    }
    
}