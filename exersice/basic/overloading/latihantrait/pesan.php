<?php
trait apakabar{
    public function apakabar(){
        echo static::class . 'apa kabar';
    }
}

trait selamatpagi{
    public function apakabar(){
        echo static:: class . 'selamat pagi';
    }
}

class pesan {
    use apakabar, selamatpagi{
        apakabar:: apakabar insteadof selamatpagi;
        selamatpagi:: apakabar as apakabarDariTraitselamatpagi;
    }
}

$pesan = new pesan();
echo $pesan ->apakabardaritraitselamatpagi();
// output: pesanselamat pagi