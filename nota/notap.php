<?php include '../headutama.php'; ?>
<div class="a4 bg-white justify-content-center" style="margin: auto;">
    <?php include '../cetak/header.php' ?>
    <div class="container-fluid P-2">
        <div class="row row-cols-6">
            <div class="col">Kepada </div>
            <div class="col-4">: Yth. Pimpinan Yayasan Adijanto</div>
        </div>
        <div class="row row-cols-6">
            <div class="col">Perihal </div>
            <div class="col-4">: Permohonan</div>
        </div>
        <table class="table table-borderless p-2">
            <thead>
                <tr>
                    <th class='p-1 border border-2 border-dark'>No</th>
                    <th class='p-1 border border-2 border-dark'>NAMA / JENIS BARANG / JASA </th>
                    <th class='p-1 border border-2 border-dark'>JUMLAH</th>
                    <th class='p-1 border border-2 border-dark'>KETERANGAN</th>
                </tr>
            </thead>
            <tbody class="border-bottom border-1 border-dark ">
                <?php include('../conn.php');
                $totalAkhir = 0;
                $sqlNota = "SELECT * FROM tblNota";
                $rslt = mysqli_query($conn, $sqlNota);
                $i = 1;
                if (mysqli_num_rows($rslt) > 0) :
                    while ($rws = mysqli_fetch_assoc($rslt)) :
                         ?>
                        <tr>
                            <th class='ps-1 border-start border-end border-dark'><?= $i++ ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= $rws['Nama Barang'] ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= $rws['Qty'] ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= $rws['Keterangan'] ?></th>
                        </tr>
                <?php
                    endwhile;
                endif;

                while ($i<15): 
                ?>
                    <tr>
                        <td class='ps-1 border-start border-end border-dark'></td>
                        <td class='ps-1 border-start border-end border-dark'></td>
                        <td class='ps-1 border-start border-end border-dark'></td>
                        <td class='ps-1 border-start border-end border-dark'></td>
                    </tr>
                <?php 
                $i++; 
                endwhile; 
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td class="border border-1 border-dark"></td>
                    <td class="border border-1 border-dark"></td>
                    <td class="border border-1 border-dark"></td>
                    <td class="border border-1 border-dark"></td>
                </tr>
            </tfoot>

        </table>

        <p>Demikian untuk menjadikan periksa dan atas perhatiannya kami ucapkan terima ksih.</p>
        <div class="container ">
            <div class="row row-cols-10 justify-content-md-center">
                <div class="col-5">Mengetahui,</div>
                <div class="col-5">Sungai Raya, 20 Maret 2023</div>
            </div>
            <div class="row row-cols-10 justify-content-md-center mb-1">
                <div class="col-5">Manajer Eksekutif</div>
                <div class="col-5">Kepala Sekolah</div>
            </div>
            <div class="row row-cols-10 justify-content-md-center mt-5">
                <div class="col-5">Jimmy The</div>
                <div class="col-5">Anton Wijaya, SH.</div>
            </div>
        </div>
    </div>
    <div class="kaki">
        <?php include '../cetak/footer.php';
        mysqli_close($conn);
        ?>
    </div>
</div>
<?php include '../footutama.php';