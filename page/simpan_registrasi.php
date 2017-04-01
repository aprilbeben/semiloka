<?php
include('../fungsi/koneksi.php');
if (isset($_POST['simpan'])){

$nourut = mysql_query("SELECT no_registrasi FROM registrasi ORDER BY no_registrasi DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['no_registrasi'],15,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
     $c=$kode;
     $tanggal=date('Y-m-d');
     $no_regis="SEM"."-".$tanggal."-".$c;


//data universitas
$pt=$_POST['pt'];
$alamat_pt=$_POST['alamat_pt'];
$web_pt=$_POST['web_pt'];
$email_pt=$_POST['email_pt'];
$ps=$_POST['ps'];
$no_tlp_pt=$_POST['no_tlp_pt'];

//data diri
$nama=$_POST['nama'];
$gelar_d=$_POST['gelar_d'];
$gelar_b=$_POST['gelar_b'];
$nidn=$_POST['nidn'];
$jabatan=$_POST['jabatan'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$web=$_POST['web'];
$email=$_POST['email'];
$acara=$_POST['acara'];
$jumlah_acara=count($acara);
$status_pembayaran=0;

$query="INSERT INTO registrasi (no_registrasi,tanggal_registrasi,status_pembayaran) VALUES ('$no_regis','$tanggal','$status_pembayaran')";
$insert_registrasi=mysql_query($query) or die (mysqli_error());

$query_du="INSERT INTO data_universitas (no_registrasi,nama_pt,alamat_pt,no_tlp_pt,website_pt,email_pt,program_studi) VALUES('$no_regis','$pt','$alamat_pt','$no_tlp_pt','$web_pt','$email_pt','$ps')";
$insert_du=mysql_query($query_du) or die (mysqli_error());

$query_dd="INSERT INTO data_peserta (no_registrasi, nama, gelar_depan, gelar_belakang, nidn, jabatan, alamat, no_tlp, email,website) VALUES ('$no_regis','$nama','$gelar_d','$gelar_b','$nidn','$jabatan','$alamat','$no_tlp','$email','$web')";
$insert_dd=mysql_query($query_dd) or die (mysqli_error($query_dd));

for($i=0;$i<$jumlah_acara;$i++){
	$insert_acara=mysql_query("INSERT INTO acara (no_registrasi,jenis_acara) VALUES ('$no_regis','$acara[$i]')");
}

if($insert_registrasi && $insert_acara && $insert_dd && $insert_du){
	require_once("../asset/Mail/Mail.php");
require_once("../asset/Mail/Mail_mime/Mail/mime.php");
require_once('../asset/html2pdf/html2pdf.class.php');
ob_start();
require('email_pemberitahuan.php');
$html=ob_get_clean();
$pdf= new HTML2PDF('P','A4');
$pdf->writeHTML($html);
$pdfoutput=$pdf->Output('email.pdf',true) ;

$filename="email.pdf";
$from="inkubatormandiri@gmail.com";
$to       = $email;
$subject  = 'REGISTRASI RAKERNAS DAN SEMILOKA';
$message  = 'Dear Bpk/Ibu, terimakasih telah melakukan pendaftaran Pada Aara RAKERNAS APTIKOM DAN SEMILOKA NASIONAL VOKASI ';

$mime= new Mail_mime();
$mime->setTXTBody($message);
$mime-> setHTMLBody(nl2br($message));
$mime->addAttachment($pdfoutput,"Aplication/pdf",$filename, false);

$body=$mime->get();
$headers= $mime->headers(array(

	'From'    => $from,
	'To'	  => $to,
	'subject' => $subject
	));
$smtp =mail::factory('smtp',array(
	'host'    => "ssl://smtp.gmail.com",
	'port'	  =>"465",
	'auth'	  => true,
	'username'=>"semlokaptikom2017@gmail.com",
	'password'=>"aptikom2017"
	));

	$mail=$smtp->send($to,$headers,$body);
	if(PEAR::isError($mail)){
		echo("<script>
alert('".$mail->getMessage()."');
</script>
			");
	}
	else{
		echo("<script>
alert('success kirim email');
document.location.href='../index.php?';
</script>
			");

	}
   
}
}

?>