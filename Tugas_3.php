<?php
// soal 1
$jarak = 360;
$kecepatan = 90;
print("Jarak kota A - Z = $jarak Km <br>");
print("Kecepatan Motor = $kecepatan Km/Jam <br>");
$waktu_tempuh = $jarak/$kecepatan;
print("Waktu tempuh = $waktu_tempuh Jam <br>");
$menit = $waktu_tempuh*60;
print("jadi waktu tempuh antar kota A - B adalah $menit menit <br>");

// soal 2
$t_awal = 150000;
$bunga = 0.125;
print("Tabungan Awal = Rp. $t_awal <br>");
print("Bunga Setahun = 12.5%<br>");
$t_tabungan = $t_awal*12;
print("Total Tabungan Setahun = Rp. $t_tabungan<br>");
$t_bunga = $t_tabungan*$bunga;
print("jadi total tabungan setahun jika Defan rutin setiap bulan menabung adalah Rp. $t_bunga");
?>