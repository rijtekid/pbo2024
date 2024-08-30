<?php
function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4 / 3) * 3.14 * pow($jari, 3);
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1 / 3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$keliling_lingkaran = kelilingLingkaran(39);
echo "Keliling lingkaran adalah {$keliling_lingkaran}\n";

$volume_bola = volumeBola(18);
echo "Volume bola adalah {$volume_bola}\n";

$jari_tabung = 10; 
$panjang_tabung = 20; 
$volume_tabung = volumeTabung($jari_tabung, $panjang_tabung);
echo "Volume tabung adalah {$volume_tabung}\n";

$jari_kerucut = 15; 
$panjang_kerucut = 12; 
$volume_kerucut = volumeKerucut($jari_kerucut, $panjang_kerucut);
echo "Volume kerucut adalah {$volume_kerucut}\n";
?>
