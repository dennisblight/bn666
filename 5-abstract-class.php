<?php

abstract class BangunDatar
{
    // Abstract method tidak memiliki body
    public abstract function getLuas();

    public function showInfo()
    {
        echo "Luas: " . $this->getLuas() . "<br/>";
    }
}

class Persegi extends BangunDatar
{
    public $panjang;

    // Abstract method wajib di implementasikan
    // atau override di child-class
    public function getLuas()
    {
        return $this->panjang * $this->panjang;
    }
}

// Abstract class akan menghasilkan
// error ketika di instantiasi
// $bangunDatar = new BangunDatar();

// Turunan dari abstract class tidak akan
// menghasilkan error ketika di instantiasi
$persegi = new Persegi();
$persegi->panjang = 10;
$persegi->showInfo();