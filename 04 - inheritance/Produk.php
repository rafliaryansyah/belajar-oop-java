<?php

class Produk
{

    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0,
           $jmlHalamn = 0,
           $waktuMain = 0,
           $tipe;


    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga, $inputJmlHalaman, $inputWaktuMain, $inputTipe)
    {
        $this->judul = $inputJudul;
        $this->penulis = $inputPenlis;
        $this->penerbit = $inputPenerbit;
        $this->harga = $inputHarga;
        $this->jmlHalamn = $inputJmlHalaman;
        $this->waktuMain = $inputWaktuMain;
        $this->tipe = $inputTipe;
    }

    public function ambilLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function ambilInfoLengkap()
    {
        // Buku : Sebuah Seni .. | Mark Manson, -, (Rp. 2500000) - 50 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->ambilLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Buku") {
            $str .= " - {$this->jmlHalamn} Halaman. ";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam. ";
        }
        return $str;

    }
    

}

class Buku extends Produk 
{

    

}

class CetakInfoProduk
{

    public function Cetak( Produk $produk )
    {
        // Buku balbla | penulis, penerbit, Rp. Harga XXX
        $str = "{$produk->judul} | {$produk->ambilLabel()} (Rp. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Buku("Sebuah Seni Untuk Bersikap Bodoamat!", "Mark Manson", "-", 90000, 129, 0, "Buku");
echo "<br>";
$produk2 = new Produk("Assasin Creed Unity", "-", "Ubisoft", 250000, 0, 50, "Game");

echo $produk1->ambilInfoLengkap();
echo "<br>";
echo $produk2->ambilInfoLengkap();