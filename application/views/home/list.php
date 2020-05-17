 <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo base_url() ?>assets/template/images/yong2.jpg">
            <div class="container">
              <div class="carousel-caption col-md-3 text-left">
                <h1> Dr. Khaerul Yasin S,Kom Amiin</h1>
                <p>Konsultasikan kesehatan anda Kepada kami, karena mencegah penyakit jauh lebih baik daripada mengobati.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo base_url() ?>assets/template/images/buah1.jpg">
            <div class="container">
              <div class="carousel-caption">
                <h1>4 sehat 5 sempurna</h1>
                <p>Konsumsi makanan makanan yang sehat , karena sangat baik untuk kesehatan tubah anda. terutama makanan yang mengandung unsur 4 sehat 5 sempurna</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo base_url() ?>assets/template/images/buah2.jpg">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Sayur dan buah</h1>
                <p>Perbanyak makan sayur sayuran dan buah untuk membantu proses metabolisme tubuh, karena buah dan sayur banyak mengandung banyak serat sehingga sangat baik untuk melancarkan proses metabolisme tubuh</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- area heading carosel -->

      <div class=" marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/template/images/yong3.jpg" width="140" height="140">
            <h2>Profil</h2>
            <p> Nama : Khaerul Yasin
                Tempat Tanggal Lahir : kandang kaoq, 14-08-1996
                Alamat : Nyangget, Desa jenggal , Kecamatan Tanjung, Kabupaten Lombok Utara
                Riwayat pendidikan :
                <!-- SD      : SDN 4 TANJUNG LOMBOK UTARA
                SMP     : SMPN 1 TANJUNG LOMBOK UTARA
                SMK     : SMKN 1 TANJUNG LOMBOK UTARA ( JURUSAN TKJ = TEKNIK KOMPUTER JARINGAN)
                PERGURUAN TINGGI : STMIK BUMIGORA MATARAM 
                S1 TEKNIK INFORMATIKA 
                JURUSAN RPL = REKAYASA PERANGKAT LUNAK -->
                </p>
            <p><a class="btn btn-primary" href="<?php echo base_url('profil') ?>" role="button"><i class="fa fa-eye"></i> View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/template/images/lokasi.png" width="140" height="140">
            <h2>Lokasi</h2>
            <p>Khaerul Yasin-Kesehatan 
                jln Ismail Marzuki no 2 
                kr. tapen RT02 Kelurahan Cilinaya 
                Kota Mataram 
                087822436128 
                khaerulyasin60@gmail.com 
                www.khaerulyasin.com 
                @khaerul yasin</p>
            <p><a class="btn btn-success" href="<?php echo base_url('lokasi') ?>" role="button"><i class="fa fa-eye"></i> View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/template/images/kontak.jpg" width="140" height="140">
            <h2>Kontak</h2>
            <p> 087822436128 
                 khaerulyasin60@gmail.com 
                 www.khaerulyasin.com 
                 @khaerul yasin
                 Anda dapat menghubungi kami melalui form berikut :
                 </p>
            <p><a class="btn btn-danger" href="<?php echo base_url('kontak') ?>" role="button"><i class="fa fa-eye"></i> View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

      <!-- album -->
     
      <div class="album py-5 bg-light">
        <div class="container">
        	<div class="row judul">
        		<div class="col-md-12 text-center">
        			<h1>Selamat Datang Di Website Kesehatan</h1>
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
