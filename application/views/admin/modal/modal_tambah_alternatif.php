   <!-- page content -->
   <div class="right_col" role="main">
     <div class="">
       <div class="page-title">
         <div class="title_left">
           <h3><?= $Tabel; ?></h3>
         </div>
         <div class="title_right">
         </div>
       </div>
     </div>
     <div class="clearfix"></div>
     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
           <div class="x_title">
             <h2><?= $namaTabel; ?></h2>
             <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
             </ul>
             <div class="clearfix"></div>
           </div>
           <div class="x_content">
             <br />
             <div class="form-horizontal form-label-left">
               <?= form_open_multipart('alternatif/tambahAlternatif'); ?>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="kode" name="kode" required="required" class="form-control col-md-7 col-xs-12" value="<?= $kode; ?>" readonly>
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="jabatan" class="form-control col-md-7 col-xs-12" type="text" name="jabatan">
                 </div>
               </div>
               <div class="form-group">
                 <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <select id="heard" class="form-control" name="jenis_kelamin" required>
                     <option value="">-- Pilih --</option>
                     <option value="Laki-laki">Laki-Laki</option>
                     <option value="Perempuan">Perempuan</option>
                   </select>
                 </div>
               </div>

               <div class="form-group">
                 <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="tempat_lahir" class="form-control col-md-7 col-xs-12" type="text" name="tempat_lahir">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Lahir </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="date" id="tgl_lahir" name="tgl_lahir" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                 </div>
               </div>
               <div class="form-group">
                 <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Profil</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12" required="required" type="text">
                 </div>
               </div>
               <div class="form-group" style="margin-bottom:50px;">
                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button class="btn btn-primary" type="reset">Batal</button>
                   <button type="submit" class="btn btn-success">Tambah</button>
                 </div>
               </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- /page content -->