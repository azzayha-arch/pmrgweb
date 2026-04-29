<?php
echo "<h1> Materi 3 Function</h1>";
echo "<h3>1. Function tanpa parameter</h3>";
function sapa() {
    echo "Halo!";
}
sapa();

echo "<h3>2. Function dengan parameter</h3>";
function sapaNama($nama) {
    echo "Halo, $nama!";
}
sapaNama("Azzayha");

echo "<h3>3. Function dengan return</h3>";
function tambah($a, $b) {
    return $a + $b;
}
$hasil = tambah(5, 7);
echo $hasil;

echo "<h3>4. Function</h3>";
function salam() {
    echo "Assalamu'alaikum";
}
salam();

echo "<h3>5. Function parameter</h3>";
echo "<br>penjumlahan<br>";
function jumlah(int $a, int $b) {
    return $a + $b;
}
echo jumlah(4, 9);

echo "<br><br>perkalian<br><br>";
function kali(int $a, int $b) {
    return $a * $b;
}
echo kali(4, 9);

echo "<br><br>pembagian<br><br>";
function bagi(int $a, int $b) {
    return $a / $b;
}
echo bagi(4, 9);

echo "<br><br>pengurangan<br><br>";
function kurang(int $a, int $b) {
    return $a - $b;
}
echo kurang(4, 9);

// ================== BAGIAN FORM ==================
$hasilForm = null;

if (isset($_POST['kirim'])){
    $angka1 = $_POST['angka1'] ?? 0;
    $angka2 = $_POST['angka2'] ?? 0;
    $hasilForm = kali($angka1, $angka2);
    $hasilForm = bagi($angka1, $angka2);
    $hasilForm = tambah($angka1, $angka2);
    $hasilForm = kurang($angka1, $angka2); // pakai function tambah yg sudah ada
}
?>

<h3>6. Function parameter form</h3>
<form method="post">
    <input type="number" name="angka1" required>
    <input type="number" name="angka2" required>
    <button type="submit" name="kirim">kirim</button>
</form>

<?php

$hasilForm = "";

if (isset($_POST['kirim'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    $hasilTambah = tambah($angka1, $angka2);
    $hasilKali   = kali($angka1, $angka2);
    $hasilKurang = kurang($angka1, $angka2);

    if ($angka2 != 0) {
        $hasilBagi = bagi($angka1, $angka2);
    } else {
        $hasilBagi = "Tidak bisa dibagi 0";
    }

    // tampilkan dengan keterangan + rumus biar jelas
    $hasilForm = "
    <br>$angka1 + $angka2 = $hasilTambah <br>
    <br>$angka1 × $angka2 = $hasilKali <br>
    <br>$angka1 - $angka2 = $hasilKurang <br>
    <br>$angka1 ÷ $angka2 = $hasilBagi
    ";
}

echo "<h4>Hasil:<br>$hasilForm</h4>";

?>
