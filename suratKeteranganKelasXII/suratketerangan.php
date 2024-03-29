    <div class="container-fluid suratketerangan">
        <div class="judul">
            <h2>SURAT KETERANGAN</h2>
            <p>No : <?= $_POST['nosurat'] ?>/I14.2.14/SMA-TBK/TU/<?php echo date("Y") ?></p>
        </div>
        <p>Yang bertanda tangan di bawah ini Kepala SMA Taruna Bumi Khatulistiwa kabupaten Kubu Raya, dengan ini menerangkan bahwa :</p>
        <p>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Nama</div>
            <div class="col-7">: <?php echo $_POST['nma']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">NIS</div>
            <div class="col-7">: <?php echo $_POST['nis']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">NISN</div>
            <div class="col-7">: <?php echo $_POST['nisn']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Jenis Kelamin</div>
            <div class="col-7">: <?php echo $_POST['jk']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Kelas</div>
            <div class="col-7">: <?php echo $_POST['kelas']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Tempat & Tgl. Lahir</div>
            <div class="col-7">: <?= $_POST['ttl']; ?></div>
        </div>
        </p>
        <p>Ketarangan :</p>
        <?php
        include '../cetak/roman.php';
        include '../cetak/tglIndo.php';
        include '../cetak/romawi.php';
        include '../conn.php';
        include '../conKasek.php';
        ?>
        <p>
        <ol>
            <li>Nama tersebut diatas adalah benar siswa SMA Taruna Bumi Khatulistiwa Angkatan <?= $angkatan ?> Tahun Pelajaran <?= $tahun ?>.</li>
            <li>Yang bersangkutan tercatat dalam Kegiatan Belajar Mengajar Tahun Pelajaran 2022/2023 dan masih duduk di kelas XII</li>
            <li>Yang bersangkutan telah mengikuti semua penilaian yang dilakukan sekolah sebagai syarat pertimbangan kelulusan</li>
            <li>Surat keterangan ini diberikan untuk melengkapi persyaratan <?= $_POST['Tujuan'] ?></li>
        </ol>
        </p>
        <p>Demikian Surat Keterangan ini dibuat, agar menjadikan periksa bagi yang berkepentingan.</p>
        <div class="row justify-content-end">
            <div class="col-5">
                <br><br>
                Sungai Raya, <?= dateIN(date("d m Y")) ?><br>
                <?= $kasek['Jabatan'] ?><br><br><br><br>
                <?= $kasek['Nama'] ?>
            </div>
        </div>

    </div>