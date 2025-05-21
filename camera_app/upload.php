<?php
include 'koneksi.php';

if (isset($_POST['image'])) {
    $img = $_POST['image'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $filename = 'uploads/foto_' . time() . '.png';

    file_put_contents($filename, $data);

    $sql = "INSERT INTO foto (file_path) VALUES ('$filename')";
    if ($conn->query($sql) === TRUE) {
        echo "Foto berhasil disimpan!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Tidak ada data gambar.";
}
?>