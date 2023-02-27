<?php if (empty($_POST['noSurat'])) : ?>
    <?php include '../custAlr.php'?>
    <script>
        customAlert("PERINGATAN!!!","Nomer Surat Belum Diisi");
    </script>
<?php elseif (empty($_POST['tujuansekolah'])) : ?>
    <?php include '../custAlr.php'?>
    <script>
        customAlert("PERINGATAN!!!","Tujuan Sekolah Belum Diisi");
    </script>
<?php elseif (empty($_POST['tglPermintaan'])) : ?>
    <?php include '../custAlr.php'?>
    <script>
        customAlert("PERINGATAN!!!","Tanggal Pindah Belum Diisi");
    </script>
<?php elseif (empty($_POST['alasanpindah'])) : ?>
    <?php include '../custAlr.php'?>
    <script>
        customAlert("PERINGATAN!!!","Alasan Pindah Belum Diisi");
    </script>
<?php endif ?>