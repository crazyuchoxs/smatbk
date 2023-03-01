<?php include '../headutama.php'; ?>
<link rel="stylesheet" href="../css/printPotrait.css">
<?php include '../cetak/tglIndo.php' ?>
<?php include '../conn.php'; ?>
<?php include '../conKasek.php'; ?>
<div class="a4 bg-white container-fluid" style="margin: auto">
    <h5 class="text-center mb-5">KETERANGAN PINDAH SEKOLAH</h3>
        <span>Nama Peserta Didik : <?= $_POST['nama'] ?></span>
        <div class="table-responsive">
            <table class="table table-bordered border border-dark mt-2">
                <thead class="bg table-active">
                    <tr>
                        <th scope="col" colspan="4" class="text-center">Keluar</th>
                    </tr>
                    <tr>
                        <th scope="col" class="ps-5 pe-5">Tanggal</th>
                        <th scope="col">Kelas yang ditinggalkan</th>
                        <th scope="col">Sebab-sebab Keluar atau Atas Permintaan (tertulis)</th>
                        <th scope="col">Tanda Tangan Kepala Sekolah, Stempel Sekolah, dan Tanda Tangan Orang Tua/Wali</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td><?= dateIN(Date("d m Y")); ?></td>
                        <td></td>
                        <td></td>
                        <td>Sungai Raya,
                            <?= dateIN(Date("d m Y")); ?><br><?= $kasek['Jabatan'] ?>,<br><br><br>
                            <u><?= $kasek['Nama'] ?></u> <br>
                            NIP.<br>
                            Orang Tua Wali<br><br><br>
                            <u>......................................................</u>
                        </td>
                    </tr>
                    <tr class="">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            .............................,...........<br>
                            Kepala Sekolah,<br><br><br>
                            <u>......................................................</u><br>
                            NIP.<br>
                            Orang Tua/Wali,<br><br><br>
                            <u>......................................................</u>
                        </td>
                    </tr>
                    <tr class="">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            .............................,...........<br>
                            Kepala Sekolah,<br><br><br>
                            <u>......................................................</u><br>
                            NIP.<br>
                            Orang Tua/Wali,<br><br><br>
                            <u>......................................................</u>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
<div class="sticky-bottom">
    <?php require_once '../cetak/kembali.php'; ?>
</div>
<?php include '../footutama.php'; ?>