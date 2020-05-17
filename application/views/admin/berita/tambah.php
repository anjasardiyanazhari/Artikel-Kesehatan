<?php 
	//error
	echo validation_errors('<div class="alert alert-warning">','</div>');

	//error upload
	if(isset($error_upload)){
		echo '<div class="alert alert-warning">'.$error_upload.'</div>';
	}
	//Atribut Form
	$Atribut='class="alert alert-success"';
	//form open
	echo form_open_multipart(base_url('admin/berita/tambah'),$Atribut);

 ?>
 <div class="col-md-8">
 	<div class="form-group form-group-lg">
 		<label>Judul Berita</label>
 		<input type="text" name="judul_berita" class="form-control" placeholder="Judul berita" 
 		value="<?php echo set_value('judul_berita') ?>" required></input>
 	</div>
 </div>

  <div class="col-md-4">
 	<div class="form-group form-group-lg">
 		<label>Status Berita</label>
 		<select name="status_berita" class="form-control">
 			<option value="Publish">Publish</option>
 			<option value="Draft">Draft</option>
 		</select>
 	</div>
 </div>

 <div class="col-md-4">
 	<div class="form-group ">
 		<label>Jenis Berita</label>
 		<select name="jenis_berita" class="form-control">
 			<option value="Berita">Kesehatan</option>
 			<option value="Profil">Kebugaran</option>
 		</select>
 	</div>
 </div>

  <div class="col-md-4">
 	<div class="form-group ">
 		<label>Kategori Berita</label>
 		<select name="id_kategori" class="form-control">
 		<?php foreach ($kategori as $kategori ) {?>
 			<option value="<?php echo $kategori->id_kategori; ?>">
 			<?php echo $kategori->nama_kategori; ?></option>
 			<?php } ?>
 		</select>
 	</div>
 </div>

<div class="col-md-4">
	<div class="form-group">
		<label>Upload Gambar</label>
		<input type="file" name="gambar" class="form-control" required=""></input>
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		<label>Isi berita</label>
		<textarea name="isi_berita" class="form-control tinymce" placeholder="isi berita"><?php echo set_value('isi_berita'); ?></textarea>
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		<label>Keyword berita</label>
		<textarea name="keywords" class="form-control" placeholder="keywords berita"><?php echo set_value('keywords'); ?></textarea>
	</div>

	<div class="form-group text-right">
		<button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> Simpan</button>

		<button type="reset" name="reset" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Batal</button>
	</div>
</div>
 <div class="clearfix"></div>

 <?php 
 	//form close
 	echo form_close();
  ?>

