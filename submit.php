<?php
include('db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $company = $_POST["company"];
    $message = $_POST["message"];

    $sql = "INSERT INTO yorum (name, eMail, mevki, konum, mesaj)
            VALUES ('$name', '$email', '$position', '$company', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php#yorum");
        exit; 
    } else {
        echo "Hata: " . $sql;
    }
}

$conn->close(); 
?>
