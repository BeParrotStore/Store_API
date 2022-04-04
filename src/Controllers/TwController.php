<?php
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