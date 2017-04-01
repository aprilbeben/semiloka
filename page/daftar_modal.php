<div class="portfolio-modal modal fade" id="modal_daftar" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h1>FORM REGISTRASI PESERTA</h1>
<hr>
<h3>data universitas</h3>
<hr>
 <form name="daftar" id="" novalidate action="page/simpan_registrasi.php" method="POST">
  <div class="col-md-12">
                                <div class="form-group">
                                <label class="pull-left"> PERGURUAN TINGGI </label>
                                    <input type="text" name="pt" class="form-control" placeholder="Perguruan Tinggi" id="pt" required data-validation-required-message="Tolong isikan Perguruan Tinggi Anda">
                                    <p  class=" help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  ALAMAT PERGURUAN TINGGI </label>
                                    <textarea name="alamat_pt" class="form-control" placeholder="Alamat Perguruan Tinggi" id="alamat_pt" required data-validation-required-message="Tolong isikan ALAMAT Perguruan Tinggi Anda"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  NO TELEPON PERGURUAN TINGGI </label>
                                    <input type="text" name="no_tlp_pt" class="form-control" placeholder=" Website Perguruan Tinggi" id="no_tlp_pt" required data-validation-required-message="Tolong isikan WEBSITE Perguruan Tinggi Anda">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  WEBSITE PERGURUAN TINGGI </label>
                                    <input type="text" name="web_pt" class="form-control" placeholder=" Website Perguruan Tinggi" id="web_pt" required data-validation-required-message="Tolong isikan WEBSITE Perguruan Tinggi Anda">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  EMAIL PERGURUAN TINGGI </label>
                                    <input type="email" name="email_pt" class="form-control" placeholder="Email Perguruan Tinggi Anda *" id="email_pt" required data-validation-required-message="Tolong isikan email Perguruan tinggi dengan benar">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  PROGRAM STUDI </label><br>
                                <div class="switch-field pull-center">
                                <input type="radio" id="MI" name="ps" value="MI" checked/>
                                <label for="MI">MANAJEMEN INFORMATIKA</label>
                                <input type="radio" id="KA" name="ps" value="KA" />
                                  <label for="KA">KOMPUTER AKUNTANSI</label>
                                  <input type="radio" id="TK" name="ps" value="TK" />
                                  <label for="TK">TEKNIK KOMPUTER</label>
                                  <input type="radio" id="LL" name="ps" value="LL" />
                                  <label for="LL">LAIN LAIN</label>                                
                                  </div>
                                </div>
                                <hr>
                                <h3>data diri</h3>
                                <hr>
                                <div class="form-group">
                                <label class="pull-left"> NAMA LENGKAP </label>
                                    <input type="text" name="nama" class="form-control" placeholder="nama lengkap" id="nama" required data-validation-required-message="Tolong isikan Nama Anda">
                                    <p  class=" help-block text-danger"></p>
                                </div>
                               
                                <div class="form-group">
                                <label class="pull-left">  GELAR DEPAN </label>
                                    <input type="text" name="gelar_d" class="form-control" placeholder=" Gelar Depan" id="gelar_d" required data-validation-required-message="Tolong isikan Gelar anda">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  GELAR BELAKANG </label>
                                    <input type="text" name="gelar_b" class="form-control" placeholder=" Gelar Belakang" id="gelar_b" required data-validation-required-message="Gelar Belakang harus di isi">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left"> NIDN </label>
                                    <input type="text" name="nidn" class="form-control" placeholder=" Gelar Belakang" id="nidn" required data-validation-required-message="Gelar Belakang harus di isi">
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="form-group">
                                <label class="pull-left">  JABATAN </label>
                                    <input type="text" name="jabatan" class="form-control" placeholder=" jabatan" id="web_pt" required data-validation-required-message="jabatan harus di isi">
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="form-group">
                                <label class="pull-left">  ALAMAT RUMAH </label>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat" id="alamat" required data-validation-required-message="alamat harus di isi"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  NO TELEPON </label>
                                    <input type="text" name="no_tlp" class="form-control" placeholder=" NO Telepon" id="no_tlp" required data-validation-required-message="no telepon harus di isi">
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="form-group">
                                <label class="pull-left">  WEBSITE </label>
                                    <input type="text" name="web" class="form-control" placeholder=" Website Perguruan Tinggi" id="web">
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  EMAIL</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Tolong isikan email dengan benar">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label class="pull-left">  ACARA </label><br>
                                <div class="switch-field pull-center">
                                <input type="checkbox" id="rakernas" name="acara[]" value="RAKERNAS" />
                                <label for="rakernas">RAKERNAS</label>
                                <input type="checkbox" id="semiloka" name="acara[]" value="SEMILOKA" />
                                  <label for="semiloka">SEMILOKA</label>                           
                                  </div>
                                </div>

                                <div class="form-group">
                                <input type="checkbox" name="mou" checkone data-validation-checkone-message="Tolong di setujui">Diberikan kewenangan untuk menandatangani MOU pada kegiatan tersebut diatas 
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


 