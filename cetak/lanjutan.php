<div class="btn-group">
    <form action="listSiswa.php" method="post">
        <input type="hidden" name="kelas" value='<?= $_POST['kelas'] ?>'>
        <input type="hidden" name="nama" value='<?= $_POST['nma'] ?>'>
        <button class="btn btn-outline-info" type="submit" value="Lembar 8355"><i class="fa-solid fa-file"> </i> Lembar 8355</button>
    </form>
    <form action="plrapor.php" method="post">
        <input type="hidden" name="kelas" value='<?= $_POST['kelas'] ?>'>
        <input type="hidden" name="nama" value='<?= $_POST['nma'] ?>'>
        <button class="btn btn-outline-success" type="submit" value="Rapor"><i class="fa-solid fa-file"> </i> Pelengkap Rapor</button>
    </form>
</div>