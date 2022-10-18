<?php

class Manager
{
    public $nama;

    public function showInfo()
    {
        echo "Nama: $this->nama<br/>";
    }
}

class Supervisor extends Manager
{
    public $divisi;

    public function showInfo()
    {
        // Keyword parent untuk mengakses
        // method (member) dari kelas orang tua
        parent::showInfo();
        echo "Divisi: $this->divisi<br/>";
    }
}

$manager = new Manager();
$manager->nama = "Ujang";
$manager->showInfo();

$manager = new Supervisor();
$manager->nama = "Suhadma";
$manager->divisi = "IT";
$manager->showInfo();
