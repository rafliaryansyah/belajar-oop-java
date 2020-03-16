<?php

class Produk
{

    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0,
           $jmlHalamn = 0,
           $waktuMain = 0;


    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga, $inputJmlHalaman, $inputWaktuMain)
    {
        $this->judul = $inputJudul;
        $this->penulis = $inputPenlis;
        $this->penerbit = $inputPenerbit;
        $this->harga = $inputHarga;
        $this->jmlHalamn = $inputJmlHalaman;
        $this->waktuMain = $inputWaktuMain;
    }

    public function ambilLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function ambilInfoLengkap()
    {
        // Buku : Sebuah Seni .. | Mark Manson, -, (Rp. 2500000) - 50 Halaman.
        $str = "{$this->judul} | {$this->ambilLabel()} (Rp. {$this->harga})";
        return $str;

    }
    

}

class Buku extends Produk 
{

    public function ambilInfoLengkap()
    {
        $str = "Buku : " . parent::ambilInfoLengkap() . " - {$this->jmlHalamn} Halaman. ";
        return $str;
    }

}

class Game extends Produk
{
    public function ambilInfoLengkap()
    {
        $str = "Game : " . parent::ambilInfoLengkap() . " ~ {$this->waktuMain} Jam. ";
        return $str;
    }
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

$produk1 = new Buku("Sebuah Seni Untuk Bersikap Bodoamat!", "Mark Manson", "-", 90000, 129, 0);
echo "<br>";
$produk2 = new Game("Assasin Creed Unity", "-", "Ubisoft", 250000, 0, 50);

echo $produk1->ambilInfoLengkap();
echo "<br>";
echo $produk2->ambilInfoLengkap();