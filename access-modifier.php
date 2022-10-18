<?php

// Getter dan setter

// Getter adalah sebuah method untuk mengakses sebuah
// field dalam kelas yang access modifier nya non-publik
class Mobil
{
    private $engine = "V6";

    // Getter -> method untuk mengakses field non-publik
    public function getEngine()
    {
        return $this->engine;
    }

    // Setter -> method untuk mengubah field non-publik
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }
}

$mobil = new Mobil;
$mobil->setEngine("2 Tak");
echo $mobil->getEngine();