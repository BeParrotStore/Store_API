<?php
require "Model.php";
class Product extends Model {
    private $table = "products";
    public function insert($product_name,$product_type,$product_status) {
        //params: ,$product_sku,$product_status
        $sql = "INSERT INTO $this->table (product_name,product_type,product_status) VALUES ('".$product_name."','".$product_type."','".$product_status."');";
        if ($this->newsql($sql)) {
            return true;
        } else {
            return $this->newsql($sql);
        }
    }
}