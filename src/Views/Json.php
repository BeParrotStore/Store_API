<?php
class Json {
    public static function view($json) {
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}
