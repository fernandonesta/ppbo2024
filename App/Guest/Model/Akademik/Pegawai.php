<?php

namespace Guest\Model\Akademik;

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    // Konstruktor
    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    // Metode untuk cek pegawai masuk
    public function cekIn() {
        return true; // Misalnya, pegawai berhasil cek in
    }

    // Metode untuk cek pegawai keluar
    public function cekOut() {
        return true; // Misalnya, pegawai berhasil cek out
    }

    // Getter untuk nomor HP
    public function getNoHp() {
        return $this->no_hp;
    }

    // Setter untuk nomor HP
    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}