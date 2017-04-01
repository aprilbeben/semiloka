<?php
$no = $_GET['no_pem'];
$query=mysql_query("SELECT pembayaran.*,data_peserta.* FROM pembayaran,data_peserta WHERE pembayaran.no_pembayaran='$no' and pembayaran.no_registrasi=data_peserta.no_registrasi");
$data=mysql_fetch_array($query);
?>
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_pembayaran" title="pergi ke pendaftaran" class="tip-bottom">pembayaran</a><a href="index.php?page=data_pembayaran" title="pergi ke data konfirmasi" class="tip-bottom">data pembayaran</a>
   <a href="#" title="konfirmasi pendaftaran" class="tip-bottom"> konfirmasi pendaftaran</a>
   </div>
   <center>
   <h2>Verifikasi Pemabayaran</h2>
   <h3>No REGISTRASI <?php echo $data['no_registrasi'];?></h3>
  </center>
  </div>
       <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Data Pendaftaran</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
              <table>
              <tr>
              <td>
                <img src="../data_pembayaran/<?php echo $data['no_registrasi'];?>/<?php echo $data['bukti_pembayaran'];?>" style="width:300px;"/>
                </td>
                </tr>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                      <td>Nama</td>
                      <td><strong><?php echo $data['nama']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><strong><?php echo $data['alamat']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>NO Telepon</td>
                      <td><strong><?php echo (jin_date_str($data['no_tlp'])); ?></strong></td>
                  
                  </tr>
                  <tr>
                  <td >tanggal Upload :</td>
                    <td><strong><?php echo (dateToIndo($data['tanggal_upload'])); ?></strong></td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>

      
       <div class="pull-right">
                  <br>
                  <table>
                  <tr>
                  <td>
                  <a class="btn btn-success btn-large pull-right" href="index.php?page=verifikasi_proses&no_pem=<?php echo $no?>&konfirmasi=1"title="konfirmsai data ini" onclick="return confirm('ANDA YAKIN DATA INI VALID ... ?')">Valid</a>
                   </td>
                    <td>
                  <a class="btn btn-danger btn-large pull-right" href="index.php?page=verifikasi_proses&no_pem=<?php echo $no?>&konfirmasi=2" title="konfirmsai data ini" onclick="return confirm('ANDA YAKIN DATA INI TIDAK VALID ... ?')">Tidak Valid</a>
                  </td>
                   </tr>
                   </table> 
                   </div>
          
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        