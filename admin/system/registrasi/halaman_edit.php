<?php
  $no=$_GET['no_regis'];
 $data_registrasi=mysql_fetch_array(mysql_query("SELECT registrasi.*,data_universitas.*,data_peserta.* FROM registrasi INNER JOIN data_universitas ON registrasi.no_registrasi=data_universitas.no_registrasi INNER JOIN data_peserta ON registrasi.no_registrasi=data_peserta.no_registrasi  WHERE registrasi.no_registrasi='$no'"));
      ?>


  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_registrasi" title="pergi ke data wawancara" class="tip-bottom">data registrasi</a>
    <a href="" title="pergi ke tambah wawancara" class="tip-bottom"> edit data</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">EDIT DATA PESERTA REGISTRASI
            </h3>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Form edit data</h5>
          </div>
 <div class="widget-content nopadding">
            <form id="form-wizard" method="post">
              <div id="form-wizard-1" class="step">
              <div class="control-group">
                <div class="controls">
                <table class="table">
            
                    <tr>
                      <td><center><b>No Registrasi:</b></center></td>
                      <td><strong><input class="span8" type="text" name="no_regis" id="no_regis" value="<?php echo $data_registrasi['no_registrasi']?>" readonly></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>PERGURUAN TINGGI:</b></center></td>
                      <td><strong><input class="span8" type="text" name="pt" id="pt" value="<?php echo $data_registrasi['nama_pt']?>" ></strong></td>
                    </tr>
                    <tr>
                    <tr>
                      <td><center><b>Alamat PT</b></center></td>
                      <td><strong><textarea class="span8" name="alamat_pt" value="" ><?php echo $data_registrasi['alamat_pt']?></textarea></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>TELEPON PT:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="no_tlp_pt" value="<?php echo $data_registrasi['no_tlp_pt']?>" > ></td>
                    </tr>
                  <td><center><b>WEBSITE PT:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="web_pt" id="web_pt" value="<?php echo $data_registrasi['website_pt']?>"> </td>
                  </tr>
                   </tr>
                  <td><center><b>EMAIL PT:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="email_pt" id="email_pt" value="<?php echo $data_registrasi['email_pt']?>"> </td>
                  </tr>
                  <tr>
                  <td><center><b>Program Studi:</b></center></td>
                  <td>  
                  <?php
                  if($data_registrasi['program_studi']=="MI"){
                    echo"
                    <input class='span12' type='radio' name='ps' id='ps' Value='MI' selected checked /> MANAJEMN INFORMATIKA<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='KA' selected />  KOMPUTER AKUNTANSI<br>
                       <input class='span12' type='radio' name='ps' id='ps' Value='TK' selected /> TEKNIK KOMPUTER<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='LL' selected />  LAIN LAIN
                    ";
                  }
                   else if($data_registrasi['program_studi']=="KA"){
                    echo"
                    <input class='span12' type='radio' name='ps' id='ps' Value='MI' selected  /> MANAJEMN INFORMATIKA<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='KA' selected checked />  KOMPUTER AKUNTANSI<br>
                       <input class='span12' type='radio' name='ps' id='ps' Value='TK' selected /> TEKNIK KOMPUTER<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='LL' selected />  LAIN LAIN
                    ";
                  }
                   else if($data_registrasi['program_studi']=="TK"){
                    echo"
                    <input class='span12' type='radio' name='ps' id='ps' Value='MI' selected  /> MANAJEMN INFORMATIKA<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='KA' selected />  KOMPUTER AKUNTANSI<br>
                       <input class='span12' type='radio' name='ps' id='ps' Value='TK' selected checked /> TEKNIK KOMPUTER<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='LL' selected />  LAIN LAIN
                    ";
                  }
                   else if($data_registrasi['program_studi']=="LL"){
                    echo"
                    <input class='span12' type='radio' name='ps' id='ps' Value='MI' selected /> MANAJEMN INFORMATIKA<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='KA' selected />  KOMPUTER AKUNTANSI<br>
                       <input class='span12' type='radio' name='ps' id='ps' Value='TK' selected /> TEKNIK KOMPUTER<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='LL' selected  checked />  LAIN LAIN
                    ";
                  }
                  else{
                   echo"
                    <input class='span12' type='radio' name='ps' id='ps' Value='MI' selected /> MANAJEMN INFORMATIKA<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='KA' selected />  KOMPUTER AKUNTANSI<br>
                       <input class='span12' type='radio' name='ps' id='ps' Value='TK' selected /> TEKNIK KOMPUTER<br>
                     <input class='span12' type='radio' name='ps' id='ps' Value='LL' selected   />  LAIN LAIN
                    "; 
                  }

                  ?>
                     </td>
                  </tr>
              
                  
                </table>
                </div>
              </div>
                </div>
               <div id="form-wizard-2" class="step">
                <div class="control-group">
                  <label class="control-label" >
                  </label>
                  <div class="controls">
                  <table class="table">
            
                    <tr>
                      <td><center><b>NAMA:</b></center></td>
                      <td><strong><input class="span8" type="text" name="nama" id="nama" value="<?php echo $data_registrasi['nama']?>" ></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>GELAR DEPAN:</b></center></td>
                      <td><strong><input class="span8" type="text" name="gelar_d" id="gelar_d" value="<?php echo $data_registrasi['gelar_depan']?>" ></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>GELAR BELAKANG:</b></center></td>
                      <td><strong><input class="span8" type="text" name="gelar_b" id="gelar_b" value="<?php echo $data_registrasi['gelar_belakang']?>" ></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>NIDN:</b></center></td>
                      <td><strong><input class="span8" type="text" name="nidn" id="nidn" value="<?php echo $data_registrasi['nidn']?>" ></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>JABATAN:</b></center></td>
                      <td><strong><input class="span8" type="text" name="jabatan" id="jabatan" value="<?php echo $data_registrasi['jabatan']?>" ></strong></td>
                    </tr>

                    <tr>
                    <tr>
                      <td><center><b>Alamat:</b></center></td>
                      <td><strong><textarea class="span8" name="alamat" value="" ><?php echo $data_registrasi['alamat']?></textarea></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>TELEPON:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="no_tlp" value="<?php echo $data_registrasi['no_tlp']?>" > ></td>
                    </tr>
                  <td><center><b>WEBSITE:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="web" id="web" value="<?php echo $data_registrasi['website']?>"> </td>
                  </tr>
                   </tr>
                  <td><center><b>EMAIL:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="email" id="email" value="<?php echo $data_registrasi['email']?>"> </td>
                  </tr>
                  <tr>
                  <td><center><b>ACARA:</b></center></td>
                  <td>  
                  <?php
                  $query=mysql_query("SELECT * FROM acara WHERE no_registrasi='$no'");
                   $data=mysql_fetch_array($query);
                  $jumlah_data=mysql_num_rows($query);
                    if($jumlah_data=='2'){
                      echo"
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  checked/> RAKERNAS<br>
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='SEMILOKA' selected  checked/> SEMILOKA<br>
                    ";
                    }
                     if($jumlah_data=='1'){
                     
                    $data2=$data['jenis_acara'];
                  if($data2=="SEMILOKA"){
                        echo"
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  checked/> RAKERNAS<br>
                    <input class='span12' type='checkbox' name='acara][' id='acara' Value='SEMILOKA' selected /> SEMILOKA<br>
                    ";
                    }
                    if($data2=="RAKERNAS"){
                        echo"
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  checked/> RAKERNAS<br>
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='SEMILOKA' selected /> SEMILOKA<br>
                    ";
                    }
                  }
                        
                  if($jumlah_data==0){
                    echo"
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  /> RAKERNAS<br>
                    <input class='span12' type='checkbox' name='acara[]' id='acara' Value='SEMILOKA' selected  /> SEMILOKA<br>
                    ";
                  }

                  ?>
                     </td>
                  </tr>
              
                  
                </table>
                    </div>
                </div>
              </div>

              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" name="simpan" />
                <div id="status"></div>
              </div>
              <div id="submitted">
                <?php
    if(isset($_POST['simpan'])){
        $no_regis=$_POST['no_regis'];
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
    
    $update_uni="UPDATE data_universitas SET nama_pt='$pt',alamat_pt='$alamat_pt',no_tlp_pt='$no_tlp_pt',website_pt='$web_pt',email_pt='$email_pt',program_studi='$ps' WHERE no_registrasi='$no_regis'";
    $update_peserta="UPDATE data_peserta SET nama='$nama', gelar_depan='$gelar_d', gelar_belakang='$gelar_b',nidn='$nidn',jabatan='$jabatan',alamat='$alamat',no_tlp='$no_tlp',website='$web',email='$email' WHERE no_registrasi='$no_regis'";
    $delete_acara="DELETE FROM acara WHERE no_registrasi='$no_regis'";
    $up_u=mysql_query($update_uni) or die (mysql_error());
    $up_p=mysql_query($update_peserta) or die(mysql_error());
 $query=mysql_query("SELECT * FROM acara WHERE no_registrasi='$no_regis'");
                   $data=mysql_fetch_array($query);
                  $jumlah_data=mysql_num_rows($query);

    if($jumlah_data != 0){
 $del_a=mysql_query($delete_acara) or die(mysql_error());
    }
   
    for($i=0;$i<$jumlah_acara;$i++){
  $insert_acara=mysql_query("INSERT INTO acara (no_registrasi,jenis_acara) VALUES ('$no_regis','$acara[$i]')");
}

if( $up_u && $up_p){
    
            
            echo"   <script language='javascript'>
                            alert('Data Berhasil Masuk');
                          document.location.href='index.php?page=data_registrasi'
                          </script>   
                ";
            }else{
             echo"<script language='javascript'>
                       alert('Gagal');
              
                    </script> ";
            }   
        }
?>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>

