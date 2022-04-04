<?php
require "Models/SMS.php";
class TwController{
    private $smsModel;
    public function __construct(){
        $this->smsModel=new SMS();
    }
    
}