<!DOCTYPE html>
<html>
<head>
	<title>Khaerul Yasin Kesehatan</title>
	<!-- icon -->
	<link rel="shortcut icon"  href="images/icon.jpg">
	<!-- description -->
	<meta name="description" content="Kaherul Yasin-UAS Tema kesehatan">
	<!-- keywords -->
	<meta name="keywords" content="Kaherul Yasin-UAS Tema kesehatan">
	<!-- Author -->
	<meta name="Author" content="Khaerul Yasin">
	<!-- Link css bootstrap -->
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<!-- Link css sendiri -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	 <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      	<div class="container">
        <a class="navbar-brand" href="index.php">Khaerul-Kesehatan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="artikel.php" target="blank">Artikel</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="profil.php" target="blank">Profil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="kontak.php" target="blank">Kontak</a>
            </li>
          </ul>
          <!-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
        </div>
      </nav>
    </header>

	
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/yong2.jpg">
            <div class="container">
              <div class="carousel-caption col-md-3 text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="images/buah1.jpg">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="images/buah2.jpg">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
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
            <img class="rounded-circle" src="images/yong3.jpg" width="140" height="140">
            <h2>Profil</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-primary" href="profil.php" role="button"><i class="fa fa-eye"></i> View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/lokasi.png" width="140" height="140">
            <h2>Lokasi</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-success" href="lokasi.php" role="button"><i class="fa fa-eye"></i> View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="images/kontak.jpg" width="140" height="140">
            <h2>Kontak</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-danger" href="kontak.php" role="button"><i class="fa fa-eye"></i> View details &raquo;</a></p>
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
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                     <!--  <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                     <!--  <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                     <!--  <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/logo.jpg">
                <div class="card-body">
                	<h2><a href="detail.php">Judul Artikel</a></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn btn-success"><i class="fa fa-eye"></i> Detail...</button>
                      <!-- <button type="button" class="btn btn-sm btn btn-success">Edit</button> -->
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- FOOTER -->
     
      <footer class="footer">
      	<div class="container">
        <p class="float-right"><a href="#" class="back-to-top"> Back to top</a></p>
        <p>&copy; 2017-2018 Khaerul Yasin Kesehatan, Inc. &middot; <a href="#" >Privacy</a> &middot; <a href="#">Terms</a></p>
        </div>
      </footer>

    </main>

</body>
<!-- load javascript jqury  -->
	<script src="jquery-ui/external/jquery/jquery.js" type="text/javascript"></script>

<!-- load javascript bootstrap  -->	
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	  
</html>