<?php
// soal 1

$harga_beli = 8000;
$harga_jual = 7500;
$keuntungan = 300;
print ("Harga Beli = Rp. $harga_beli <br>");
print("Harga Jual = Rp. $harga_jual <br>");
print("keuntungan = Rp. $keuntungan<br>");
print("Berapa ekor anak kambing yang ia beli ? <br>");
$selisih_harga = $harga_beli-$harga_jual;
$ekor_kambing = ceil($selisih_harga/$keuntungan);
print("harga beli di kurangai harga jual = Rp. $selisih_harga <br>");
print("anak kambing yang di beli adalah $ekor_kambing ekor <br>");

// soal 2
$jumlah_saluran = 523;
$jumlah_terpakai = 8891;
Print("Jumlah Saluran = $jumlah_saluran <br>");
print("Jumlah Terpakai = $jumlah_terpakai <br>");
print("Rata-rata Pemakian = ....? <br>");
print("Jawab : .... liter/keluarga <br>");
$volume = $jumlah_terpakai/$jumlah_saluran;
print("Jadi rata-rata yang di pakai adalah $volume liter/keluarga")
?>