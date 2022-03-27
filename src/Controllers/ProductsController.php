<?php
require('../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();
require "../../Models/Product.php";
class ProductsController{
    private $productModel;
    public function __construct()
    {
        $productModel=new Product();
    }
    public function create($product_name){
        $this->productModel->insert();
    }
}