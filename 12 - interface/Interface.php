<?php

abstract class Produk
{

    // Visibility pada OOP php :
    // - public   : dapat digunakan dimana saja, bahkan di luar kelas.
    // - protected : hanya dapat digunakan di dalam sebuah kelas beserta turunanya.
    // - private : hanya dapat digunakan di dalam sebuah kelas tertentu saja.

    private $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $diskon = 0,
           $harga = 0;


    public function __construct($inputJudul, $inputPenlis, $inputPenerbit, $inputHarga)
    {
        $this->judul = $inputJudul;
        $this->penulis = $inputPenlis;
        $this->penerbit = $inputPenerbit;
        $this->harga = $inputHarga;
    }

    public function setJudul( $inputJudul )
    {
        $this->judul = $inputJudul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis( $inputPenulis )
    {
        $this->penulis = $inputPenulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit( $inputPenerbit )
    {
        $this->setPenerbit = $inputPenerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($inputDiskon)
    {
        return $this->diskon = $inputDiskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga( $inputHarga )
    {
        $this->harga = $inputHarga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function ambilLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract function ambilInfoProduk();

    public function ambilInfo()
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
        $str = "Buku : {$this->ambilInfo()} - {$this->jmlHalaman} Halaman. ";
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
        $str = "Game : {$this->ambilInfo()} ~ {$this->waktuMain} Jam. ";
        return $str;
    }
}

class CetakInfoProduk
{

    public $daftarProduk = [];

    public function tambahProduk( Produk $produk )
    {
        $this->daftarProduk[] = $produk;
    }

    public function Cetak()
    {
        // Buku balbla | penulis, penerbit, Rp. Harga XXX
        $str = "LIST PRODUCT : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->ambilInfoProduk()} <br>";
        }

        return $str;
    }

}

$produk1 = new Buku("Sebuah Seni Untuk Bersikap Bodoamat!", "Mark Manson", "-", 90000, 129);
echo "<br>";
$produk2 = new Game("Assasin Creed Unity", "-", "Ubisoft", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->Cetak();  





// Konsep abstrack class
/* 
    - Sebuah class yang tidak dapat di-instansiai
    - Kelas abstrak
    - Mendefinisikan interface untuk kelas lain yang menjadi turunanya
    - Berperan sebagai 'Kerangka dasar' untuk kelas turunanya
    - Biasanya memiliki minimal 1 method abstrak
    - Digunakan dalam 'Pewarisan' / inheritance untuk 'memaksakan' implementasi method abstrak yang sama untuk semua kelas turnanya
*/
/* 
    Abtract class (2)
    - Semua kelas turunanya, harus mengimplemntasikan method abstract yang ada di class abstractnya
    - kelas abstract boleh memiliki property / method reguler
    - kelas abstract boleh memiliki property / static method


    Why class abstract
    

*/
