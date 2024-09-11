<?php


$lingkaran = new Lingkaran(4);
$kerucut = new Kerucut(4);
$bola = new Bola(4);
$tabung = new Tabung(4);

$luastanah = $lingkaran->luas();
$kelilingtanah = $lingkaran->keliling();
$nasi_tumpeng = $kerucut->volume(10);
$bola_angin = $bola->volume();
$botol = $tabung->volume(10);

echo "Luas tanah adalah {$luastanah} m² \n";
echo "Keliling tanah adalah {$kelilingtanah} m² \n";
echo "Volume nasi tumpeng adalah {$nasi_tumpeng} cm³ \n";
echo "Volume bola adalah {$bola_angin} cm³ \n";
echo "Volume botol adalah {$botol} cm³ \n";

?>
