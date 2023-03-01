<?php
$sqlPngws = "SELECT * FROM tblkng WHERE `Jabatan` = 'Pengawas Sekolah'";
$pngws = $conn->query($sqlPngws);
$pngws = $pngws->fetch_assoc();
