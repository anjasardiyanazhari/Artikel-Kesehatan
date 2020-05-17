<?php 

	//notifikasi
	if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }

	//error
	echo validation_errors('<div class="alert alert-warning">','</div>');

	//Atribut Form
	$Atribut='class="alert alert-success"';
	//form open
	echo form_open(base_url('admin/profile'));

 ?>
<div class="row">
 <div class="col-md-6">
 	<div class="form-group">
 		<label>Nama User</label>
 		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $user->nama ?>" required>
 	</div>

 	<div class="form-group">
 		<label>Email User</label>
 		<input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $user->email ?>" required>
 	</div>

 	<div class="form-group">
 		<label>Hak Akses</label>
 		<input type="text" name="akses_level" class="form-control"  value="<?php echo $user->akses_level ?>" readonly>
 	</div>

 </div>


 <div class="col-md-6">
 	<div class="form-group">
 		<label>Username</label>
 		<input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="<?php echo $user->username ?>" readonly>
 	</div>

 	<div class="form-group">
 		<label>Password</label>
 		<input type="Password" name="password" class="form-control" placeholder="Masukkan password" value="<?php echo set_value('password') ?>" required>
 	</div>

 	<div class="form-group">
 		<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
 		<input type="reset" name="reset" class="btn btn-warning" value="Batal">
 	</div>
 	
 </div>
</div>
 <?php 
 	//form close
 	echo form_close();
  ?>

