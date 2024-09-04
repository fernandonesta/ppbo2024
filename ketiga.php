<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }


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
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}



class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}


$lingkaran = new Lingkaran(5);
$lingkaran->jari_jari = 7;
$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();
$bola = new Bola(7);
$tabung = new Tabung(5, 10);
$kerucut = new Kerucut(4, 12);
echo "Luas lingkaran adalah: {$luas_lingkaran}\n";
echo "Keliling lingkaran adalah: {$keliling_lingkaran}\n";
echo "Volume bola adalah: " . $bola->volume() . " cm³\n";
echo "Volume tabung adalah: " . $tabung->volume() . " cm³\n";
echo "Volume kerucut adalah: " . $kerucut->volume() . " cm³\n";