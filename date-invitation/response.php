<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if (!isset($_GET["answer"])) {
    die("No answer received.");
}

$answer = $_GET["answer"];

$allowed_answers = ["Yes", "Maybe", "No"];

if (!in_array($answer, $allowed_answers)) {
    die("Invalid answer.");
}

$stmt = $conn->prepare(
    "INSERT INTO responses (answer) VALUES (?)"
);

if (!$stmt) {
    die("SQL PREPARE ERROR: " . $conn->error);
}

$stmt->bind_param("s", $answer);

if ($stmt->execute()) {

    echo "<h1>Response saved successfully ❤️</h1>";
    echo "<p>Answer: " . htmlspecialchars($answer) . "</p>";

} else {

    die("SQL EXECUTE ERROR: " . $stmt->error);
}

$stmt->close();
$conn->close();

?>