<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Author -->
  <meta name="Reyza Kertoprodjo" content="AMSES IT SOLUSINDO">
  <!-- description -->
  <meta name="description" content="Amses IT Solusindo">
  <!-- keywords -->
  <meta name="keywords" content="Amses IT Solusindo, Web App Developer">

  <title>AMSES | Web Design, Web App Development, Graphic Design</title>
  <link rel="icon" type="image/x-icon" href="asset/images/amses.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600&family=Leckerli+One&family=Sen:wght@400;700&display=swap" rel="stylesheet">

  <!-- FontAwesome Icons-->
  <script src="https://kit.fontawesome.com/1020a358ce.js" crossorigin="anonymous"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="asset/master.css">
  <style>
    .card *{
      width: 100%;
      text-align: left;

    }

    .card i{
      font-size: 250%;
      margin-bottom: .5em;
      color: var(--secondary);

    }

    .card p:nth-child(2){
      font-size: 120%;
      font-weight: 800;

    }

    .top{
      display: flex;
      justify-content: center;
      position: relative;
      z-index: 999;
      background-color: #fff;
      padding: .25em .5em;
      width: 100%;
      border-bottom: .25px solid rgba(1, 1, 3, 0.15);

    }

    .top p{
      color: #010101;
      font-family: 'Barlow', sans-serif;
      font-size: 87.5%;

    }

    /* Navigation Bar */
    nav{
      font-weight: 500;
      position: fixed;
      z-index: 999;
      display: flex;
      justify-content: center;
      width: 100%;

    }

    nav .wrapper{align-items: center;}

    /* Header Section */
    header{
      align-items: flex-start;
      justify-content: center;
      align-items: center;
      background: linear-gradient(180deg, rgba(1, 1, 3, 0), rgba(1, 1, 3, 0.75)), url('asset/images/christin-hume-Hcfwew744z4-unsplash.jpg');
      background-size: cover;
      background-position: bottom left;
      box-shadow: 0 .25px 5px rgba(1, 1, 3, .75);

    }

    header .wrapper{gap: .5em;}

    header p{
      color: #fff;
      width: 60%;

    }

    header .tagline{
      font-size: 350%;
      font-weight: 700;

    }

    header span{
      font-family: 'Leckerli One', cursive;
      font-weight: 500;
      color: var(--secondary);

    }

    /* Main Section */
    main{padding: 3.5em 0;}

    main .wrapper{
      align-items: center;
      text-align: center;

    }

    main p{width: 70%;}

    #service .tagline{
      font-size: 220%;
      font-weight: 800;

    }

    #service{padding: 0 2em;}

    #service .wrapper{
      flex-direction: row;
      gap: 5em;
      padding: 2em 1.5em;

    }

    #service .wrapper:nth-child(5){
      padding: 0;
      gap: 0;

    }

    #service .wrapper:nth-child(5) .wrapper{
      background-color: #C73E1D;
      text-align: left;
      justify-content: flex-start;
      margin-left: -5em;
      border-radius: 15px;

    }

    #service .wrapper:nth-child(5) .wrapper *{color: #fff;}

    #service .wrapper:nth-child(5) .wrapper p{width: 100%;}

    #service .wrapper:nth-child(5) img{
      width: 50%;
      border-radius: 5px;

    }

    @media(max-width: 768px){
      header{
        background-position: bottom;
        justify-content: flex-end;

      }

      header p{width: 80%;}

      #service .wrapper{
        flex-direction: column;
        align-items: center;

      }

      #service .wrapper *{text-align: center;}

      #service .wrapper:nth-child(5){width: 97.5vw;}

      #service .wrapper:nth-child(5) img{
        width: 100%;
        border-radius: 0;

      }

      #service .wrapper:nth-child(5) .wrapper{
        margin: 0;
        border-radius: 0 0 15px 15px;

      }

    }

  </style>

</head>

<body>
  <div class="top">
    <div class="wrapper">
      <p>Terima kasih telah menggunjungi situs kami! Kami masih menerapkan protokol kesehatan COVID 19 dengan bekerja di rumah - Stay Safe & Healthy!</p>

    </div>

  </div>

  <nav>
    <div class="wrapper">
      <?php include 'asset/navbar.html';?>

    </div>

  </nav>

  <header>
    <section class="wrapper" id="hero">
      <p class="tagline">Kami menyediakan <span>Solusi</span> ICT terbaik untuk anda.</p>
      <p> Didukung oleh tim yang berpengalaman, Tujuan Kami adalah memberikan solusi yang efektif dan tepat untuk bisnis anda. Kami melakukan kunjungan konsultasi ketempat anda.</p>
      <button type="button" name="button" class="alternate-button">Jadwalkan Kunjungan</button>

    </section>

  </header>

  <main>
    <section id="service" class="wrapper">
      <p class="title">Layanan Kami</p>
      <p class="tagline">Solusi tepat untuk bisnis anda.</p>
      <p class="caption">Kreatifitas kami curahkan di semua aspek, termasuk dalam menentukan perencanaan yang terbaik berdasarkan anggaran dan waktu Anda.</p>

      <div class="wrapper">
        <div class="card">
          <i class="fa-solid fa-comments"></i>
          <p>Konsultasi</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        </div>

        <div class="card">
          <i class="fa-solid fa-wand-magic-sparkles"></i>
          <p>Design</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        </div>

        <div class="card">
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <p>Engineering</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        </div>

        <div class="card">
          <i class="fa-solid fa-laptop-code"></i>
          <p>Maintenance</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        </div>

      </div>

      <div class="wrapper">
        <img src="asset/images/farzad-p-xSl33Wxyc-unsplash.jpg" alt="job_ilustration">

        <div class="wrapper" style="flex-direction: column; gap: 1.75em;">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button type="button" name="button" class="alternate-button">Selengkapnya..</button>

        </div>

      </div>

    </section>

    <section id="about" class="wrapper">
      <div class="wrapper">
        <p class="title">Tentang Kami</p>
        <p>This Section under development..</p>
        <button type="button" name="button">Selengkapnya..</button>

      </div>

    </section>

    <section id="insight" class="wrapper">
      <div class="wrapper">
        <p class="title">Tinjauan</p>
        <p>This Section under development..</p>
        <button type="button" name="button">Selengkapnya..</button>

      </div>

    </section>


  </main>

  <footer>
    <?php include 'asset/footer.html';?>

  </footer>

</body>

<!-- My Javascript -->
<script src="asset/script.js"></script>

</html>
