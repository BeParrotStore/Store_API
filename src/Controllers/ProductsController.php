<?php
require "Models/Product.php";
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