 <?php
          //notifikasi
          if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }

 ?>
 <p>
   <a href="<?php echo base_url('admin/berita/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
 </p>         
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th>Gambar</th>
  <th>Judul</th>
  <th>Jenis</th>
  <th>Status</th>
  <th>Penulis</th>
  <th>Tanggal</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
  <?php $i=1; foreach ($berita as $berita) { ?>
 
<tr>
  <td><?php echo $i; ?></td>
  <td><img src="<?php echo base_url('assets/upload/image/thumb/'.$berita->gambar ) ?>" 
  width="60" class="img img-thumbnail"></td>
  <td><?php echo $berita->judul_berita; ?></td>
  <td><?php echo $berita->jenis_berita; ?></td>
  <td> <?php echo $berita->status_berita; ?></td>
  <td><?php echo $berita->nama; ?></td>
  <td> <?php echo $berita->tanggal_post; ?></td>
  <td>
    <a href="<?php echo base_url('admin/berita/edit/'.$berita->id_berita) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

    <?php 
    //link delete
        include('delete.php');
     ?>
  </td>
</tr>

<?php $i++; } ?>
</tbody>
</table>
