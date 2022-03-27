<?php
header('Content-Type: application/json');
$request = file_get_contents('php://input');
print_r(' ---New request.--- ');
$req_dump = print_r( $request, true );
$json_data = file_put_contents( 'request.log', $req_dump );
print_r(' ---Finish request.--- ');
$action = json_decode($json_data, true);