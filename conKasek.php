<?php
$sqlKasek = "SELECT * FROM tblkng WHERE `Jabatan` = 'Kepala Sekolah'";
$kasek = $conn->query($sqlKasek);
$kasek = $kasek->fetch_assoc();
