<?php
require_once 'produk/user.php';
require_once 'produk/salam.php';
require_once 'service/user.php';


 spl_autoload_register(function($classname){
    //   output :ini dari class user
      $extendsion = '.php';

    $classname = explode('\\', $classname);

    $classname = end($classname);

     require_once __DIR__ . '/produk/'. $classname . '.php';
      
     require_once __DIR__ . '/service/'. $classname . '.php';
 }):