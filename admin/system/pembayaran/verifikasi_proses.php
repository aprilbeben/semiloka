<?php
if(isset($_GET['no_pem'])){

	$tanggal=date('Y-m-d');
$query=mysql_query("SELECT pembayaran.*,data_peserta.* FROM pembayaran INNER JOIN data_peserta ON pembayaran.no_registrasi=data_peserta.no_registrasi WHERE pembayaran.no_pembayaran='".$_GET['no_pem']."'") or die(mysqli_error());
$data=mysql_fetch_array($query);
$email=$data['email'];	
$konfirmasi=$_GET['konfirmasi'];
$validasi=mysql_query("UPDATE pembayaran SET verivikasi='$konfirmasi' WHERE no_pembayaran='".$_GET['no_pem']."' ") or die (mysqli_error());
if( $konfirmasi=='1'){
require_once("../asset/Mail/Mail.php");
require_once("../asset/Mail/Mail_mime/Mail/mime.php");
$from="semlokaptikom2017@gmail.com";
$to       = $email;
$subject  = 'Verifikasi pembayaran';
$message  = 'dear Bpk/Ibu, Data Yang Anda kirim sudah di verifikasi terimaksih telah melakukan pembayaran dengan nomer pembayaran"'.$_GET['no_pem'].'"';

$mime= new Mail_mime();
$mime->setTXTBody($message);
$mime-> setHTMLBody(nl2br($message));


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
document.location.href='index.php?page=data_pembayaran';
</script>
			");


            }
        }
else if( $konfirmasi=='2'){
require("Mail.php");
require("Mail/mime.php");
$from="semlokaptikom2017@gmail.com";
$to       = $email;
$subject  = 'Verifikasi pembayaran';
$message  = 'Dear Bpk/Ibu, Data Yang Anda kirim Pada Saat Registrasi Tidak Valid Silahkan Konfirmasi Kembali Dengan Data Yang Valid  ';

$mime= new Mail_mime();
$mime->setTXTBody($message);
$mime-> setHTMLBody(nl2br($message));


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
document.location.href='index.php?page=data_pembayaran';
</script>
			");

	}


            }


            else{
             echo"<script language='javascript'>
                       alert('Gagal');
                       document.location.href='index.php?page=data_pembayaran';
                    </script> ";
            }   

}




?>