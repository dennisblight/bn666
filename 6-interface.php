<?php

// Interface hanya boleh memiliki deklarasi fungsi
// tanpa method body, dan konstanta yang tidak bisa
// diubah lagi nilainya
interface GeometriInterface
{
    const Dimensi2 = 2;
    const Dimensi3 = 3;

    public function getDimensi();
}

// Interface yang mendefinisikan bangun datar
// seperti persegi, lingkaran, persegi panjang, segitiga dll
interface BangunDatarInterface extends GeometriInterface
{
    public function getLuas();
    public function getKeliling();
}

// Interface yang mendefinisikan bangun ruang
// seperti kubus, balok, kerucut, silinder dll
interface BangunRuangInterface extends GeometriInterface
{
    public function getVolume();
    public function getLuasPermukaan();
}

// Interface yang mendefinisikan sebuah kelas bisa menampilkan
// informasi
interface InfoShower
{
    public function showInfo();
}