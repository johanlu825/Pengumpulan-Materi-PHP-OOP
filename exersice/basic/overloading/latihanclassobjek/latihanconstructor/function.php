<?php

class membuatfunction{

    public function sayhello(){
        echo 'ini dari class'  . __CLASS__;
    }

    public function perkalian($number){
        echo 'angka yang di masukkan adalah' . $number;
    }

    public function penjumlahan($numb_a,$numb_b){
        return $numb_a * $numb_b;
    }
    public function gettitle(){
        return $this->title;
    }
}
$obj = new membuatfunction();
echo $obj -> sayhello();