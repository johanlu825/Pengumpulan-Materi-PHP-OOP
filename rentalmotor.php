<?php

class rentalmotor
{
    public function __construct ( private $harga = 5000, private $diskon1 = 5 , private $diskon2 = 10 )
    {
        $this -> harga = $harga;
        $this -> diskon1 = $diskon1;
        $this -> diskon2 = $diskon2;
    }
    
    public function pesan()
    {
        return "Tidak Ada Harga Diskon";
    }
    public function Perkalian ($jumlahjam)
    {
        if ( $jumlahjam <= 9 ) {
              return $jumlahjam * $this->harga;
        } else if ($jumlahjam >= 10 && $jumlahjam <= 15) {
            return $jumlahjam * $this->Harga - $jumlahjam * $this->harga * $this->Diskon1 / 100;
        } else if ($jumlahjam >= 20 && $jumlahjam <= 24) {
            return $jumlahjam * $this->Harga - $jumlahjam * $this->harga * $this->Diskon2 / 100;
        } else {
            return $this -> pesan();
        }
    }
}

$rental = new rentalmotor();
echo " Harga: " . $rental -> Perkalian(jumlahjam: 25);