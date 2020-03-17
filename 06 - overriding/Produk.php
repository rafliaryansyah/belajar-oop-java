<?php

class Produk
{

    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0;


    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga)
    {
        $this->judul = $inputJudul;
        $this->penulis = $inputPenlis;
        $this->penerbit = $inputPenerbit;
        $this->harga = $inputHarga;
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
        $str = "Buku : " . parent::ambilInfoProduk() . " - {$this->jmlHalamn} Halaman. ";
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

echo $produk1->ambilInfoLengkap();
echo "<br>";
echo $produk2->ambilInfoLengkap();