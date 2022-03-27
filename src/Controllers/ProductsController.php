<?php
require('../../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();

require "../../Models/Product.php";
class ProductsController{
    private $productModel;
    public function __construct()
    {
        $this->productModel=new Product();
    }
    public function create($product_data){

        $this->productModel->insert($product_data->name, $product_data->type, $product_data->status);
    }
}