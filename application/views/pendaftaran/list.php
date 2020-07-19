

<h4 class="cat-judul text-center"><?php echo $title ?></h4>

  <div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>"> Home</a></li>
        <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ul>

<br>

  <div class="col-md-7">
     <?php
     //Error warning
     echo validation_errors('<div class="alert alert-danger">','</div>');
     //Error Upload Gabar
     if(isset($error_upload)){
       echo '<div class="alert alert-danger">'.$errors_upload.'</div>';
     }
     echo form_open_multipart(base_url('pendaftaran/simpan_pendaftaran'));
     ?>
   </div>

<div class="row">

      <div class="col-md-3">
        <label>Pilih Layanan <span class="text-danger">*</span></label>
      </div>
      <div class="col-md-7">
         <div class="form-group">
           <select name="nama_layanan" class="form-control form-control-chosen" required>
             <option>-- Pilih Layanan --</option>
              <option value="Airport Car">Airport Car</option>
             <option value="Gama Ojek">Gama Ojek</option>
             <option value="Gama City Rent">Gama City Rent</option>
             <option value="Gama Food">Gama Food</option>
             <option value="Gama Send">Gama Send</option>
             <option value="Gama Box">Gama Box</option>
           </select>
         </div>
       </div>

      <div class="col-md-3">
        <label>Nama Lengkap  <span class="text-danger">*</span></label>
      </div>
      <div class="col-md-7">
         <div class="form-group">
           <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
         </div>
       </div>

      <div class="col-md-3">
       <label>Email  <span class="text-danger">*</span></label>
      </div>
      <div class="col-md-7">
         <div class="form-group">
           <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
         </div>
       </div>

       <div class="col-md-3">
        <label>Nomor HP  <span class="text-danger">*</span></label>
       </div>
       <div class="col-md-7">
          <div class="form-group">
            <input type="number" name="nomorhp" class="form-control" placeholder="Nomor Hp" required>
          </div>
        </div>

        <div class="col-md-3">
           <label>Kota  <span class="text-danger">*</span></label>
         </div>
         <div class="col-md-7">
           <div class="form-group">
             <select name="kota" class="form-control form-control-chosen" required>
               <option value="">-- Pilih Kota --</option>
               <option value="DKI Jakarta">DKI Jakarta</option>
               <option value="Tangerang">Tangerang</option>
               <option value="Depok">Depok</option>
               <option value="Bogor">Bogor</option>
               <option value="Bandung">Bandung</option>
                <option value="Tasikmalaya">Tasikmalaya</option>
                <option value="Semarang">Semarang</option>
                <option value="Yogyakarta">Yogyakarta</option>
                <option value="solo ">solo</option>
                <option value="salatiga ">Salatiga</option>
                <option value="Malang">Malang </option>
               <option value="Surabaya">Surabaya</option>
               <option value="Bali">Bali</option>
               <option value="Lampung">Lampung</option>
               <option value="Medan">Medan</option>
               <option value="Medan">Palembang</option>
               <option value="Medan">Manado</option>
               <option value="Medan">Makasar</option>
             </select>
           </div>
         </div>

      <div class="col-md-3">
        <label>Alamat Lengkap  <span class="text-danger">*</span></label>
      </div>
      <div class="col-md-7">
         <div class="form-group">
           <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required></textarea>
         </div>
       </div>

      <div class="col-md-3">
         <label>Tipe Kendaraan  <span class="text-danger">*</span></label>
       </div>
       <div class="col-md-7">
         <div class="form-group">
           <select name="tipe_kendaraan" class="form-control form-control-chosen" required>
             <option value="">-- Pilih Tipe Kendaraan --</option>
             <option value="Mobil">Mobil</option>
             <option value="Motor">Motor</option>
           </select>
         </div>
       </div>

       <div class="col-md-3">
         <label>Merek Kendaraan  <span class="text-danger">*</span></label>
       </div>
       <div class="col-md-7">
          <div class="form-group">
            <input type="text" name="merek_kendaraan" class="form-control" placeholder="Merek Kendaraan" required>
          </div>
        </div>

        <div class="col-md-3">
           <label>Tahun Kendaraan  <span class="text-danger">*</span></label>
         </div>
         <div class="col-md-7">
           <div class="form-group">
             <select name="tahun_kendaraan" class="form-control form-control-chosen" required>
               <option value="">-- Pilih Tahun Kendaraan --</option>
               <option value="2008">2008</option>
               <option value="2009">2009</option>
               <option value="2010">2010</option>
               <option value="2011">2011</option>
               <option value="2012">2012</option>
               <option value="2013">2013</option>
               <option value="2014">2014</option>
               <option value="2015">2015</option>
               <option value="2016">2016</option>
               <option value="2017">2017</option>
               <option value="2018">2018</option>
               <option value="2019">2019</option>
             </select>
           </div>
         </div>

      <div class="col-md-3">
        <label>Nomor KTP  <span class="text-danger">*</span></label>
      </div>
      <div class="col-md-7">
         <div class="form-group">
           <input type="number" name="no_ktp" class="form-control" placeholder="Nomor KTP/Sim" required>
         </div>
       </div>





<!-- Upload Foto -->
<div class="col-md-3">
  <label>Upload Foto  <span class="text-danger">*</span></label>
</div>

<div class="col-md-7">
<div class="row">
<div class="col-md-4">
<div class="wrap-custom-file col-md-12">
<input type="file" name="foto1" id="image1" accept=".gif, .jpg, .png" required>
<label  for="image1">
<span>Pas Foto</span>
<i class="fa fa-plus-circle"></i>
</label>
</div>
</div>

<div class="col-md-4">
<div class="wrap-custom-file col-md-12">
<input type="file" name="foto2" id="image2" accept=".gif, .jpg, .png" required>
<label  for="image2">
<span>Foto KTP</span>
<i class="fa fa-plus-circle"></i>
</label>
</div>
</div>

<div class="col-md-4">
<div class="wrap-custom-file col-md-12">
<input type="file" name="foto3" id="image3" accept=".gif, .jpg, .png" required>
<label  for="image3">
<span>Foto STNK</span>
<i class="fa fa-plus-circle"></i>
</label>
</div>
</div>

<div class="col-md-4">
<div class="wrap-custom-file col-md-12">
<input type="file" name="foto4" id="image4" accept=".gif, .jpg, .png" required>
<label  for="image4">
<span>Foto SKCK</span>
<i class="fa fa-plus-circle"></i>
</label>
</div>
</div>

<div class="col-md-4">
<div class="wrap-custom-file col-md-12">
<input type="file" name="foto5" id="image5" accept=".gif, .jpg, .png" required>
<label  for="image5">
<span>Foto SIM</span>
<i class="fa fa-plus-circle"></i>
</label>
</div>
</div>

</div>
</div>



       <div class="col-md-3"> </div>
       <div class="col-md-7">
         <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
       </div>


</div>
         <?php
         //Form close
         echo form_close();
          ?>

</div>
