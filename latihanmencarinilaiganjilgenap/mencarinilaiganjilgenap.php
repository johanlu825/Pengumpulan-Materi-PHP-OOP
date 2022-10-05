<?php

Class mencarinilaiganjilgenap
{
    public function carinilaiganjilgenap($inputnilai){
    if ($inputnilai %= 3 ) {
        echo "{$inputnilai} adalah ganjil";
      } else {
         echo "{$inputnilai} adalah genap";
    }    
    


    }
}
//  inisialisasi class objek
$obj = new mencarinilaiganjilgenap();

echo $obj ->carinilaiganjilgenap(inputnilai:6);
