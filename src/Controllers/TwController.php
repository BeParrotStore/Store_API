<?php
/**
* BeParrot Store -> Store_API
*
* @author Adan Nahir Abad Mora [Soluciones Informáticas NubezarTech]
* @author http://www.nubezar.tech
*
* Integración con Twilio Api (Messaging Service)
*/
class TwController{
    private $sid;
    private $authToken;
    private $msgService;
    public function __construct(){
        $this->sid=$_ENV["BEPPARROT_TWILIO_SID"];
        $this->authToken=$_ENV["BEPPARROT_TWILIO_AUTH_TOKEN"];
        $this->msgService=$_ENV["BEPPARROT_TWILIO_MSG_SERVICE"];
    }
}