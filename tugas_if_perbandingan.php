<?php
//Buatlah sebuah kode program yang terdiri dari 2 variabel: $a dan $b. Kedua variabel ini berisi angka integer atau float. Tampilan akhir adalah salah satu kondisi berikut:• $a lebih kecil dari $b • $a lebih besar dari $b • $a sama dengan $b Sebagai contoh, jika saya memberikan nilai $a=6 dan $b=10, tampilan akhir adalah: “6 lebih kecil dari 10”. Jika $a=5 dan $b=5, tampilan akhir adalah: “5 sama dengan 5”.

$a = 60;
$b = 70;

if ($a < $b){
	echo "$a lebih kecil dari $b <br>";
}else if ($a > $b){
	echo "$a lebih besar dari $b <br>";
}else{
	echo "$a sama dengan $b";
}



?>