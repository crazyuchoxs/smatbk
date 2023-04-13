<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jenisS = $_POST['jenisSurat'];
    if ($jenisS == 'Surat Keterangan') {
        $link = 'suratKeterangan/';
    } else if ($jenisS == 'Surat Pindah') {
        $link = 'suratPindah/';
    } else if ($jenisS == 'Surat Keterangan Kelas XII') {
        $link = 'suratKeteranganKelasXII/';
    } else {
        $link = $_SERVER['PHP_SELF'];
    }

    header('Location: ' . $link);
    exit;
}
include 'headutama.php';
?>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-center shadow-sm">
        <div class="col">&nbsp;</div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center z-1">
        <div class="col-2 shadow-sm" style="min-height: 500px;">&nbsp;</div>
        <div class="col">

            <!-- data input -->
            <div class="row">
                <div class="col">
                    <form method="post">
                        <div class="input-group mb-3 ">
                            <label class="input-group-text" for="JenisSurat">Surat</label>
                            <select class="form-select" id="jenisSurat" name="jenisSurat">
                                <option value=""> --> Pilih Surat <-- </option>
                                <option value="Surat Keterangan Kelas XII">KetKelasXII</option>
                                <option value="Surat Keterangan">Keterangan</option>
                                <option value="Surat Pindah">Pindah</option>
                            </select>
                            <button class="btn btn-success" type="submit"><i class="fa-solid fa-file"></i> Buat Surat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3">&nbsp;</div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-center shadow" style="min-height: 100px;">
        <div class="col">&nbsp;</div>
    </div>
</div>
<?php include 'footutama.php';
