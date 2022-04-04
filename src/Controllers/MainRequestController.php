<?php
require_once "Controllers/ProductsController.php";
require_once "Controllers/TwController.php";
require_once "Controllers/AMQController.php";
require_once "Views/Json.php";

class MainRequestController{
    public function __construct()
    {
        $this->productsController = new ProductsController();
        $this->twController = new TwController();
        $this->amqController = new AMQController();


        if (isset($_GET["resource"]) & !empty($_GET["resource"])) {
            $this->resource = $_GET["resource"];
        } else {
            $this->error = "Resource is not defined or is not valid.";
        }
        if (isset($_GET["action"]) & !empty($_GET["action"])) {
            $this->action = $_GET["action"];
        } else {
            $this->error = $this->error . " Action is not defined or is not valid.";
        }
    }

    public function doResource()
    {
        if ($_GET["resource"] == "products") {
            $to_print =$this->productsFunctions($_GET["action"]);
        }elseif ($_GET["resource"] == "events") {
            $to_print =$this->amqFunctions($_GET["action"]);
        }else {
            $to_print = array("Error" => "Resource not valid.");
        }
        Json::view($to_print);
    }
    private function productsFunctions($action)
    {
        if ($this->action == "getAll") {
            return $this->userscontroller->getAll();
        } else {
            return array("Error" => "Action not valid.");
        }
    }
    private function amqFunctions($action)
    {
        if ($this->action == "newEvent") {
            return $this->amqController->publishEvent($_GET["service"],$_GET["event"],$_GET["event_data"]);
        } else {
            return array("Error" => "Action not valid.");
        }
    }
}