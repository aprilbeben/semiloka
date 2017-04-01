	<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
   <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
    <br>
    <br>
	<table style="width: 80%;border-collapse: collapse" align="center">
	<thead >
            <tr>
                <th style="width:10%;"><img style="width:100px;"src='../asset/img/logos/APTIKOM.png'/></th>
                <th style="width:80%;"><p align="center"><span style="font-family:Arial, Helvetica, sans-serif; font-size:15px">RAKERNAS DAN SEMILOKA APTIKOM 2017</span><br>
Universitas Komputer Indonesia<br>
Jalan Dipatiukur No. 112-116,Bandung<br>  telepon (022) 2504119  </p></th>

<th style="width:10%;" align="left"> <img align="left" style="width:100px;"src='../asset/img/logos/unikom.png' /></th>
            </tr>
			<tr>
                <th style="width: 50%;" colspan="3">
				<span>---------------------------------------------------------------------------------------------------------------------------------------------------</span></th>
            </tr>
        </thead>
        <tbody>

 <tr>

					<?php 
						$registrasi=mysql_fetch_array(mysql_query("SELECT * FROM registrasi WHERE no_registrasi='".$no_regis."'"));	
						$data = mysql_fetch_array(mysql_query("SELECT * FROM data_peserta WHERE no_registrasi='".$no_regis."'"));
				
						
					?>
                 <td style="width: 100%;margin-right:10px;text-valign:top;" colspan="3">
                 <br><br>
					<h2 style='border: 1px;margin-top:-10px'>No REGISTRASI :<?php echo $no_regis?></h2>
					<span>Nama : <?php $nama=$data['nama']; echo "$gelar_d $nama $gelar_b";?></span><br>
					<span>Alamat : <?php echo $alamat;?></span><br>
					<span>No.telepon : <?php echo $no_tlp;?></span>
					<br>
					<br>
					<h3>METODE PEMBAYARAN</h3><br>
					<span>Pembayaran dilakukan secara transfer Ke rekening di bawah ini</span><br>
					<span>NO REKENING :</span><br>
					<span>Setelah melakukan pembayaran silahkan foto bukti pembayaran dan Upload di halaman konfirmasi dan masukan no registrasi anda</span><br>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>
	<span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
	# setelah pembayaran jangan lupa Upload bukti pembayaran di menu konfirmasi<br><br>
	# Batas akhir pembayaran tanggal 13 Januari 2017 .
	<br><br>
    <br>
</page>
