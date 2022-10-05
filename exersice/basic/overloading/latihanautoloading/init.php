<?php
// require_once 'produk/a.php';
// require_once 'produk/b.php';
// require_once 'produk/c.php';
// require_once 'produk/user.php';

spl_autoload_register(function($nameClass){
    require_once 'produk/' . $nameClass . '.php';
});
