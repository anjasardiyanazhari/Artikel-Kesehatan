 <?php
          //notifikasi
          if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }

        //error
        echo validation_errors('<div class="alert alert-warning">','</div>');  
        //include Tambah
        include("tambah.php");

 ?>
 
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
  <th width="5%">No</th>
  <th>Nama Kategori</th>
  <th>Slug Kategori</th>
  <th>No Urut</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
  <?php $i=1; foreach ($kategori as $kategori) { ?>
 
<tr>
  <td><?php echo $i; ?></td>
  <td><?php echo $kategori->nama_kategori; ?>
  </td>
  <td><?php echo $kategori->slug_kategori; ?></td>
  <td><?php echo $kategori->urutan; ?></td>
 
  <td>
    <a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

    <?php 
    //link delete
        include('delete.php');
     ?>
  </td>
</tr>

<?php $i++; } ?>
</tbody>
</table>
