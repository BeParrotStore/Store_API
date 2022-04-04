<?php
/**
* BeParrot Store -> Store_API
*
* @author Adan Nahir Abad Mora [Soluciones Informáticas NubezarTech]
* @author http://www.nubezar.tech
*
* Gestión de pedidos
*/
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