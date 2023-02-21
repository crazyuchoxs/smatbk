<?php
include '../conn.php';
include '../cetak/tglIndo.php';
error_reporting(0);

// Execute the query and store the result
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) : ?>
	<form method='POST'>
		<div class="input-group mb-3">
			<input name="nama" type="text" class="form-control bg-outline-success" list="datalistOptions" placeholder="Nama Siswa" aria-label="Nama Siswa" aria-describedby="button-addon2">
			<datalist id='datalistOptions'>

				// Output the data from each row
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>
					<option value='<?= ucwords(strtolower($row["Nama"])) ?>'></option>
				<?php endwhile; ?>
			</datalist>
			<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari Siswa</button>
		</div>
	</form>
<?php else : ?>
	<?= 'No data found' ?>
<?php endif ?>

<?php
$nama1 = $_POST['nama'];

$sql2 = "SELECT * FROM tblSiswa WHERE Nama ='" . $nama1 . "'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) :
	// output data of each row
	while ($row = $result2->fetch_assoc()) :

		$nm = ucwords(strtolower($row['Nama']));
		$nisn = $row['NISN'];
		$nis = $row['NIPD'];
		$kelas = $row['Rombel Saat Ini'];
		$agama = ucwords(strtolower($row['Agama']));
		$nOT = ucwords(strtolower($row['Nama Ayah']));
		$ttl = ucwords(strtolower($row['Tempat Lahir'])) . ", " . dateIN(date("m d Y", strtotime($row['Tanggal Lahir'])));
		if ($row['JK'] == "L") {
			$jk = "Laki - Laki";
		} else {
			$jk = "Perempuan";
		}
?>


		<form action="surat.php" method="post">
			<div class="input-group mb-3">
				<span class="input-group-text " id="basic-addon1">Nama</span>
				<input type="text" name="nma" class="form-control" value='<?= $nm ?>' aria-describedby="basic-addon1" readonly>
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">Tempat, Tgl Lahir</span>
				<input type="text" name="ttl" class="form-control" value='<?= $ttl ?>' aria-describedby="basic-addon1" readonly>
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">Jenis Kelamin</span>
				<input type="text" name="jk" class="form-control" value='<?= $jk ?>' aria-describedby="basic-addon1" readonly>
				<span class="input-group-text" id="basic-addon1">Agama</span>
				<input type="text" name="agama" class="form-control" value='<?= $agama ?>' aria-describedby="basic-addon1" readonly>
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">NISN</span>
				<input type="text" name="nisn" class="form-control" value='<?= $nisn ?>' aria-describedby="basic-addon1" readonly>
				<span class="input-group-text" id="basic-addon1">NIS</span>
				<input type="text" name="nis" class="form-control" value='<?= $nis ?>' aria-describedby="basic-addon1" readonly>
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">Kelas</span>
				<input type="text" name="kelas" class="form-control" value='<?= $kelas ?>' aria-describedby="basic-addon1" readonly>
				<span class="input-group-text" id="basic-addon1">Nama Orang Tua</span>
				<input type="text" name="nOT" class="form-control" value='<?= $nOT ?>' aria-describedby="basic-addon1" readonly>
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text text-danger border-danger" id="basic-addon1">Tujuan Sekolah</span>
				<input type="text" name="tujuansekolah" class="form-control text-danger border-danger" Placeholder="Tujuan Sekolah..." aria-describedby="basic-addon1" enabled>
			</div>

			<div class="input-group mb-3">
				<span class="input-group-text text-danger border-danger" id="basic-addon1">Keterangan</span>
				<input type="text" name="tglPermintaan" class="form-control text-danger border-danger" Placeholder='<?= dateIN(date("d m Y")) ?>' aria-describedby="basic-addon1" enabled>
			</div>



			<button class="btn btn-primary m-3" type="submit">Buat Surat</button>
		</form>
	<?php endwhile; ?>
<?php else : ?>
	<span>Cari Berdasarkan Nama</span>
<?php endif; ?>

<?php mysqli_close($conn); ?>