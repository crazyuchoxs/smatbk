<?php include '../headutama.php';
?>
<div class="container text-center">
    <div class="row mt-4 mx-4 shadow align-items-center rounded-2 overflow-hidden" style="min-height:550px;">
        <div class="col bg-warning d-none d-sm-block" style="min-height:550px;">
            <div class="rounded-circle bg-black d-inline-block p-5 m-5" style="--bs-bg-opacity:.1">
                <i class="fa-solid fa-user-gear text-warning-emphasis fs-1"></i>
            </div>
        </div>
        <div class="col bg-white p-4" style="min-height:550px;max-height:550px;overflow-y:scroll;">
            <?php include 'cariSiswa.php' ?>
        </div>
    </div>
</div>
<?php include '../bavk.php' ?>
<?php include '../footutama.php'; ?>

</html>