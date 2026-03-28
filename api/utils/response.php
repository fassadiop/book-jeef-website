<?php

function success($data = []) {
    echo json_encode([
        "status" => "success",
        "data" => $data
    ]);
    exit;
}

function error($message) {
    echo json_encode([
        "status" => "error",
        "message" => $message
    ]);
    exit;
}