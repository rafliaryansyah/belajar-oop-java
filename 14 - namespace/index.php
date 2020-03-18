<?php 

require_once 'App/init.php';

// $produk1 = new Buku("Sebuah seni untuk Bersikap Bodoamat", "Mark Manson", "-", 67000, 129);
// $produk1 = new Buku("Assasin Creed Unity", "-", "Ubisoft", 270000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->Cetak();

// echo "<hr>";

// new Coba();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();