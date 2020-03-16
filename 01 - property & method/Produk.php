<?php

class Produk 
{

    public $judul = "Judul", 
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }

}

// Produk 1 Buku
$produk1 = new Produk();
$produk1->judul = "Sebuah Seni Untuk Bersikap Bodo Amat!";
$produk1->penerbit = "Mark Manson";
$produk1->harga = 69000;
var_dump($produk1);

// Produk 2 Game
$produk2 = new Produk();
$produk2->judul = "Assasin Creed Syndicate";
$produk2->penulis = "Ubisoft";
$produk2->penerbit = "Ubisoft Company";
$produk2->harga = 260000;
var_dump($produk2);

// Mengambil data dari Method
$produk3 = new Produk();
$produk3->getLabel();
var_dump($produk3);

// Desc
$produk5 = new Produk();
echo "<br>";
echo "Buku : " . $produk5->getLabel();
echo "<br>";
var_dump($produk5);

// Desk produk lebih rapih
echo "<br>";
echo "<hr>";
echo "Buku : " . $produk1->judul, " ",  $produk1->penulis, " ", $produk1->penerbit, " ", $produk1->harga;
echo "<br>";
echo "Game : " . $produk2->judul, " ",  $produk2->penulis, " ", $produk2->penerbit, " ", $produk2->harga;