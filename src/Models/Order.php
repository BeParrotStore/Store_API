<?php
/**
* BeParrot Store -> Store_API
*
* @author Adan Nahir Abad Mora [Soluciones Informáticas NubezarTech]
* @author http://www.nubezar.tech
*
* Modelo Pedido: Persistencia de datos. Database from .env.
*/
require "Model.php";
class Order extends Model
{
    private $table = "orders";

    /**
     * Verifica si una direccion de correo es correcta o no.
     *
     * @return boolean true | string PDOException.getMessage 
     * @param string $email direccion de correo
     */
    public function insert($order_wp_id)
    {
        $sql = "INSERT INTO $this->table (order_wp_id) VALUES ('" . $order_wp_id . "');";
        if ($this->newsql($sql)) {
            return true;
        } else {
            return $this->newsql($sql);
        }
    }
}
