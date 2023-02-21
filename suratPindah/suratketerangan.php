    <div class="container-fluid suratketerangan">
        <div class="judul">
            <h2>SURAT KETERANGAN</h2>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/I14.2.14/SMA-TBK/TU/<?php echo date("Y") ?></p>
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
            <div class="col-4">Tempat & Tgl. Lahir</div>
            <div class="col-7">: <?php echo $_POST['ttl']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Jenis Kelamin</div>
            <div class="col-7">: <?php echo $_POST['jk']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Agama</div>
            <div class="col-7">: <?php echo $_POST['agama']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">NIS / NISN</div>
            <div class="col-7">: <?php echo $_POST['nis']; ?> / <?php echo $_POST['nisn']; ?></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Kelas</div>
            <div class="col-7">: <?php echo $_POST['kelas']; ?></div>
            <?php $klsPindah = $_POST['kelas'] ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-1"></div>
            <div class="col-4">Nama Orang Tua</div>
            <div class="col-7">: <?php echo $_POST['nOT']; ?></div>
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
            <li>Nama tersebut diatas adalah benar siswa SMA Taruna Bumi Khatulistiwa Angkatan <?php echo $angkatan ?> Tahun Pelajaran <?php echo $tahun ?>.</li>
            <li>Siswa tersebut telah mengikuti kegiatan belajar mengajar berbasis Kurikulum Merdeka</li>
            <li>Yang bersangkutan mengajukan pindah sekolah ke <?php echo $_POST['tujuansekolah'] ?> berdasarkan Permintaan Orang Tua pada tanggal <?php echo $_POST['tglPermintaan'] ?></li>
            <li>Selama dalam pengasuhan dan pembinaan kami, siswa tersebut berkelakuan baik.</li>
        </ol>
        </p>
        <p>Demikian Surat Keterangan ini dibuat, agar menjadikan periksa bagi yang berkepentingan.</p>
        <div class="row justify-content-end">
            <div class="col-5">
                <br><br>
                Sungai Raya, <?php echo dateIN(date("d m Y")) ?><br>
                Kepla Sekloah<br><br><br><br>
                Anton Wijaya, SH.
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