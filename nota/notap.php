<?php include '../headutama.php'; ?>
<div class="a4 bg-white justify-content-center" style="margin: auto;">
    <?php include '../cetak/header.php' ?>
    <div class="container P-2">
        <span>Tanggal : 11 Maret 2023</span>
        <table class="table table-borderless p-2">
            <thead>
                <tr>
                    <th class='p-1 border border-2 border-dark'>No</th>
                    <th class='p-1 border border-2 border-dark'>Nama Barang</th>
                    <th class='p-1 border border-2 border-dark'>Qty</th>
                    <th class='p-1 border border-2 border-dark'>Satuan</th>
                    <th class='p-1 border border-2 border-dark'>Harga Satuan</th>
                    <th class='p-1 border border-2 border-dark'>Total Harga</th>
                </tr>
            </thead>
            <tbody class="border-bottom border-1 border-dark">
                <?php include('../conn.php');
                $totalAkhir = 0;
                $rslt = mysqli_query($conn, $sqlNota);
                if (mysqli_num_rows($rslt) > 0) :
                    while ($rws = mysqli_fetch_assoc($rslt)) :
                        $total = $rws['Qty'] * $rws['Harga'] ?>
                        <tr>
                            <th class='ps-1 border-start border-end border-dark'><?= $rws['No'] ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= $rws['Nama Barang'] ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= $rws['Qty'] ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= $rws['Satuan'] ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= "Rp. " . number_format($rws['Harga'], 0, ',', '.') . ",00"; ?></th>
                            <td class='ps-1 border-start border-end border-dark'><?= "Rp. " . number_format($total, 0, ',', '.') . ",00"; ?></th>
                        </tr>
                <?php
                        $totalAkhir = $totalAkhir + $total;
                    endwhile;
                endif;
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5" class="border border-1 border-dark">Total</th>
                    <td class="border border-1 border-dark"><?= "Rp. " . number_format($totalAkhir, 0, ',', '.') . ",00"; ?></td>
                </tr>
            </tfoot>

        </table>
    </div>
    <div class="kaki">
        <?php include '../cetak/footer.php' ?>
    </div>
</div>
<?php include '../footutama.php'; ?>