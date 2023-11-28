<?php


class matahari
{
    function produk($nama, $jenis, $jmlpakaian, $harga1, $harga2, $member, $kantong, $total)
    {
        if ($jenis == "pakaian anak"){
            if ($jmlpakaian == 2){
                $total = 0.8 * $total;
                echo "Total belanja " . $nama . " yaitu " . $jenis . " Rp." . $total;
            }
            else{
                $total = $total;
                echo "Total belanja " . $nama . " yaitu " . $jenis . " Rp." . $total;
            }
        }else if ($jenis == "laki"){
            if ($member == "ya"){
                $total = 0.65 * $total;
                echo "Total belanja " . $nama . " yaitu " . $jenis . " Rp." . $total;
            }
            else{
                $total = $total;
                echo "Total belanja " . $nama . " yaitu " . $jenis . " Rp." . $total;
            }
        }else if ($jenis == "pakaian wanita"){
            if ($kantong == "ya"){
                $kantong = 2000;
            }
           
            if ($harga1 > $harga2){
                $total = $harga1 + $kantong;
                echo "Total belanja " . $nama . " yaitu " . $jenis . " Rp." . $total;
            }
            else{
                $total = $harga2 + $kantong;
                echo "Total belanja " . $nama . " yaitu " . $jenis . " Rp." . $total;
            }
        }
    }
   
}