<?php
namespace App\Model\Akademik;

class Pegawai {
    public int $nip;
    public string $nama;
    protected string $no_hp;
    public string $alamat;

    public function __construct(int $nip, string $nama, string $no_hp, string $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() : bool {
        return true;
    }

    public function cekOut() : bool {
        return true;
    }

    public function getNoHp() : int {
        return $this->no_hp;
    }

    public function setNoHp(int $newNoHp) : void {
        $this->no_hp = $newNoHp;
    }
}
?>
