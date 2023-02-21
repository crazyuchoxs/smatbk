<?php
include 'conn.php';
include 'headutama.php';

$sqlkelas = "SELECT * FROM tblSiswa WHERE `Rombel Saat Ini`='X A'";
$resultkelas = mysqli_query($conn, $sqlkelas);
if (mysqli_num_rows($resultkelas) > 0) {
    $x = 1;
    echo '<div class="contianer">';
    echo '<table class="table table-light">';
    echo '<thead class="table-secondary">';
    echo '<tr>';
    echo    '<th>NO</td>';
    echo    '<th>NIS</td>';
    echo    '<th>NISN</td>';
    echo    '<th>NAMA</td>';
    echo    '<th>JK</td>';
    echo    '<th>AGAMA</td>';
    echo    '<th>TEMPAT LAHIR</td>';
    echo    '<th>TGL LAHIR</td>';
    echo    '<th>ORANG TUA</td>';
    echo    '<th>ALAMAT ORANG TUA</td>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($rowa = mysqli_fetch_assoc($resultkelas)) {
        echo '<tr>';
        echo    '<td>' . $x . '</td>';
        echo    '<td>' . $rowa['NIPD'] . '</td>';
        echo    '<td>' . $rowa['NISN'] . '</td>';
        echo    '<td>' . $rowa['Nama'] . '</td>';
        echo    '<td>' . $rowa['JK'] . '</td>';
        echo    '<td>' . $rowa['Agama'] . '</td>';
        echo    '<td>' . $rowa['Tempat Lahir'] . '</td>';
        echo    '<td>' . $rowa['Tanggal Lahir'] . '</td>';
        echo    '<td>' . $rowa['Nama Ayah'] . '</td>';
        echo    '<td> </td>';
        echo '</tr>';
        $x = $x + 1;
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

$conn->close();
include 'footutama.php';
?>