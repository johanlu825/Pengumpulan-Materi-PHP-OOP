<?php
trait role {
    abstract public function getrole():String;
}

class babeh {

    public $nama;
    public $umur;
    public $marga;
    public static $index;
    public $is_status;

    public function __construct($nama, $umur, $is_status = "bapak")
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->marga = 'tan';
        self::$index = 1;
        $this->is_status = $is_status;
    }

    public function getmarga(){
        return $this->marga;
    }

    public function getName()

    {
        return $this->nama;
    }

    public function getStatus()
    {
        return $this->is_status;
    }
    public function getumur()
    {
        return $this->umur;
    }

    public function display()
    {
        echo 'no '. self::$index++ . '<br>';
        echo 'nama: '. $this->getname() . "<br>";
        echo 'marga: '. $this->getmarga() . "<br>";
        echo 'umur: '. $this->getumur() . "<br>";
        if($this->is_status == "bapak"){
           echo 'status: '. $this->getstatus() . '<br>';
           $this->space() . '<br>';
        }else{
            echo 'status: ' . $this->getstatus() . '<br>';
        } 

    }

    public function space()
    {
        echo '<hr>';
    }
}
 
class bocil extends babeh {
    use Role;

    public $role;

    public function __construct($nama, $umur, $is_status, $role ="siswa")
    {
       parent:: __construct($nama, $umur, $is_status );
       $this->nama = $nama;
       $this->umur = $umur;
       $this->role = $role;
    }


    public function getALLDisplay()
    {
        $this->display() .'<br>';
        echo 'jabatan: ' . $this->getrole();
    }
    
    public function getrole(): string
    {
        return $this->role;
    }
}

    $babeh = new babeh("asep", 37 , 'bapak');

    $bocil = new bocil("arief" , 15 , 'anak');
    $bocil = new bocil("satrio" , 17 , 'anak');

    echo $babeh ->display();
    echo $bocil ->getALLDisplay();

    // output:
    