<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tubes</title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"  id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/bg.png"  height="100" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#mainNav">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#model">Model</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#size">size</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" >
        <div class="carousel-item active" data-interval="10" >
          <img src="assets/img/bg1.webp" class="d-block w-100" alt="..."   >
      </div>
      <div class="carousel-item" data-interval="10">
          <img src="assets/img/bg2.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item"  data-interval="10">
          <img src="assets/img/bg3.webp" class="d-block w-100" alt="..." >
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<!-- About-->
<section class="page-section" id="about">
<div class="container">
  <div class="row">

   <div class="card mb-3" style="max-width: 540px;">

      <img src="assets/img/Ventela.png"  class="img-rounded">

  </div>
  <div class="col">
   <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">About</h5>
            <p class="card-text">Ventela®️ Shoes mulai di perkenalkan pada tahun 2017 oleh William Ventela, seorang pemilik pabrik sepatu vulkanisir sejak tahun 1989 di Bandung, Jawa Barat. Ventela®️ Shoes memiliki berbagai macam jenis dan model yang cocok digunakan untuk berbagai jenis kegiatan. Setiap pasang Ventela®️ Shoes melalui proses yang panjang dan detail, mulai dari pemilihan material, proses produksi hingga pemeriksaan kualitas yang sangat ketat. Hal ini dilakukan agar kualitas Ventela®️ Shoes terjaga dengan baik.</p>
        </div>
    </div>
</div>
</div>
</div>

</div>

</section>
<!-- Model-->
<section class="page-section" id="model">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Model</h2>
        <h3 class="section-subheading text-muted">Untuk kaki anda yang mulus</h3>
    </div>
@foreach($blogs as $awal)
                <div class="col-md-4" style="align-items: center">
                    <div class="card" style="align-items: center">
                        <div class="produke" >
                            <img src="{{ Storage::url('public/blogs/').$awal->image }}" class="card-img-top" alt="..." style="width: 150px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $awal->title }}</h5>
                            <p class="card-text">
                                <strong>Deskripsi :</strong> {{ $awal->content }} <br>

                            </p>
                        </div>
                    </div>
                    <div></div>
                </div>
                @endforeach
            </section>
<!-- Size-->
<section class="page-section bg-light" id="size">
<div class="container">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Size</h2>
        <h3 class="section-subheading text-muted">Ukuran untuk kaki anda yang mulus</h3>
    </div>
    <div class="text-center">
     <img src="assets/img/size.png "  >
 </div>
</div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
<div class="container">
    <div class="text-center">
        <h2 class="section-heading2 text-uppercase ">Contact Us</h2>
        <h3 class="section-subheading text-muted">Ini adalah alamat kami</h3>
    </div>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.973061621192!2d107.54888221376208!3d-7.012450994934565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eebee5c5cceb%3A0xad47b18a8be330b2!2sTaman%20Kopo%20Katapang!5e0!3m2!1sen!2sid!4v1607068102334!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="gm-style-iw gm-style-iw-c" style="padding-right: 0px; padding-bottom: 0px; max-width: 658px; max-height: 200px; min-width: 0px;"><div class="gm-style-iw-d" style="overflow: scroll; max-height: 182px;"><div><div id="content">
        </div>
    </div>
</div>
</section>
<!-- Footer-->
<footer class="footer py-4">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-4 text-lg-left">Copyright © Diemas</div>
        <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/ventelashoes?lang=en"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ventelashoes/"><i class="fab fa-instagram " ></i></a>
        </div>
    </div>
</div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
