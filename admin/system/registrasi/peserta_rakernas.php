<?php
  
  $regis = mysql_query("SELECT * FROM registrasi ");
  $n_regis = mysql_num_rows($regis);

$rakernas = mysql_query("SELECT * FROM acara WHERE jenis_acara='RAKERNAS'");
  $n_rakernas = mysql_num_rows($rakernas);

  $semiloka = mysql_query("SELECT * FROM  acara WHERE jenis_acara='SEMILOKA'");
  $n_semiloka = mysql_num_rows($semiloka);

      ?>


  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_registrasi" title="pergi ke registrasi" class="tip-bottom">data_registrasi</a></div>
  </div>
   <div class="container-fluid">
   
<div class="row-fluid">
    <h3 align="center"> 
   PESERTA RAKERNAS
      </h3>

      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Informasi registrasi</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
          
          <div class="quick-actions_homepage">
    <ul class="quick-actions site-stats">
    <li class="bg_lb span2">   <a href=""><b>jumlah Pendaftar</b> <br> <h1><?php echo $n_regis; ?></h1>
    </a></li>
    <li class="bg_lb span2">   <a href=""><b> peserta rakernas</b> <br> <h1> <?php echo $n_rakernas ?> </h1>
    </a></li>
    </ul>
  </div>
        </div>
      </div>
    </div>
</div>


    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Pendaftaran</h5>
            <p style='float:right; height:100%;'>
       
      </p>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No Registrasi</th>
                  <th>Nama</th>
                  <th>Universitas</th>
                  <th>PRODI</th>
                  <th> konfirmasi</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
include"../fungsi/koneksi.php";
$query2=mysql_query("SELECT registrasi.* , data_peserta.*,data_universitas.*,acara.* FROM registrasi INNER JOIN data_peserta ON registrasi.no_registrasi=data_peserta.no_registrasi INNER JOIN data_universitas ON registrasi.no_registrasi=data_universitas.no_registrasi INNER JOIN acara ON registrasi.no_registrasi=acara.no_registrasi WHERE acara.jenis_acara='RAKERNAS'");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['no_registrasi']; ?></center></td>
                  <td><center><?php echo $data2['nama']; ?></center></td>
                  <td><center><?php echo $data2['nama_pt']; ?></center></td>
                  <td class="center"><center>
                  <?php 
                  if($data2['program_studi']=="MI"){
                    echo"<label style='color:black;'><strong>MANAJEMEN INFORMATIKA</strong></label>";
                  }
                    else if ($data2['program_studi']=="KA"){
                      echo "<label style='color:black;'><strong>KOMPUTER AKUNTANSI</strong></label>";
                    }
                     else if ($data2['program_studi']=="TK"){
                      echo "<label style='color:black;'><strong> TEKNIK KOMPUTER</strong></label>";
                    }
                     else if ($data2['program_studi']=="LL"){
                      echo "<label style='color:black;'><strong> LAIN LAIN</strong></label>";
                    } 
                    ?></center></td>
                  <td><center>
                  <?php
                  if($data2['status_pembayaran']==0){
                    echo"belum upload pembayaran";
                  }
                    else if ($data2['status_pembayaran']==1){
                      echo "<label style='color:blue;'><strong>sudah upload pembayaran</strong></label>";
                    }
                     else if ($data2['status_pembayaran']==2){
                      echo "<label style='color:green;'><strong> pembayaran valid</strong></label>";
                    }
                  ?>
                  </center>
                  </td>
                  <td class="center" ><center>

                   <button type="button" class="btn btn-success" value="<?php echo $data2['no_registrasi']; ?>" data-toggle="modal" data-target="#detail_registrasi"  onclick="registrasiDetail(this.value)" title="detail"><span class="glyphicon glyphicon-file"><i class="icon-file" ></i></span></button>
                    </center>
                  </td>
              
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

             <div class='modal fade' id='detail_registrasi' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'style='width:800px'> 
           <div class='modal-dalog' style='width:800px' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                     <h1>registrasi</h1>
                    </div>
                    <div class='modal-body widget-content' id='data_detail_registrasi'>
                   
</div>
</div>
</div>  