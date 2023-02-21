<?php include '../headutama.php'; ?>
<link rel="stylesheet" href="../css/printLandscape.css">
<?php include '../err.php' ?>

<div class="a4-landscape bg-white container-fluid" id="print-area" style="margin:auto;">
        <?php
        include '../cetak/tablehead.php';
        include '../cetak/tglIndo.php';
        include '../conn.php';
        include '../tblsiswa.php';
        ?>
</div>
<div class="mundur sticky-bottom">
        <?php include '../cetak/kembali.php'; ?>
</div>
<?php include '../footutama.php'; ?>