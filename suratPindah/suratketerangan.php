    <div class="container-fluid suratketerangan">
        <div class="judul">
            <h2>SURAT KETERANGAN</h2>
            <p><?= $_POST['noSurat'] ?>/I14.2.14/SMA-TBK/TU/<?= date("Y") ?></p>
        </div>
        <p>Yang bertanda tangan di bawah ini Kepala SMA Taruna Bumi Khatulistiwa kabupaten Kubu Raya, dengan ini menerangkan bahwa :</p>
        <p>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Nama</div>
            <div class="col-7">: <?= $_POST['nma']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Tempat & Tgl. Lahir</div>
            <div class="col-7">: <?= $_POST['ttl']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Jenis Kelamin</div>
            <div class="col-7">: <?= $_POST['jk']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Agama</div>
            <div class="col-7">: <?= $_POST['agama']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">NIS / NISN</div>
            <div class="col-7">: <?= $_POST['nis']; ?> / <?= $_POST['nisn']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Kelas</div>
            <div class="col-7">: <?= $_POST['kelas']; ?></div>
            <?php $klsPindah = $_POST['kelas'] ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Nama Orang Tua</div>
            <div class="col-7">: <?= $_POST['nOT']; ?></div>
        </div>

        </p>
        <p>Ketarangan :</p>
        <?php
        include '../cetak/roman.php';
        include '../cetak/tglIndo.php';
        include '../cetak/romawi.php';
        ?>
        <p>
        <ol>
            <li>Nama tersebut diatas adalah benar siswa SMA Taruna Bumi Khatulistiwa Angkatan <?= $angkatan ?> Tahun Pelajaran <?= $tahun ?>.</li>
            <li>Siswa tersebut telah mengikuti kegiatan belajar mengajar berbasis Kurikulum Merdeka</li>
            <li>Yang bersangkutan mengajukan pindah sekolah ke <?= $_POST['tujuansekolah'] ?> berdasarkan <?= $_POST['alasanpindah']?> pada tanggal <?= $_POST['tglPermintaan'] ?></li>
            <li>Selama dalam pengasuhan dan pembinaan kami, siswa tersebut berkelakuan baik.</li>
        </ol>
        </p>
        <p>Demikian Surat Keterangan ini dibuat, agar menjadikan periksa bagi yang berkepentingan.</p>
        <div class="row justify-content-end">
            <div class="col-5">
                <?php
                include '../conn.php';
                include '../conKasek.php';
                
                ?>
                <br><br>
                Sungai Raya, <?= dateIN(date("d m Y")) ?><br>
                <?= $kasek['Jabatan'] ?><br><br><br><br>
                <?= $kasek['Nama'] ?>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col">
                <br><br><br><br>
                Tembusan<br>
                <ul style="list-style-type:' - '">
                    <li>Dinas Pendidikan Provinsi Kalimantan Barat</li>
                    <li>Manajer Eksekutif Yayasan Adijanto</li>
                    <li>Arsip</li>
                </ul>
            </div>
        </div>

    </div>