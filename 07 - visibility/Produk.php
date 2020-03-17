<?php

class Produk
{

    // Visibility pada OOP php :
    // - public   : dapat digunakan dimana saja, bahkan di luar kelas.
    // - protected : hanya dapat digunakan di dalam sebuah kelas beserta turunanya.
    // - private : hanya dapat digunakan di dalam sebuah kelas tertentu saja.

    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit";

    protected $diskon;

    private $harga = 0;


    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga)
    {
        $this->judul = $inputJudul;
        $this->penulis = $inputPenlis;
        $this->penerbit = $inputPenerbit;
        $this->harga = $inputHarga;
    }

    public function setDiskon($inputDiskon)
    {
        return $this->diskon = $inputDiskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function ambilLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function ambilInfoProduk()
    {
        // Buku : Sebuah Seni .. | Mark Manson, -, (Rp. 2500000) - 50 Halaman.
        $str = "{$this->judul} | {$this->ambilLabel()} (Rp. {$this->harga})";
        return $str;

    }
    

}

class Buku extends Produk 
{

    public $jmlHalaman;

    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga, $inputJmlHalaman)
    {
        parent::__construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga);
        $this->jmlHalaman = $inputJmlHalaman;
    }

    public function ambilInfoProduk()
    {
        $str = "Buku : " . parent::ambilInfoProduk() . " - {$this->jmlHalaman} Halaman. ";
        return $str;
    }

}

class Game extends Produk
{

    public $waktuMain;

    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga, $inputWaktuMain)
    {
        parent::__construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga);
        $this->waktuMain = $inputWaktuMain;
    }

    public function ambilInfoProduk()
    {
        $str = "Game : " . parent::ambilInfoProduk() . " ~ {$this->waktuMain} Jam. ";
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

$produk1 = new Buku("Sebuah Seni Untuk Bersikap Bodoamat!", "Mark Manson", "-", 90000, 129);
echo "<br>";
$produk2 = new Game("Assasin Creed Unity", "-", "Ubisoft", 250000, 50);

echo $produk1->ambilInfoProduk();
echo "<br>";
echo $produk2->ambilInfoProduk();
echo "<hr>";


$produk2->setDiskon(80);
echo $produk2->getHarga();
