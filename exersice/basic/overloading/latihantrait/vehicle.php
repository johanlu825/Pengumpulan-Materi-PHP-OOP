<?php
interface fuel
{
    public function fillin($typeful):string;
}

class vehicle implements fuel{

    public function __construct(
    public $typefuel = "premium"
    ){}
    public function setTypefuel(String $typefuel ="solar"){
        $this->typefuel = $typefuel;
        return $this;
    }
    public function fillin ($typefuel):string{
        return $this->typefuel = $typefuel;
    }
    public function getTypefuel():string {
        return $this->typefuel;
    }    
    
}