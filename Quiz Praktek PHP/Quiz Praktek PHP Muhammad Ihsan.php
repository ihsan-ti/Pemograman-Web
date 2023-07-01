<?php
    echo "Nama : Muhammad Ihsan <br>";
    echo "NIM : 121103013 <br>";
    echo "<br>";
    echo "[]===============[] <br>";
    echo "NIP : 100111 <br>";
    echo "Nama Pegawai : Muhammad Ihsan <br>";
    echo "[]===============[] <br>";

    $GAPOK = 2000000;
    $Bonus = 500000;
    $Tunjangan = 0.05 * $GAPOK; // Perhitungan tunjangan
    $Pajak = 0.1 * $GAPOK; // Perhitungan pajak
    $Gaji = $GAPOK + $Bonus + $Tunjangan - $Pajak; // Perhitungan gaji

    echo "Gaji Pokok = {$GAPOK}<br>";
    echo "Bonus = {$Bonus}<br>";
    echo "Tunjangan = {$Tunjangan}<br>";
    echo "Pajak = {$Pajak}<br><br>";
    echo "Gaji yang harus dibayar = {$Gaji}<br>";
?>