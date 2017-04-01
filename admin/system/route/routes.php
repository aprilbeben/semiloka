<?php
	switch(@$_GET['page']){
		default;
		case"dashboard";
		include("page/dashboard.php");
		break;
case "data_registrasi";
include("system/registrasi/data_registrasi.php");
break;
case "peserta_rakernas";
include("system/registrasi/peserta_rakernas.php");
break;
case "peserta_semiloka";
include("system/registrasi/peserta_semiloka.php");
break;
case "edit_data_registrasi";
include("system/registrasi/halaman_edit.php");
break;

case "data_pembayaran";
include("system/pembayaran/data_pembayaran.php");
break;
case "verifikasi";
include("system/pembayaran/konfirmasi.php");
break;
case "verifikasi_proses";
include("system/pembayaran/verifikasi_proses.php");
break;
case "belum_verifikasi";
include("system/pembayaran/belum_verifikasi.php");
break;
	}	?>