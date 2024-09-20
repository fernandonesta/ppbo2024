<?php

namespace Guest\Model\Akademik;

class Dosen extends Pegawai {
    public $nidn;

    // Konstruktor
    public function __construct($nip, $nama, $no_hp, $alamat, $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    // Metode mengajar
    public function mengajar() {
        echo "{$this->nama} sedang mengajar perkuliahan.";
    }
}