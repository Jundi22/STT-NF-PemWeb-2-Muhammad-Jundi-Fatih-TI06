<?php
//luas = p * l
//keliling = 2 * (p+l)
class PersegiPanjang{
    private $panjang;
    private $lebar;

    function getpanjang($panjang){
        return $this->panjang=$panjang;
    }

    function getlebar($lebar){
        return $this ->lebar=$lebar;
    }

    function getluas(){
        return $this->panjang * $this->lebar;
    }

    function getkeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}

?>