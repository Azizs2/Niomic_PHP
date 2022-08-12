<?php
// print("<h1>Daftar Menu</h1>");
$ayamgoreng     = 13000;
$ayambakar      = 15000;
$ayamsayur      = 13000;
$tempegoreng    = 1000;
$soto           = 3000;
$nasiputih      = 5000;
$esteh          = 4000;
$estebu         = 5000;
$cireng         = 1000;
$es_duren       = 15000;
$esmilo         = 20000;
$esteh          = 5000;
$piscok         = 1000;

print("<ul> <h1>Daftar Menu</h1>

        <li>Ayam Goreng     = Rp. $ayamgoreng</li>
        <li>Ayam bakar      = Rp. $ayambakar</li>
        <li>Ayam Sayur      = Rp. $ayamsayur</li>
        <li>Tempe Goreng    = Rp. $tempegoreng</li>
        <li>Soto            = Rp. $soto</li>
        <li>Nasi Putih      = Rp. $nasiputih</li>
        <li>Es Teh          = Rp. $esteh</li>
        <li>Es Tebu         = Rp. $estebu</li>
    </ul>");

?>

<h1>Daftar Menu</h1>
<table rules="all:2" border="1" statey="padding:2">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Menu</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Cireng</td>
            <td>Rp. 
                <?php print("$cireng") ?>
            </td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Es Duren</td>
            <td>Rp. 
                <?php print("$es_duren") ?>
            </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Es Milo</td>
            <td>Rp. 
                <?php print("$esmilo") ?>
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Es Teh</td>
            <td>Rp. 
                <?php print("$esteh") ?>
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Piscok</td>
            <td>Rp. 
                <?php print("$piscok") ?>
            </td>
        </tr>
    </tbody>
</table>