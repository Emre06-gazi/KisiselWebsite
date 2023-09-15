<?php
include('db.php'); // Veritabanı bağlantısı

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentId = $_POST["comment_id"];
    $yanitMetni = $_POST["messaj"];
    $yanitİsim = $_POST["namee"];
    $yanitPozisyon = $_POST["pozisy"];
    $yanitSirket = $_POST["companyy"];
    $yanitEpost = $_POST["epost"];

    // Veritabanına yeni bir yanıt ekleyin
    $sql = "INSERT INTO yanit (yorum_metni, isim_soyisim, mevki, sirket, ePosta, yorum_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $yanitMetni, $yanitİsim, $yanitPozisyon, $yanitSirket, $yanitEpost, $commentId);

    if ($stmt->execute()) {
        // Yanıt başarıyla eklendi
        echo "Yanıt başarıyla eklendi.";
    } else {
        // Yanıt eklenemedi
        echo "Yanıt eklenirken bir hata oluştu.";
    }

    $stmt->close();
    $conn->close();
}
?>
