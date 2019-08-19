<!DOCTYPE html>
<html>
<title>Andri Setiawan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="edit.jpg" rel="shortcut icon">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
.pict{
  opacity: 0.5;
}
.pict:hover{
  opacity: 1;
}
.container div{
  display: none;
}
.login{
  text-decoration: none;
  background-color: #222;
  border: 1px solid white;
  padding: 10px;
}
.login:hover{
  background-color: black;
}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="#">
  <img src="edit.jpg" style="width:100%"> </a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>TENTANG</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>FOTO</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>KONTAK</p>
  </a>
  <!-- <a href="login.php" class="login">Login</a> -->
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">TENTANG</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">FOTO</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">KONTAK</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Andri Setiawan.</h1>
    <p>Graphic and Web Designer.</p>
    <div class="container">
    <div style="display: block;"><img src="img1.png" alt="andri" class="w3-image" width="992" height="1108"></div>
    <div><img src="img2.png" alt="andri" class="w3-image" width="992" height="1108"></div>
    <div><img src="img3.png" alt="andri" class="w3-image" width="992" height="1108"></div>
    <div><img src="img4.png" alt="andri" class="w3-image" width="992" height="1108"></div>
    </div>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Tentang Saya</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Halo perkenalkan nama saya Andri Setiawan. Saya lahir 1 Oktober 1998 dan anak kedua dari satu bersaudara. Saya adalah lulusan SMA KAWUNG 1 Surabaya jurusan IPA (Ilmu Pengetahuan Alam). Saya sangat menyukai tentang teknologi, oleh karena itu selain saya belajar umum tentang jurusan IPA, saya juga belajar mengenai komputer. Pertama kali saya belajar tentang Desain Grafis, mulai dari dasar desain grafis, videografi dan sampai tentang fotografi saya pelajari semua. Setelah itu saya coba hal baru lagi yaitu tentang website. Disini saya belajar mulai dari HTML, CSS, PHP dan sampai mengetahui framework-framework dari komponen dasar website. 
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">Kemampuan</h3>
    <p class="w3-wide">Fotografi</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:65%"></div>
    </div>
    <p class="w3-wide">Desain Web</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>
    <p class="w3-wide">Photoshop</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="w3-wide">CorelDraw</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div>
    <p class="w3-wide">Editing</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:60%"></div>
    </div><br>

    <h3 class="w3-padding-16 w3-text-light-grey">Hobi</h3>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1</span><br>
        Berenang
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">2</span><br>
       Lari
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">3</span><br>
        Fotografi
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">4</span><br>
        Retouch Foto
      </div>
    </div>

    <!-- <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button> -->
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Pendidikan</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Formal</li>
          <li class="w3-padding-16">SDN Kemayoran 2-25 Surabaya</li>
          <li class="w3-padding-16">SMPN 38 Surabaya</li>
          <li class="w3-padding-16">SMA Kawung 1 Surabaya</li>
          <li class="w3-padding-16"><!-- Mail Support --></li>
         <!--  <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li> -->
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Non-Formal</li>
          <li class="w3-padding-16">BLC Taman Prestasi (Desain)</li>
          <li class="w3-padding-16">Sekolah Koding (IT)</li>
          <li class="w3-padding-16"><!-- 50GB Storage --></li>
          <li class="w3-padding-16"><!-- Endless Support --></li>
         <!--  <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li> -->
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">Ruang Saya</h3>  
    <!-- <img src="/w3images/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px"> -->
    <p><span class="w3-large w3-margin-right"><u> Lakukan Apa Yang Kau Suka </u></span> <!-- CEO at Mighty Schools. --></p>
    <p>Menurut saya prinsip hidup sangatlah penting. Saya selalu melakukan apa yang saya suka dan saya cintai. Tak peduli saya bisa atau tidak tapi setidaknya saya mencintai apa yang saya kerjakan sehingga akan timbul semangat untuk mengerjakannya, tak mudah menyerah saat gagal dan terus mencoba sampai benar-benar bisa. </p><br>
    
    <!-- <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px"> -->
    <p><span class="w3-large w3-margin-right"><u> Cintai Gagal Itu </u></span> <!-- CEO at Company. --></p>
    <p>Memang gagal adalah sesuatu yang tidak menyenangkan. Tapi dibalik itu kita mendapatkan sangat banyak pelajaran yang berharga untuk hidup kita. Gagal juga pertanda bahwa kita pernah mencoba meskipun itu gagal. Itu tak masalah, karena semua manusia juga butuh yang namanya kegagalan. </p>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Editing Foto</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="img/anyar2.jpg" style="width:100%" class="pict">
        <img src="img/anyar3.jpg" style="width:100%" class="pict">
        <img src="img/anyar10.jpg" style="width:100%" class="pict">
        <img src="img/anyar20.jpg" style="width:100%" class="pict">
      </div>

      <div class="w3-half">
        <img src="img/anyar15.jpg" style="width:100%" class="pict">
        <img src="img/anyar18.jpg" style="width:100%" class="pict">
        <img src="img/anyar19.jpg" style="width:100%" class="pict">
        <img src="img/anyar21.jpg" style="width:100%" class="pict">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Fotografi</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="img/1 (1).jpg" style="width:100%" class="pict">
        <img src="img/1 (2).jpg" style="width:100%" class="pict">
        <img src="img/1 (3).jpg" style="width:100%" class="pict">
        <img src="img/1 (4).jpg" style="width:100%" class="pict">
      </div>

      <div class="w3-half">
        <img src="img/1 (5).jpg" style="width:100%" class="pict">
        <img src="img/1 (6).jpg" style="width:100%" class="pict">
        <img src="img/1 (7).jpg" style="width:100%" class="pict">
        <!-- <img src="img/1 (1).jpg" style="width:100%" class="pict"> -->
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Kontak</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Surabaya, Indonesia</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>  +6282231161441</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i>  kenapaharusandri1@gmail.com</p>
    </div><br>
   <!--  <p>Lets get in touch. Send me a message:</p>

    <?php

    if( isset($_POST['submit'])){

      $email    = $_POST['email'];
      $subject  = $_POST['subject'];
      $pesan    = $_POST['pesan'];

      if(mail($email, $subject, $pesan)){
        echo 'email berhasil dikirim';
      }else{
        echo 'email gagal dikirim';
      }

    }

    ?>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="subject" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="pesan" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div> 
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href='https://www.facebook.com/profile.php?id=100006078159003'>
    <i class="fa fa-facebook-official w3-hover-opacity"></i> </a> 
    <a href="https://www.instagram.com/kenapaharusandri/">
    <i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://api.whatsapp.com/send?phone=6282231161441&text=Hello Andri!">
    <i class="fa fa-whatsapp w3-hover-opacity"></i></a>
    <a href="https://twitter.com/kenapaharusand1">
    <i class="fa fa-twitter w3-hover-opacity"></i></a>
    <!-- <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i> -->
    <p class="w3-medium"> Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="galeri.js"></script>

</body>
</html>
