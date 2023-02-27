<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['pesan'])) {
        // Jika ada data yang belum diisi, tampilkan pesan error dan tetap di halaman ini
        echo "Mohon lengkapi semua field!";
    } else {
        // Jika semua data sudah diisi, lanjutkan ke halaman berikutnya
        header("Location: halaman-berikutnya.php");
        exit();
    }
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="pesan">Pesan:</label>
    <textarea id="pesan" name="pesan"></textarea><br>

    <input type="submit" value="Kirim">
</form>