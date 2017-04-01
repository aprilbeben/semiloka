
<?php
$no = $_GET['no'];

include('../../../fungsi/koneksi.php');
$sql="SELECT * FROM pembayaran  WHERE no_pembayaran= '".$no."'";
$result = mysql_query($sql) or die (mysql_error());
$data=mysql_fetch_array($result);
$no_regis=$data['no_registrasi'];
$foto=$data['bukti_pembayaran'];
echo "<img src=../data_pembayaran/".$no_regis."/".$foto.">";
?>
