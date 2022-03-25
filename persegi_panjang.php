<?php
// memanggil file atau class persegi panjang.php 
require_once 'class_persegi panjang.php';
$persegipanjang1 = new PersegiPanjang(2, 4);
$persegipanjang2 = new PersegiPanjang(6, 8);

// menghitung luas
echo "luas persegi panjang I adalah = " .$persegipanjang1->getluas();
echo "<br> luas persegi panjang II adalah = " .$persegipanjang2->getluas();
echo "<br>"; 

// menghitung keliling
echo "<br> keliling persegi panjang I adalah = " .$persegipanjang1->getKeliling();
echo "<br> keliling persegi panjang II adalah = " .$persegipanjang2->getKeliling();
?>