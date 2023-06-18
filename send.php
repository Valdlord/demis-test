<?php

require_once "db.php";

header('Content-Type: application/json; charset=utf-8');

$data = json_decode(file_get_contents("php://input"));
$name = $data->name;
$address = $data->address;
$phone = $data->phone;
$email = $data->email;

$errors = false;
if (!$name) {
    $errors = "name";
}
if (!$address) {
    $errors = "address";
}

if (!$phone) {
    $errors = "phone";
}

if (!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]{2,4}$/", $email)) {
    $errors = "email";
}

if (!$errors) {

    $insertResult = $db->query("
			INSERT INTO users
			(name, address, phone, email)
			VALUES
			('$name', '$address', '$phone', '$email')
		");

    if ($insertResult) {
        echo "<h2>Форма отправленна</h2>";
    } else {
        echo "<h2>Ошибка отправки формы</h2>";
    }

    if ($insertResult) {
        $response = [
            "success" => true
        ];
    } else {
        $response = [
            "success" => false,
            "error" => "Произошла ошибка, попробуйте еще раз."
        ];
    }
} else {
    $response = [
        "success" => false,
        "error" => $errors
    ];
}

echo json_encode($response);
die();

