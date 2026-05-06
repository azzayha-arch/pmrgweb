
<form method="POST">
    username : <input type="text" name="username"><br><br>
    password : <input type="text" name="password"><br><br>
    nama : <input type="text" name="nama"><br><br>
    email : <input type="text" name="email"><br><br>
    <button type="submit" name="kirim">kirim</button>
</form>

<?php
include "koneks.php";

if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (username, password, nama, email) 
            VALUES ('$username', '$password', '$nama', '$email')";

    if ($koneksi->query($sql) == TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>