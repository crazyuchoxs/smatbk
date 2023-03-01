<?php if (empty($_POST['keterangan'])) : ?>
    <?php include '../custAlr.php' ?>
    <script>
        customAlert("PERINGATAN!!!", "Keterangan Surat Belum Diisi");
    </script>
<?php endif ?>