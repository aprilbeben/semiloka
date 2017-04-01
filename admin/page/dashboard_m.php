<link href="asset/fullcalender/lib/cupertino/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="asset/fullcalender/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="asset/fullcalender/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print" />
<script src="asset/fullcalender/lib/moment.min.js" type="text/javascript"></script>
<script src="asset/fullcalender/lib/jquery.min.js" type="text/javascript"></script>
<script src="asset/fullcalender/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="asset/fullcalender/fullcalendar.min.js" type="text/javascript"></script>
<?php
 $regis = mysql_query("SELECT * FROM registrasi");
  $n_regis = mysql_num_rows($regis);
  $sudah_bayar=mysql_query("SELECT * FROM registrasi WHERE  status_pembayaran='2' ");
  $n_sudah_bayar=mysql_num_rows($sudah_bayar);
  $belum_bayar=mysql_query("SELECT * FROM pembayaran WHERE  verivikasi='0'");
  $n_belum_bayar=mysql_num_rows($belum_bayar);   
  $rakenas=mysql_query("SELECT * FROM acara WHERE  jenis_acara='RAKERNAS' ");
  $n_rakernas=mysql_num_rows($rakenas);   

      ?>
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
   <div class="container-fluid">
    <div class="row-fluid">
              
      <div class="span12">
        <div class="widget-box widget-calendar">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Selamat Datang Di Halaman ADMIN</h5>
          </div>
          <h1 align="center"> RAKERNAS DAN SEMILOKA 2017</h1>
            <div class="quick-actions_homepage">
    <ul class="quick-actions site-stats">
      <li class="bg_lb span3">   <b>jumlah peserta registrasi</b> <br> <h1> <?php echo $n_regis; ?> </h1></li>
      <li class="bg_lg span3">   <b>jumlah yang sudah bayar</b> <br> <h1><?php echo $n_sudah_bayar; ?></h1> </li>
      <a href="index.php?page=belum_verifikasi"><li class="bg_ly span3">   <b>pembayaran belum di verivikasi</b> <br> <h1><?php echo $n_belum_bayar; ?></h1></li></a>
    </ul>
  </div>
            </div>
            </div>
  </div>
</div>
