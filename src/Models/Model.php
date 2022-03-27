<?php

class Model{
    private $db_host = "212.107.17.1";
    private $db_user = "u249698882_beparrot_dev";
    private $db_password = "Marzo2022**";
    private $db = "u249698882_beparrotstore";
    private $conex;

    public function __construct(){
        $this->conex = new mysqli($this->db_host, $this->db_user, $this->db_password,$this->db)
        or die(mysqli_error($this->conex));
        $this->conex->set_charset("utf8");
    }

    public function newsql($query){
        try{
            $result=$this->conex->query($query) or die($this->conex->error);
            return $result;
        }catch (PDOException $e){
            $result= $e->getMessage();
        }
        return $result;
    }
    public function last_id(){
        try{
            $result = $this->conex->insert_id or die($this->conex->error);
        }catch (PDOException $e){
            return $e->getMessage();
        }
        return $result;
    }
    public function close() {
        mysqli_close($this->conex);
    }
}