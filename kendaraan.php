<?php
include 'pengisian.php';

class kendaraan implements pengisian {

     public function getname($type = "pertalite")
     {
        //  $str =  "ini dari interface fuel"

         return $type;
     }
}
// inisialisasi class objek
$kendaraan = new kendaraan();

echo $kendaraan->getname();


