<?php
header("Content-Type: application/json");

require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../utils/response.php";

$data = json_decode(file_get_contents("php://input"), true);

$nom = $data["nom"] ?? "";
$email = $data["email"] ?? "";
$telephone = $data["telephone"] ?? "";
$ville = $data["ville"] ?? "";
$pays = $data["pays"] ?? "";

if (!$nom || !$email) {
    error("Nom et email sont obligatoires");
}

$stmt = $pdo->prepare("
    INSERT INTO adhesions (nom, email, telephone, ville, pays)
    VALUES (?, ?, ?, ?, ?)
");

$stmt->execute([$nom, $email, $telephone, $ville, $pays]);

success(["message" => "Adhésion enregistrée"]);