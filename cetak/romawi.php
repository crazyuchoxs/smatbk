<?php
$angkatan = str_split($_POST['nis'], 2);
$tahun = "20" . $angkatan['0'] . "/20" . $angkatan['0'] + 1;
$angkatan = $angkatan['0'] + 6;
$angkatan = angkaRomawi($angkatan);
