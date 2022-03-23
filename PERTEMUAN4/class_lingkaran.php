<?php
//buat class lingkaran
class Lingkaran{
    //buat property
    private $jari;
    const PHI = 3.14;

    //method atau function nya
    function __construct($r){
        $this -> jari = $r;
    }
    //method luas lingkaran
    function getluas(){
        return self::PHI * $this -> jari * $this -> jari;
    }

    //method keliling
    function getkeliling(){
        return 2 * self::PHI * $this -> jari;
    }
}

?>