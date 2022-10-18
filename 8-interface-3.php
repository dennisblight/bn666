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

/************************************************
 * Implementasi interface terhadap abstract class
 ************************************************/

abstract class Geometri implements GeometriInterface, InfoShower
{
    public function showInfo()
    {
        echo "Dimensi: " . $this->getDimensi() . "<br/>";
    }
}

abstract class BangunDatar extends Geometri implements BangunDatarInterface
{
    public function getDimensi() { return static::Dimensi2; }

    public function showInfo()
    {
        parent::showInfo();
        echo "Luas: " . $this->getLuas() . "<br/>";
        echo "Keliling: " . $this->getKeliling() . "<br/>";
    }
}

abstract class BangunRuang extends Geometri implements BangunRuangInterface
{
    public function getDimensi() { return static::Dimensi3; }

    public function showInfo()
    {
        parent::showInfo();
        echo "Volume: " . $this->getVolume() . "<br/>";
        echo "Luas Permukaan: " . $this->getLuasPermukaan() . "<br/>";
    }
}

/************************************************
 * Implementasi terhadap class
 ************************************************/

class Persegi extends BangunDatar
{
    public $panjang;
    
    public function getLuas()
    {
        return $this->panjang * $this->panjang;
    }

    public function getKeliling()
    {
        return 4 * $this->panjang;
    }
}

class Kubus extends BangunRuang
{
    public $sisi;
    
    public function getVolume()
    {
        return $this->sisi * $this->sisi * $this->sisi;
    }

    public function getLuasPermukaan()
    {
        return 6 * $this->sisi * $this->sisi;
    }
}