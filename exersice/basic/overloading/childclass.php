<?php
include 'Parentclass.php';


class childclass extends parentclass {
    public static $title = "childclass";

    public static function gettile() 
    {
        echo parent::title;
    }

    public static function getclass()
    {
      return static::$title;
    }
   }

// cara memgakses melalui namaclass
var_dump(parentclass::getclass());