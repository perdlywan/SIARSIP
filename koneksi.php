<?php

	$koneksi = mysqli_connect("localhost","root","","db_arsip");

	if(mysqli_connect_errno()){
		echo "Koneksi Gagal";
	}
