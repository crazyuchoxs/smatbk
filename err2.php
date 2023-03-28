<?php include '../custAlr.php'; ?>
<?php if (empty($_POST['tujuansekolah'])) : ?>
    <script>
        customAlert("PERINGATAN!!!", "Tujuan Sekolah Belum Diisi");
    </script>
<?php elseif (empty($_POST['tglPermintaan'])) : ?>
    <script>
        customAlert("PERINGATAN!!!", "Tanggal Pindah Belum Diisi");
    </script>
<?php elseif (empty($_POST['alasanpindah'])) : ?>
    <script>
        customAlert("PERINGATAN!!!", "Alasan Pindah Belum Diisi");
    </script>
<?php endif ?>