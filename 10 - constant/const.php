<?php 

// Menggunakan define & const
// Perbedaannya 
// Define tidak dapat digunakan didalam sebuah kelas, sedangkan const sebaliknya



define('NAME', 'Rafliaryansyah');
echo NAME;

echo "<hr>";

const NAMA = "Sirafli";
echo NAMA;
echo "<br>";
// Magic Constant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo __FILE__;