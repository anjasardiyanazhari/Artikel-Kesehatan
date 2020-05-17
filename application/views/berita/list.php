<div class="album py-5 bg-light">
        <div class="container">
        	<div class="row judul">
        		<div class="col-md-12 text-center">
        			<h1><?php echo $title ?></h1>
        			<!-- <hr> -->
        		</div>
        	</div>

        	<div class="row">
          <!-- mulai loop -->
            <?php foreach ($berita as $berita) {?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo base_url('assets/upload/image/thumb/'.$berita->gambar) ?>">
                <div class="card-body">
                	<h2><a href="<?php echo base_url('berita/read/'.$berita->slug_berita) ?>"><?php echo $berita->judul_berita ?></a></h2>
                  <p class="card-text"><?php echo character_limiter(strip_tags($berita->isi_berita),150) ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php echo base_url('berita/read/'.$berita->slug_berita) ?>"><button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button></a>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- batas loop -->
               <?php } ?>
        </div>

        <div class="row">
           
            <?php if(isset($pagination) && $total > $limit) { ?>
            <div class="paginasi col-md-12 text-center">
            <?php echo $pagination; ?>
          </div>
          <?php } ?>
        </div>
	</div>
</div>