<?php
require __DIR__."/../Models/Product.php";
class OrdersController{
    private $orderModel;
    public function __construct()
    {
        $this->orderModel=new Order();
    }
    public function create($order_data){
        $this->orderModel->insert($order_data->id);
    }

}