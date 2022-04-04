<?php
/**
* BeParrot Store -> Store_API
*
* @author Adan Nahir Abad Mora [Soluciones Informáticas NubezarTech]
* @author http://www.nubezar.tech
*
* Gestión de SMS
*/
require "Models/SMS.php";
class TwController{
    private $smsModel;
    public function __construct(){
        $this->smsModel=new SMS();
    }
    
}