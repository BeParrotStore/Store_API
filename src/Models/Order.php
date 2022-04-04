<?php
require "Model.php";
class Order extends Model {
    private $table = "orders";
    public function insert($order_wp_id) {
        $sql = "INSERT INTO $this->table (order_wp_id) VALUES ('".$order_wp_id."');";
        if ($this->newsql($sql)) {
            return true;
        } else {
            return $this->newsql($sql);
        }
    }

}