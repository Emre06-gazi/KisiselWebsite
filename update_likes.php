<?php
include('db.php');

$commentId = $_POST['comment_id'];

$sql = "UPDATE yorum SET begeni = begeni + 1 WHERE id = $commentId";

if ($conn->query($sql) === TRUE) {
    echo "Beğeni başarıyla güncellendi.";
} else {
    echo "Beğeni güncelleme hatası: " . $conn->error;
}
$conn->close();
?>
