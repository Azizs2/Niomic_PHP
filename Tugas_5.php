<!-- Buatlah tabel logika sehingga akan tampil seperti gambar berikut ini (wajib menggunakan Operator Logika dan nilai pada 0 dan 1 tidak boleh di hardcode) : -->
<?php
echo "Tabel Logika 1111";
echo"<br>";
$input_1 = 0;
$input_2 = 0;
$input_3 = 0;
$input_4 = 1;
$input_5 = 1;
$input_6 = 0;
$input_7 = 1;
$input_8 = 1;
echo "0 = false";
echo"<br>";
echo "1 = true";
echo "<br>";
echo "nilai kosong = 0";
echo "<br>";
$input_9 = "Ayo";
$input_10 = " Belajar";
$input_11 = "Bersama";
$input_12 = " Niomic";

?>

<html>

<body>
<br>
<b>Soal 1.</b>
<table align=”center” border="1">
    <tr>
        <td>Input True</td>
        <td>Input 2</td>
        <td>AND</td>
        <td>OR</td>
    </tr>
    <tr>
        <td><?php echo "$input_1" ?></td>
        <td><?php echo $input_2 ?></td>
        <td><?php printf($input_1 && $input_2) ?></td>
        <td><?php printf($input_1||$input_2) ?></td>
    </tr>
    <tr>
        <td><?php echo $input_3 ?></td>
        <td><?php echo $input_4 ?></td>
        <td><?php printf ($input_3 && $input_4) ?></td>
        <td><?php printf ($input_3 || $input_4 )?></td>
    </tr>
    <tr>
        <td><?php echo $input_5 ?></td>
        <td><?php echo $input_6 ?></td>
        <td><?php printf ($input_5 && $input_6) ?></td>
        <td><?php printf ($input_5 || $input_6 )?></td>
    </tr>
    <tr>
        <td><?php echo $input_7 ?></td>
        <td><?php echo $input_8 ?></td>
        <td><?php printf ($input_7 && $input_8) ?></td>
        <td><?php printf ($input_7 || $input_8 )?></td>
    </tr>
</table>
<br>
<b>Soal 2.</b>
<table align=”center” border="1">
    <tr>
        <td>Input 1</td>
        <td>Input 2</td>
        <td>Hasil</td>
    </tr>
    <tr>
        <td><?php echo "$input_9" ?></td>
        <td><?php echo $input_10 ?></td>
        <td><?php echo $input_9.$input_10 ?></td>
    </tr>
    <tr>
        <td><?php echo $input_11 ?></td>
        <td><?php echo $input_12 ?></td>
        <td><?php echo $input_11.$input_12 ?></td>
    </tr>
</table>
<br>
<strong><?php echo "Gabungan : $input_9 $input_10 $input_11 $input_12" ?></strong>
</body>
</html>
