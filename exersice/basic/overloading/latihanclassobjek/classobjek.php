<?php

class user{


    public $nama;
    public $umur;
    public $kelas;

}

$user = new user();

$user -> nama ="arief";
$user -> umur = 16;
$user -> kelas = "XII RPL";

echo "nama: ". $user->nama. '<br>';
echo "umur: ". $user->umur. '<br>';
echo "kelas: ". $user->kelas. '<br>';