<?php
require __DIR__."/../Models/Product.php";
class ProductsController{
    private $productModel;
    public function __construct()
    {
        $this->productModel=new Product();
    }
    public function create($product_data){
        $this->productModel->insert($product_data->name, $product_data->type, $product_data->status, $product_data->id, $product_data->slug, $product_data->permalink);
    }
    public function update($product_data){

    }
    public function delete($product_data){

        $this->productModel->delete($product_data->id);
    }
}