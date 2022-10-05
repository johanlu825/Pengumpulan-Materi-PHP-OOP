<?php
include 'produk php';

class buku extends produk {

    public static function sayhello($name):void 
    {
        echo "hello nama saya adalah john";
    }
}

$obj = new buku();
