<?php
$bulan = date('m');
if ($bulan <= 6) {
    $tahun = date('Y') - 1 . " / " . date('Y');
} else {
    $tahun = date('Y') . " / " . date('Y') + 1;
}
$KelasSiswa = $_POST['kelas'];
$namaSiswa = $_POST['nama'];
if (substr($KelasSiswa, 0, 3) == "XII") {
    $kelasPD = "XII (duabelas) " . substr($KelasSiswa, 4, 7);
} else if (substr($KelasSiswa, 0, 2) == "XI") {
    $kelasPD = "XI (sebelas) " . substr($KelasSiswa, 3, 1);
} else {
    $kelasPD = "X (sepuluh) " . substr($KelasSiswa, 2, 1);
}
$wali = mysqli_query($conn, "SELECT * FROM tblwalikelas WHERE `Kelas` = '$KelasSiswa'");
$wali = mysqli_fetch_assoc($wali);
?>


<hr class="border border-dark border-1 opacity-75">
<div class="countainer text-center dns8355 lh-1">
    <div class="row">
        <div class="col-6-offset-3 align-self-center">DAFTAR NAMA SISWA MODEL (8355)</div>
    </div>
    <div class="row">
        <div class="col-6-offset-3 align-self-center">SMA TARUNA BUMI KHATULISTIWA</div>
    </div>
    <div class="row">
        <div class="col-6-offset-3 align-self-center">TAHUN PELAJARAN <?= $tahun ?></div>
    </div>
</div>
<div class="countainer mb-1 kurikulum lh-1">
    <div class="row row-cols-auto">
        <div class="col-1">Kurikulum</div>
        <div class="col fw-bold">: Merdeka</div>
    </div>
    <div class="row row-cols-auto">
        <div class="col-1">Kelas</div>
        <div class="col fw-bold">: <?= $kelasPD ?></div>
    </div>
    <div class="row row-cols-auto">
        <div class="col-1">Wali Kelas</div>
        <div class="col fw-bold">: <?= $wali['Wali Kelas']; ?></div>
    </div>
</div>

<?php
$sqlkelas = "SELECT * FROM tblSiswa WHERE `Rombel Saat Ini`='$KelasSiswa'";
$resultkelas = mysqli_query($conn, $sqlkelas);
if (mysqli_num_rows($resultkelas) > 0) :
    $x = 1;
    $y = 0;
    $z = 0;

    include '../conn.php';
    include '../conKasek.php';
    include '../conPngws.php';
?>
    <div class="table-responsive">
        <table class="table table-bordered lh-sm">
            <thead class="table-secondary">
                <tr>
                    <th>NO</td>
                    <th>NIS</td>
                    <th>NISN</td>
                    <th>NAMA</td>
                    <th>JK</td>
                    <th>AGAMA</td>
                    <th>TEMPAT LAHIR</td>
                    <th>TGL LAHIR</td>
                    <th>ORANG TUA</td>
                    <th>ALAMAT ORANG TUA</td>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($rowa = mysqli_fetch_assoc($resultkelas)) :
                    if (empty($rowa['Nama Ayah'])) {
                        $namaOrtu = $rowa['Nama Ibu'];
                    } else {
                        $namaOrtu = $rowa['Nama Ayah'];
                    }
                    if (ucwords(strtolower($rowa['Nama'])) == $namaSiswa) : ?>
                        <tr class="table-active">
                        <?php else : ?>
                        <tr>
                        <?php endif; ?>
                        <td><?= $x ?></td>
                        <td><?= ucwords($rowa['NIPD']) ?></td>
                        <td><?= ucwords($rowa['NISN']) ?></td>
                        <td><?= ucwords(strtolower($rowa['Nama'])) ?></td>
                        <td><?= ucwords($rowa['JK']) ?></td>
                        <td><?= ucwords(strtolower($rowa['Agama'])) ?></td>
                        <td><?= ucwords(strtolower($rowa['Tempat Lahir'])) ?></td>
                        <td><?= ucwords($rowa['Tanggal Lahir']) ?></td>
                        <td><?= ucwords(strtolower($namaOrtu)) ?></td>
                        <td><?= ucwords(strtolower($rowa['Alamat'])) ?></td>
                        </tr>
                    <?php $x = $x + 1;
                    if ($rowa['JK'] == "L") {
                        $y = $y + 1;
                    } elseif ($rowa['JK'] == "P") {
                        $z = $z + 1;
                    }
                endwhile; ?>
            </tbody>
        </table>
    </div>

    <div class="row lh-1 fw-semibold" style="font-size:11px;">
        <div class="col-5">
            <div class="d-block row">
                <div class="col pb-0 mb-0">Jumlah Laki - Laki : <?= $y ?></div>
                <div class="col pt-0 mb-0">Jumlah Perempuan : <?= $z ?></div>
            </div>
        </div>
        <div class="col">
            Mengetahui,<br><?= $pngws['Jabatan'] ?><br><br><br><br><br><span class="fw-bold text-decoration-underline"><?= $pngws['Nama'] ?></span>
        </div>
        <div class="col">
            Sungai Raya, <?= dateIN(date("d m Y")) ?> <br><br><br><br><br><br><span class="fw-bold text-decoration-underline"><?= $kasek['Nama'] ?></span>
        </div>
    </div>
<?php endif;
$conn->close();
?>