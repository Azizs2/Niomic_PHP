<?php
$waktu = 36;
$tenaga_kerja = 12;
$x_hari = "X hari";
$tenaga_kerja_2 = 24;
$h_jual = 80000;
$h_beli = 50000;
print("$waktu Hari = $tenaga_kerja Pekerja <br>");
print("X hari = $tenaga_kerja_2 Pekerja<br>");
$pekerja = $tenaga_kerja_2/$tenaga_kerja;
$hari = $waktu/$pekerja;
print("X = $hari <br>");
print("Jadi waktu yang di habisakan bila menggunakan $tenaga_kerja_2 pekerja adalah $hari Hari<br>");
print("Jual = $h_jual <br>");
print("Beli = $h_beli <br>");
$untung = $h_jual-$h_beli;
print("Keuntungan = $untung <br>");
print("Jadi keuntungannya dari Putri dari jual bonekah adalah $untung");
?>