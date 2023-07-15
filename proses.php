<?php
// Pastikan formulir dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai-nilai yang dikirimkan dari formulir
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Lakukan validasi data sesuai kebutuhan
    // ...

    // Kirim pesan ke tujuan yang diinginkan
    // Misalnya, menggunakan fungsi mail() untuk mengirim email
    $to = "reza@rehad.id";
    $subject = "Pesan dari $name";
    $body = "Nama: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Gagal mengirim pesan.";
    }
}
?>