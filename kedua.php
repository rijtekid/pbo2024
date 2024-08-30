<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas(): float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(): float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume(): float {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($tinggi): float {
        return self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($tinggi): float {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}

$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 4;

$kerucut = new Kerucut();
$kerucut->jari_jari = 4; 

$bola = new Bola();
$bola->jari_jari = 4;

$tabung = new Tabung();
$tabung->jari_jari = 4;

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
