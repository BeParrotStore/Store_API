<?php
require "Model.php";
class Product extends Model {
    private $table = "products";
    public function insert($product_name,$product_type,$product_status,$product_wp_id,$product_slug,$product_permalink,$product_price) {
        //params: ,$product_sku,$product_status
        $sql = "INSERT INTO $this->table (product_name,product_type,product_status,product_wp_id,product_slug,product_permalink,product_price) VALUES ('".$product_name."','".$product_type."','".$product_status."','".$product_wp_id."','".$product_slug."','".$product_permalink."','".$product_price."');";
        if ($this->newsql($sql)) {
            return true;
        } else {
            return $this->newsql($sql);
        }
    }
    public function update($product_name,$product_type,$product_status,$product_wp_id,$product_slug,$product_permalink) {
    }
    public function delete($product_wp_id) {
        $sql = "DELETE FROM $this->table WHERE product_wp_id=".$product_wp_id.";";
        if ($this->newsql($sql)) {
            return true;
        } else {
            return $this->newsql($sql);
        }
    }
}