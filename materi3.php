<?php
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

?>