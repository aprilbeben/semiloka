<?php
    include('verifikasi.php');
    include('../fungsi/koneksi.php');
    include('../fungsi/fungsi_tanggal.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin SEMILOKA</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

<link rel="stylesheet" href="asset/css/bootstrap.min.css" />
<link rel="stylesheet" href="asset/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="asset/css/uniform.css" />
<link rel="stylesheet" href="asset/css/select2.css" />
<link rel="stylesheet" href="asset/css/fullcalendar.css" />
<link rel="stylesheet" href="asset/css/matrix-style.css" />
<link rel="stylesheet" href="asset/css/matrix-media.css" />
<link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  
</head>

<body>


<?php 
    if(@$_SESSION['level'] == 1){
        include('system/menu/menu_manajer.php');
   }
   ?>
<div id="content">
  <?php  include('system/route/routes.php'); ?>



 <!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> @2016 SEMILOKA </div>
</div>
</div>

<!--end-Footer-part-->

 <!-- Plugin JavaScript -->
<script src="asset/js/excanvas.min.js"></script> 
<script src="asset/js/jquery.min.js"></script> 
<script src="asset/js/jquery.ui.custom.js"></script> 
<script src="asset/js/bootstrap.min.js"></script> 
<script src="asset/js/jquery.uniform.js"></script> 
<script src="asset/js/select2.min.js"></script> 
<script src="asset/js/jquery.dataTables.min.js"></script> 
<script src="asset/js/matrix.js"></script>  
<script src="asset/js/matrix.tables.js"></script> 

<script src="asset/js/jquery.validate.js"></script> 
<script src="asset/js/jquery.wizard.js"></script> 
<script src="asset/js/matrix.wizard.js"></script>

<script src="asset/js/jquery.flot.min.js"></script> 
<script src="asset/js/jquery.flot.resize.min.js"></script> 
<script src="asset/js/jquery.peity.min.js"></script>

<script src="asset/js/fullcalendar.min.js"></script> 
<script src="asset/js/matrix.calendar.js"></script> 
<script src="asset/js/matrix.chat.js"></script> 


<script src="asset/js/matrix.popover.js"></script> 


<script src="asset/js/jquery.flot.pie.min.js"></script> 
<script src="asset/js/masked.js"></script> 
<script src="asset/js/wysihtml5-0.3.0.js"></script> 
<script src="asset/js/bootstrap-wysihtml5.js"></script> 
       
<script type="text/javascript">
function detailFoto(str) {
    if (str == "") {
        document.getElementById("data_detail_foto").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_detail_foto").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","system/pembayaran/detail_foto.php?no="+str,true);
        xmlhttp.send();
    }
}
</script>

<script type="text/javascript">
function registrasiDetail(str) {
    if (str == "") {
        document.getElementById("data_detail_registrasi").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_detail_registrasi").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","system/registrasi/detail_regis.php?no="+str,true);
        xmlhttp.send();
    }
}
</script>

</body>
</html>
