<?php 
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");


$requestMethod = $_SERVER["REQUEST_METHOD"];


if ($requestMethod == "GET") {
    echo json_encode(array("message" => "My Api is working :)"));
} else if ($requestMethod == "POST") {
    echo json_encode(array("message" => "POST method is called"));
} else if ($requestMethod == "PUT") {

    $inputData = json_decode(file_get_contents("php://input"));
    echo json_encode(array("message" => "Received data", "data" => $inputData));
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Invalid method"));
}
?>