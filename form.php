<?php

// type
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form method="post" action="form.php">
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>tanggal lahir</label> <br>
            <input name="tanggal_lahir" type="number" min=1 max=30> / <input name="bulan" type="number" min=1 max=12> / <input name="tahun">

        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
    <table border="1">
        <tr>
            <td>d/td>
            <td>Baris ke 1 - Kolom ke 2</td>
        </tr>
        <tr>
            <td>Baris ke 2 - Kolom ke 1</td>
            <td>Baris ke 2 - Kolom ke 2</td>
        </tr>
    </table>
    <?php
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        if ($nama) {
            echo "<strong>Nama:</strong> {$nama} <br>";
        }
        
        if ($tanggal_lahir) {
            echo "<strong>Tanggal:</strong> {$tanggal_lahir} <br>";
        }
        if ($bulan==1) {
            echo "<strong>Bulan:</strong> Januari <br>";
        }elseif($bulan==2){
            echo "<strong>Bulan:</strong> Februari<br>";
        }elseif($bulan==3){
            echo "<strong>Bulan:</strong> Maret<br>";
        }elseif($bulan==4){
            echo "<strong>Bulan:</strong> April<br>";
        }elseif($bulan==5){
            echo "<strong>Bulan:</strong> Mei<br>";
        }elseif($bulan==6){
            echo "<strong>Bulan:</strong> Juni<br>";
        }elseif($bulan==7){
            echo "<strong>Bulan:</strong> Juli<br>";
        }elseif($bulan==8){
            echo "<strong>Bulan:</strong> Agustus<br>";
        }elseif($bulan==9){
            echo "<strong>Bulan:</strong> September<br>";
        }elseif($bulan==10){
            echo "<strong>Bulan:</strong> Oktober<br>";
        }elseif($bulan==11){
            echo "<strong>Bulan:</strong> November<br>";
        }elseif($bulan==12){
            echo "<strong>Bulan:</strong> Desember<br>";
        }
        if ($tahun) {
            echo "<strong>Tahun:</strong> {$tahun} <br>";
        }
        if($tanggal_lahir>21&&$bulan==3){
            echo "<strong>Zodiac:</strong> Aries<br>";
        }elseif($tanggal_lahir<20&&$bulan==4){
            echo "<strong>Zodiac:</strong> Aries<br>";
        }elseif($tanggal_lahir<21&&$bulan==4){
            echo "<strong>Zodiac:</strong> Taurus<br>";
        }elseif($tanggal_lahir<20&&$bulan==5){
            echo "<strong>Zodiac:</strong> Taurus<br>";
        }elseif($tanggal_lahir<21&&$bulan==5){
            echo "<strong>Zodiac:</strong> Gemini<br>";
        }elseif($tanggal_lahir<20&&$bulan==6){
            echo "<strong>Zodiac:</strong> Gemini<br>";
        }elseif($tanggal_lahir<21&&$bulan==6){
            echo "<strong>Zodiac:</strong> Cancer<br>";
        }elseif($tanggal_lahir<20&&$bulan==7){
            echo "<strong>Zodiac:</strong> Cancer<br>";
        }elseif($tanggal_lahir<21&&$bulan==7){
            echo "<strong>Zodiac:</strong> Leo<br>";
        }elseif($tanggal_lahir<21&&$bulan==8){
            echo "<strong>Zodiac:</strong> Leo<br>";
        }elseif($tanggal_lahir<22&&$bulan==8){
            echo "<strong>Zodiac:</strong> Virgo<br>";
        }elseif($tanggal_lahir<22&&$bulan==9){
            echo "<strong>Zodiac:</strong> Virgo<br>";
        }
    ?>
</body>
</html>