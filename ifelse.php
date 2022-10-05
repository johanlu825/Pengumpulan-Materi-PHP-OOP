<?php

$number1 = 5;
$number2 = 10;

function cobaoperator($number1,$number2)
{
  
  if($number1 == $number2) {
    echo "[ {$number1} ] sama dengan [ {$number2} ]";   
    }
    elseif ($number1 >= $number2) {
    echo  "[ {$number1} ] lebih besar sama dengan  [{$number2}]";  
    }elseif ($number1 <= $number2) {
    echo "[ {$number2} ] lebih kecil sama dengan [{$number1}]"; 
    }else{
       echo "tidak sama tipe";
     }


}

cobaoperator(number1:15, number2:10);

 


   

