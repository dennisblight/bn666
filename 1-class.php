<?php

// Class Tipe data komposit (composite)
// public
class NamaClass
{
    // Field atau property
    public $field1 = 1;

    private $field2 = 2.1;

    protected $field3 = '1234';

    // Function construct akan otomatis dijalankan ketika object dibuat
    // atau di instantiasi
    public function __construct()
    {
        echo "Object dari kelas telah dibuat";
    }

    // Method atau function atau behavior
    public function method1()
    {
        return "Ini adalah method 1";
    }

    public function method2()
    {
        return "Ini adalah method 2";
    }

    public function method3()
    {
        return "Ini adalah method 3";
    }
}

$object = new NamaClass;
