<?php


class Product extends Model {
    private $table = "products";
    public function insert($product_name) {
        //params: ,$product_sku,$product_status
        $sql = "INSERT INTO $this->table (product_name) VALUES ('".$product_name."');";
        if ($this->newsql($sql)) {
            return true;
        } else {
            return $this->newsql($sql);
        }
    }
}