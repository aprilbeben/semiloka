<div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_pembayaran" title="pergi ke pembayaran" class="tip-bottom">pembayaran</a><a href="index.php?page=data_konfirmasi" title="pergi ke data konfirmasi" class="tip-bottom">data pembayaran</a></div>
  </div>
   <div class="container-fluid">
   
<div class="row-fluid">
    <h3 align="center"> 
    Data Pembayaran <br>
    RAKERNAS DAN SEMILOKA 2017
      </h3>
</div>


    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Pendaftaran </h5>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No Registrasi</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th> Verifikasi</th>
                  <th> foto pembayaran</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT  pembayaran.* ,data_peserta.* FROM pembayaran  INNER JOIN data_peserta ON pembayaran.no_registrasi=data_peserta.no_registrasi");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['no_registrasi']; ?></center></td>
                  <td><center><?php echo $data2['nama']; ?></center></td>
                  <td><center><?php echo $data2['alamat']; ?></center></td>
                  <td class="center"><center><?php echo $data2['no_tlp']; ?></center></td>
                  <td><center>
                  <?php
                  if($data2['verivikasi']==0){
                    echo"belum di konfirmasi";
                  }
                    else if ($data2['verivikasi']==1){
                      echo "<label style='color:green;'><strong>valid</strong></label>";
                    }
                     else if ($data2['verivikasi']==2){
                      echo "<label style='color:red;'><strong> tidak valid</strong></label>";
                    }
                  ?>
                  </center>
                  </td>
                   <td class="center" ><center>

                  <button type="button" class="btn btn-info" value="<?php echo $data2['no_pembayaran']; ?>" data-toggle="modal" data-target="#detail_foto"  onclick="detailFoto(this.value)"><b></b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button>
                  </center></td>
                  <td class="center" ><center>
                  <a href="index.php?page=verifikasi&no_pem=<?php echo $data2['no_pembayaran']?>" class="btn btn-small btn-primary")><i class="btn-icon-only icon-file"> konfirmasi</i></a>

                  </center></td>
                  
                  

                  
                </tr>


                <?php

                }
                ?>
                 </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>

          <div class='modal fade' id='detail_foto' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'style='width:800px'> 
           <div class='modal-dalog' style='width:800px' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                     <h1>bukti pembayaran </h1>
                    </div>
                    <div class='modal-body widget-content' id='data_detail_foto'>
                   
</div>
</div>
</div>  