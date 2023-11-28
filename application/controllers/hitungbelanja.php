<?php
defined('BASEPATH') or exit('no direct script acces allowed');
class hitungbelanja extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('matahari');
    }
    function index()
    {
        $this->matahari->produk('Dita', 'pakaian anak','2','','','','','150000');
        echo "<br/>";
        $this->matahari->produk('Adit', 'laki','','','','tidak','','350000');
        echo "<br/>";
        $this->matahari->produk('Toni', 'laki','','','','ya','','300000');
        echo "<br/>";
        $this->matahari->produk('Intan', 'pakaian wanita','2','150000','175000','','ya','');
        echo "<br/>";
       
    }
}
?>
