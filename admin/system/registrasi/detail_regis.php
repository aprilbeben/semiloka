<?php

include('../../../fungsi/koneksi.php');
  $no=$_GET['no'];
 $data_registrasi=mysql_fetch_array(mysql_query("SELECT registrasi.*,data_universitas.*,data_peserta.* FROM registrasi INNER JOIN data_universitas ON registrasi.no_registrasi=data_universitas.no_registrasi INNER JOIN data_peserta ON registrasi.no_registrasi=data_peserta.no_registrasi  WHERE registrasi.no_registrasi='$no'"));
      ?>

                <table class="table">
                    <tr>
                      <td><center><b>No Registrasi:</b></center></td>
                      <td><strong><input class="span6" type="text" name="no_regis" id="no_regis" value="<?php echo $data_registrasi['no_registrasi']?>" readonly></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>PERGURUAN TINGGI:</b></center></td>
                      <td><strong><input class="span6" type="text" name="pt" id="pt" value="<?php echo $data_registrasi['nama_pt']?>" readonly></strong></td>
                    </tr>
                    
                    <tr>
                      <td><center><b>Alamat PT</b></center></td>
                      <td><strong><textarea class="span6" name="alamat_pt" value="" readonly><?php echo $data_registrasi['alamat_pt']?></textarea></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>TELEPON PT:</b></center></td>
                      <td align="center"><input class="span6" type="text" name="no_tlp_pt" readonly value="<?php echo $data_registrasi['no_tlp_pt']?>" > ></td>
                    </tr>
                  <td><center><b>WEBSITE PT:</b></center></td>
                    <td class="width70"><input type="text" class="span6" name="web_pt" readonly id="web_pt" value="<?php echo $data_registrasi['website_pt']?>"> </td>
                  </tr>
                  <tr>
                  <td><center><b>EMAIL PT:</b></center></td>
                    <td class="width70"><input type="text" class="span6" name="email_pt" readonly id="email_pt" value="<?php echo $data_registrasi['email_pt']?>"> </td>
                  </tr>
                  <tr>
                  <td><center><b>Program Studi:</b></center></td>
                  <td>  
                  <?php
                  if($data_registrasi['program_studi']=="MI"){
                    echo"
                   <input type='text' name='ps' readonly value='MANAJEMEN INFORMATIKA'>
                    ";
                  }
                   else if($data_registrasi['program_studi']=="KA"){
                    echo"
                  <input type='text' name='ps' readonly value='KOMPUTER AKUNTANSI'>
                    ";
                  }
                   else if($data_registrasi['program_studi']=="TK"){
                    echo"
                    <input type='text' name='ps' readonly value='TEKNIK KOMPUTER'>
                    ";
                  }
                   else if($data_registrasi['program_studi']=="LL"){
                    echo"
                      <input type='text' name='ps' readonly value='LAIN LAIN'>
                    ";
                  }
                  else{
                   echo"
                   <input type='text' name='ps' readonly value=''>
                    "; 
                  }

                  ?>
                     </td>
                  </tr>
                    <tr>
                      <td><center><b>NAMA:</b></center></td>
                      <td><strong><input class="span6" type="text" name="nama" id="nama" value="<?php echo $data_registrasi['nama']?>" readonly></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>GELAR DEPAN:</b></center></td>
                      <td><strong><input class="span6" type="text" name="gelar_d" id="gelar_d" value="<?php echo $data_registrasi['gelar_depan']?>" readonly></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>GELAR BELAKANG:</b></center></td>
                      <td><strong><input class="span6" type="text" name="gelar_b" id="gelar_b" value="<?php echo $data_registrasi['gelar_belakang']?>" readonly></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>NIDN:</b></center></td>
                      <td><strong><input class="span6" type="text" name="nidn" id="nidn" value="<?php echo $data_registrasi['nidn']?>" readonly></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>JABATAN:</b></center></td>
                      <td><strong><input class="span6" type="text" name="jabatan" id="jabatan" value="<?php echo $data_registrasi['jabatan']?>" readonly></strong></td>
                    </tr>

                  
                    <tr>
                      <td><center><b>Alamat:</b></center></td>
                      <td><strong><textarea class="span6" name="alamat" value="" readonly><?php echo $data_registrasi['alamat']?></textarea></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>TELEPON:</b></center></td>
                      <td align="center"><input class="span6" type="text" name="no_tlp" readonly value="<?php echo $data_registrasi['no_tlp']?>" > ></td>
                    </tr>
                    <tr>
                  <td><center><b>WEBSITE:</b></center></td>
                    <td class="width70"><input type="text" class="span6" readonly name="web" id="web" value="<?php echo $data_registrasi['website']?>"> </td>
                  </tr>
                   <tr>
                  <td><center><b>EMAIL:</b></center></td>
                    <td class="width70"><input type="text" class="span6" readonly name="email" id="email" value="<?php echo $data_registrasi['email']?>"> </td>
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
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  readonly checked/> RAKERNAS<br>
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='SEMILOKA' selected  readonly  checked/> SEMILOKA<br>
                    ";
                    }
                     if($jumlah_data=='1'){
                     
                    $data2=$data['jenis_acara'];
                  if($data2=="SEMILOKA"){
                        echo"
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  readonly  checked/> RAKERNAS<br>
                    <input class='span6' type='checkbox' name='acara][' id='acara' Value='SEMILOKA' selected readonly /> SEMILOKA<br>
                    ";
                    }
                    if($data2=="RAKERNAS"){
                        echo"
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  readonly  checked/> RAKERNAS<br>
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='SEMILOKA' selected readonly/> SEMILOKA<br>
                    ";
                    }
                  }
                        
                  if($jumlah_data==0){
                    echo"
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='RAKERNAS' selected  readonly/> RAKERNAS<br>
                    <input class='span6' type='checkbox' name='acara[]' id='acara' Value='SEMILOKA' selected  readonly/> SEMILOKA<br>
                    ";
                  }

                  ?>
                     </td>
                  </tr>
       
                </table>
                   
            