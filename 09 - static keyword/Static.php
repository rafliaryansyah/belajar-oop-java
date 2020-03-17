<?php

class exampleStatic
{
    public static $number = 1;

    public static function example()
    {
        echo "Hello " . self::$number++ . " Kali.";
    }

}

echo exampleStatic::$number;
echo "<br>";
echo exampleStatic::example();
echo "<br>";
echo exampleStatic::example();
echo "<br>";
echo exampleStatic::example();
echo "<br>";
echo exampleStatic::example();
echo "<hr>";


class ContohStatik
{
    public $nomor = 1;

    public function Statik()
    {
        echo "Halo " . $this->nomor++ . " Kali"; 
    }

}

$objek = new ContohStatik();
echo "<br>";
echo $objek->Statik();
echo "<br>";
echo $objek->Statik();
echo "<br>";
echo $objek->Statik();
echo "<hr>";
$objek1 = new ContohStatik();
echo "<br>";
echo $objek1->Statik();
echo "<br>";
echo $objek1->Statik();
echo "<br>";
echo $objek1->Statik();