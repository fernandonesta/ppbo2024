<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public function volume($jari_jari) : float {
        return (4/3)*self::PHI*pow($jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return self::PHI*pow($jari_jari,2)*$tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public function volume($jari_jari,$tinggi) : float {
        return (1/3)*self::PHI*pow($jari_jari,2)*$tinggi;
    }
}


$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 7;
$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();
$bola = new Bola();
$volume_bola = $bola->volume(4, 7);
$tabung = new Tabung();
$volume_tabung = $tabung->volume(2, 6);
$nasi_tumpeng = new Kerucut();
$volume_nasi_tumpeng = $nasi_tumpeng->volume(4, 10);
echo "Luas lingkaran adalah: {$luas_lingkaran}\n";
echo "Keliling lingkaran adalah: {$keliling_lingkaran}\n";
echo "Volume bola adalah : {$volume_bola}\n";
echo "Volume tabung adalah : {$volume_tabung}\n";
echo "volume kerucut adalah {$volume_nasi_tumpeng}\n";