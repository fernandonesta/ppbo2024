<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}
function volumeBola($jari) : float {

    $volume = (4/3) * 3.14 * pow($jari, 3);
    return $volume;
}
function volumeTabung($jari, $tinggi) : float {
    $volume = M_PI * pow($jari, 2) * $tinggi;
    return $volume;
}
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * M_PI * pow($jari, 2) * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
$luas_tanah = volumeBola(45);
$luas_tanah = volumeTabung(7, 10);
$luas_tanah = volumeKerucut(5, 12);
echo "Luas tanah budi adalah {$luas_tanah}";