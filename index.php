<?php include("repartir.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Projeto 1_v2</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/Logo.png" rel="icon">
  <link href="./assets/img/Logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script>
    function funcao1()
    {
    alert("E-mail cadastrado com sucesso!");
    }
  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="./assets/img/Logo.png" alt="Logo_icon" class="img_style"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
        
      <nav id="navbar" class="navbar">
        <ul>
          <li id="slogan"><?php echo "$slogan"?></li>
          <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="#features">Como usar</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contato</a></li>
          <li><a class="nav-link scrollto" href="TelaLogin.php" >Adm<i class="bi bi-person-circle"></i></a></li>     
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>O que é o Canvas de Usabilidade?</h1>
            <h2 id="h2_style"><?php echo "$explicaCanvas"?></h2>
            <a href="./assets/download/ocanvasdeUsabilidade.docx" download="Manual (canvas)" class="download-btn"><i class="bi bi-box-arrow-down"></i> Manual</a>
            <a href="./assets/download/OLX_Autopass.rar" class="download-btn"><i class="bi bi-box-arrow-down"></i> OLX, Autopass</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="./assets/img/main.png" class="img-fluid" alt="" id="imgMain">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-title">
          <h2>Como usar o Canvas de Usabilidade?</h2>
        </div>
      
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1" id=ajuste>
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bi bi-wrench"></i>
                  <h4>1. Defina a Solução</h4>
                  <p>O que será avaliado?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-receipt"></i>
                  <h4>2. Defina os Requisitos</h4>
                  <p>Qual requisito ou funcionalidade será avaliado?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-person-circle"></i>
                  <h4>3. Defina os Usuários</h4>
                  <p>Quem são os participantes da avaliação?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-list-task"></i>
                  <h4>4. Defina a(s) Tarefas</h4>
                  <p>	Quais tarefas os participantes irão realizar?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-menu-up"></i>
                  <h4>5. Defina o Contexto</h4>
                  <p>Em quais contextos estão inseridos?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-card-checklist"></i>
                  <h4>6. Defina a(s) Alternativas</h4>
                  <p>Quais alternativas serão utilizadas?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                  <i class="bi bi-file-ruled"></i>
                  <h4>7. Defina os Critérios</h4>
                  <p>Quais são os critérios utilizados?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="700">
                  <i class="bx bx-id-card"></i>
                  <h4>8. Defina as Métricas</h4>
                  <p>Quais são as métricas utilizados?</p>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End App Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Assine o nosso Newsletter!</h4>
            <p>Para ficar por dentro de mais notícias e dicas sobre o Lean Canvas</p>
            <form action="newsletter.php" method="POST">
              <input type="email" name="email" placeholder="Digite o seu e-mail aqui"><input type="submit" value="Enviar" onclick="funcao1()">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row" id="ajuste_f">
            <h4>Contato</h4>
            <p id="p_footer">Nos siga nas redes sociais</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/ocanvasdeusabilidade/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/ocanvasdeusabilidade/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://web.whatsapp.com/" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->
          
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>