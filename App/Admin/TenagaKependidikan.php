<?php

namespace App\Admin;

class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;

    // Konstruktor
    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    // Metode cuti
    public function cuti() {
        echo "{$this->nama} sedang mengambil cuti.";
    }
}