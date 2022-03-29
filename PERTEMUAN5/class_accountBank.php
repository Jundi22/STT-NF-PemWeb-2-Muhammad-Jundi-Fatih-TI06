<?php
class akun{
//property
    public $no_akun;
    public $pemilik;
    public $saldo;

//method atau function
    function __construct($no_akun,$pemilik,$saldo){
        $this->no_akun=$no_akun;
        $this->pemilik=$pemilik;
        $this->saldo=$saldo;
    }
}
?>