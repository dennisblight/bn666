<?php

// Sebagai parent-class
class User
{
    public $nama;

    public function showSalam()
    {
        echo "Salam.. nama saya $this->nama. Ini adalah kelas user<br/>";
    }
}

// Sebagai child-class
class Member extends User
{
    // Overriding method dari parent-class
    public function showSalam()
    {
        echo "Salam.. nama saya $this->nama. Ini adalah kelas member<br/>";
    }
}

$user = new User();
$user->nama = 'Budi';
$user->showSalam();

$member = new Member();
$member->nama = 'Gunawan';
$member->showSalam();