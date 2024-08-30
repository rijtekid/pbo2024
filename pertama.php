<?php
date_default_timezone_set("Asia/Jakarta");

$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');

if ($waktu >= 5 && $waktu < 11) {
    $greeting = "Selamat pagi";
} elseif ($waktu >= 11 && $waktu < 15) {
    $greeting = "Selamat siang";
} elseif ($waktu >= 15 && $waktu < 15) {
    $greeting = "Selamat sore";
} else {
    $greeting = "Selamat malam";
}

echo "Masukkan nama anda: {$nama}\n";
echo "{$greeting}, {$nama}, sekarang pukul {$waktu}\n";

?>
