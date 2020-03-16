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

$produk1 = new Produk("Sebuah Seni Untuk Bersikap Bodoamat!", "Mark Manson", "-", 90000);
var_dump($produk1);
echo "<br>";
$produk2 = new Produk("Assasin Creed Unity", "-", "Ubisoft", 250000);
var_dump($produk2);
echo "<hr>";
echo "Buku : " . $produk1->ambilLabel();
echo "<br>";
echo "Game : " . $produk2->ambilLabel();
echo "<hr>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk1);
