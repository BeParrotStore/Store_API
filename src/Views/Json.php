<?php
/**
* BeParrot Store -> Store_API
*
* @author Adan Nahir Abad Mora [Soluciones Informáticas NubezarTech]
* @author http://www.nubezar.tech
*
* Gestión de la vista JSON
*/
class Json {
    public static function view($json) {
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}
