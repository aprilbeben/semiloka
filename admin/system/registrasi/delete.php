<?php
if(isset($_GET['no'])){
	include("../../../fungsi/koneksi.php");
$no=$_GET['no'];
$delete_data_uni=mysql_query("DELETE FROM data_universitas WHERE no_registrasi='$no'");
$delete_data_diri=mysql_query("DELETE FROM data_peserta WHERE no_registrasi='$no'");
$delete_acara=mysql_query("DELETE FROM acara WHERE no_registrasi='$no'");

if($delete_data_diri && $delete_data_uni && $delete_acara)
{
	echo"<script> alert('Data Berhasil Masuk');
                          document.location.href='../../index.php?page=data_registrasi';
                          </script>  ";
}
}
?>