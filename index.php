<!DOCTYPE html>
<html>

<head>
	<title>Login - Sistem Informasi Arsip Digital</title>

	<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="icon" href="assets/img/LOGO-BPS.png">

</head>

<body style="background:#e2e8f0; font-family:'Nunito'">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="text-center mt-5">
					<img src="assets/img/LogoBps.png" style="width:200px">
					<h3 class="font-weight-bold text-gray-900 mt-4">Sistem Informasi Pengarsipan</h3>
					</center>
				</div>

				<div class="card o-hidden border-0 shadow-lg mb-3 mt-4">
					<div class="card-body p-4">
						<form action="login.php" method="POST">
							<?php
							if (isset($_GET['pesan'])) {
								if ($_GET['pesan'] == "gagal") {
									echo "<div class='alert alert-danger text-center'>Maaf! Username dan Password Salah!</div>";
								} else if ($_GET['pesan'] == "logout") {
									echo "<div class='alert alert-success text-center'>Anda Telah Berhasil Logout</div>";
								} else if ($_GET['pesan'] == "belum_login") {
									echo "<div class='alert alert-warning text-center'>Anda Harus Login Terlebih Dahulu</div>";
								}
							}
							?>

							<div class="form-group">
								<label>NIP</label>
								<input type="text" name="Nip" required="required" class="form-control" placeholder="Masukkan Nomor Induk Pegawai..">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" required="required" class="form-control" placeholder="Masukkan Password..">
							</div>

							<div class="form-group">
								<label>Hak Akses</label>
								<select class="form-control" name="akses">
									<option value="admin">Admin</option>
									<option value="koordinator">Koordinator</option>
									<option value="pegawai">Pegawai</option>
								</select>
							</div>

							<input type="submit" value="LOGIN" class="btn btn-primary btn-block mb-3">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>