<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kartu Peserta</title>
	<link rel="icon" href="<?= base_url('assets/'); ?>home/images/favicon.png">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.line-title {
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
	</style>
</head>

<body>



	<div class="">
		<table style="width: 100%;" class="">
			<thead>
				<tr>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
					<th><img src="assets/bootstrap/img/Logo Assanusiah PNG.png" class="ml-5" style="width:130px;"></th>
					<th>
						<p style="font-weight: bold; text-align: center; font-size: 20px;" class="mr-5">
							TANDA PESERTA UJIAN MASUK
							<br>PONDOK PESANTREN ASSANUSIAH
							<br>KABUPATEN CIREBON
						</p>
					</th>
					<th>
						<p></p>
					</th>
					<th>
						<p></p>
					</th>
				</tr>
			</thead>
		</table>
	</div>

	<hr class="line-title">
	<br>
	<div class="">
		<div class="row">
			<table style="width: 100%;" class="">
				<thead>
					<tr>
						<th class="text-center"><img src="assets/img/foto/<?= $data['foto'] ?>" class="" style="width:250px;"></th>

						<th class="mt-5">
							<b>No. Pendaftaran : </b> <?= $data['id']; ?>-<?= $data['tgl']; ?><br>
							<b>Nisn : </b><?= $data['nisn']; ?><br>
							<b>Nama Lengkap : </b><?= $data['nama_lengkap']; ?><br>
							<b>Jenis Kelamin : </b><?= $data['jk']; ?><br>
							<b>email : </b><?= $data['email']; ?><br> <br> <br><br><br>

							<i>*Catatan</i><br>
							<b>- Membawa Kartu Peserta ini</b><br>
							<b>- Berpakaian Rapi & Sopan</b><br>
						</th>
				</thead>
			</table>
		</div>
	</div>
<br>
	<hr class="line-block">
<p>Tanggal test : 1 Mei <?= date('Y')?></p>
<p>Pukul : 09.00 s/d Selesai</p>


</body>

</html>