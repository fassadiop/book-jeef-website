<?php
header("Content-Type: application/json");

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../utils/response.php";

$data = json_decode(file_get_contents("php://input"), true);

$nom = $data["nom"] ?? "";
$email = $data["email"] ?? "";
$sujet = $data["sujet"] ?? "";
$message = $data["message"] ?? "";

if (!$nom || !$email || !$message) {
    error("Champs obligatoires manquants");
}

$stmt = $pdo->prepare("
    INSERT INTO contacts (nom, email, sujet, message)
    VALUES (?, ?, ?, ?)
");

$stmt->execute([$nom, $email, $sujet, $message]);

success(["message" => "Message envoyé"]);