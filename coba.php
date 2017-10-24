<?php
 
 class manusia{
    var $nama;
    var $ttl;
    var $kelas;
    var $status;

    function __construct($nm,$tl,$kl,$st){
       $this->nama = $nm;
       $this->ttl = $tl;
       $this->kelas = $kl;
       $this->status = $st;
    }
    function get_nama(){
        return $this->nama;
    }
    function get_ttl(){
        return $this->ttl;
    }
    function get_kelas(){
        return $this->kelas;
    }
    function get_status(){
        return $this->status;
    }
    
}
?>