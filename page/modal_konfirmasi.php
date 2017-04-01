<div class="portfolio-modal modal fade" id="modal_konfirmasi" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                            <h1>FORM KONFIRMASI POEMBAYARAN</h1>
<hr>
 <form name="konfirmasi" id="" novalidate action="" method="POST" enctype='multipart/form-data'>
  <div class="col-md-12">
                                <div class="form-group">
                                <label class="pull-left"> NO REGISTRASI </label>
                                    <input type="text" name="no_regis" class="form-control" placeholder="NO REGISTRASI" id="no_regis" required data-validation-required-message="Tolong isikan NO registrasi anda Anda">
                                    <p  class=" help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  UPLOAD BUKTI PEMBAYARAN </label>
                                    <input type="file" class="form-control" name='bukti' id="bukti" placeholder="pilih pas foto" accept=".jpg" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="simpan" class="btn btn-xl">Simpan</button>
                            </div>
                        </div>
                    </form>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('fungsi/koneksi.php');
    if(isset($_POST['simpan'])){
        $tanggal=date('Y-m-d');
        $no_regis = $_POST['no_regis'];
 $cek = mysql_num_rows(mysql_query("SELECT * FROM registrasi WHERE no_registrasi = '".$no_regis."' AND status_pembayaran!='1'"));
    if($cek=='0'){
         echo"<script language='javascript'>
                            alert('no registrasi tidak ada di database atau pembayaran sudah terkonfirmasi');
                            document.location.href='index.php';
                            </script>";
    }
    if($cek=='1'){
    if(!is_dir("data_pembayaran/".$no_regis)){
        mkdir("data_pembayaran/".$no_regis);
    }
    else{

    }
// UPLOAD GAMBAR
    $uploadDir = "data_pembayaran/".$no_regis."/";

    $photo = $no_regis.".jpg";

    $upload_photo = move_uploaded_file($_FILES['bukti']['tmp_name'], $uploadDir.$photo);
    if($upload_photo){
         $nourut = mysql_query("SELECT  no_pembayaran FROM pembayaran ORDER BY no_pembayaran DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['no_pembayaran'],15,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
     $c=$kode;
     $no_pembayaran="PEM"."-".$tanggal."-".$c;
     $status_pembayaran='1';
        $insert_pembayaran="INSERT INTO pembayaran (no_pembayaran,no_registrasi,bukti_pembayaran,tanggal_upload) VALUES('$no_pembayaran','$no_regis','$photo','$tanggal')";
            $status="UPDATE registrasi SET status_pembayaran='$status_pembayaran' WHERE no_registrasi='$no_regis'";
            $exec_p=mysql_query($insert_pembayaran)or die('error :'. mysql_error());
            $update_status=mysql_query($status);

  if($update_status && $exec_p){
                echo"<script language='javascript'>
                            alert('Data Berhasil Masuk');
                            document.location.href='index.php';
                            </script>";
            }
            else {
                echo"<script language='javascript'>
                            alert('error');
                            document.location.href='index.php';
                            </script>";
            }

}
}
}

        ?>