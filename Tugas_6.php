<?php
$habib = 21;
$aji = 4;
$bintan = 3;
$hdana = $habib+$aji;
$terahir = $hdana+$bintan;
$jambu = 15000;
$kaedus = 2000;
$jumlah_kardus = 6;
$isi_kardus = 5;
$bekas_jambu = 2;
$harga_bekas_jambu = 2000;
$toko = $jambu*$jumlah_kardus*$isi_kardus;
$bekas = $bekas_jambu*$harga_bekas_jambu;
$total = $toko+$bekas;

echo "Soal 1.";
echo "<br>";
echo "Usia Habib = $habib tahun";
echo "<br>";
echo "Aji lebih dari $aji tahun dari Habib";
echo  "<br>";
echo "Usia Aji = $aji + $habib = $hdana tahun";
echo "<br>";
echo "Bintan lebih dari $bintan tahun dari Aji";
echo "<br>";
echo "Usia Bintan = $hdana + $bintan = $terahir tahun";
echo "<br>";
echo "Soal 2.";
echo "<br>";
echo "Harga Jambu = Rp. $jambu /Kg";
echo "<br>";
echo "Harga Kardus = Rp. $harga_bekas_jambu /pcs";
echo "<br>";
echo "Didalam toko = berisi $isi_kardus Kg, kardus $jumlah_kardus pcs, harga Rp. $jambu /Kg.";
echo "<br>";
echo "Jumlah didalam toko = Rp. $toko";
echo "<br>";
echo "$bekas_jambu /pcs, bekas jambu masih di jual Rp. $harga_bekas_jambu /dus";
echo "<br>";
echo "Jumlah bekas jambu = Rp. $bekas";
echo "<br>";
echo "Total Penjualan (Dus dan Jambu) = Rp. $total";


?>