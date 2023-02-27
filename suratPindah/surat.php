<?php include '../headutama.php' ?>
<link rel="stylesheet" href="printPotrait.css">
<?php include '../err.php' ?>
<?php include '../err2.php' ?>
<div class="a4 bg-white" style="margin: auto;">
    <?php include '../cetak/header.php' ?>
    
        
        <?php include 'suratketerangan.php' ?>
        <div class="kaki">
            <?php include '../cetak/footer.php' ?>
        </div>
        <div class="mundur sticky-bottom ms-3" style="padding:0px 0px 60px 0px !important">
            <?php include '../cetak/lanjutan.php' ?>
        </div>

    <div class="mundur sticky-bottom">
        <?php include '../cetak/kembali.php' ?>
    </div>
</div>
<?php include '../footutama.php'; ?>