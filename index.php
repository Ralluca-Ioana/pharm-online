<!DOCTYPE html>
<html>
    <head>
        <title>Sis Pharm</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="icon" type="image/x-icon" href="media/favicon.ico">
    </head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="media/logo.png" alt="logo" class="logo-nav"> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active border"  href="index.php">Acasă</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#section-2">Despre noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="cumpar.php">Cum cumpăr? </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="info.php">Info </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="livrare.php">Livrare </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="contact.php">Contactează-ne</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Caută" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Căutare</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

      <section id="section-1" class="banner">
     
      <div class="container">
          <div class="title"><h1 style = "font-size: 4.7rem;" class="text-center" >Sănătatea are nume!</h1></div>
          <blockquote class="subtitle blockquote text-center text-success">
            <p style="font-size:1.3rem; color: #75756f;"><i>Farmacia este <b>soră a Medicinii</b> și nu <b>fiică a Comerțului</b>.</i></p>
            <footer class="blockquote-footer">Carol Davilă</footer>
          </blockquote><br>

          <div class="button">
            <span class="spinner-border spinner-border-sm"></span>
            <a href="cumpar.php"> Cum comand? </a>
          </div>

      </div>
    </section>

    <section id="section-2" class="bg-black text-white pt-5 pb-4">
      <div class="container text-center text-md-left">
        <h3 class="mb-4 font-weight-bold text-warning">Bine ați venit la Sis Pharm!</h3><br>
        <p style="font-size: 1.2rem;">Conceptul <b>Sis Pharm</b> reprezintă o reinterpretare modernă a farmaciei cu receptură, aducând în prim plan un laborator amenajat la standarde europene și echipamente de ultimă generație. 
          Echipa noastră este formată din farmaciști cu experiență, instruiți și acreditați în diverse tehnici de preparare farmaceutică.</p><br>
        <div class="row text-center text-md-left">
          <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
            <a href="prep_pers.php"><img src="media/prep.png"  alt="prep" style="width: 19rem; height: 19rem; "></a><br>
            <p class="text-warning first-link">Preparate personalizate</p> <br>
          </div>
          <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
            <a href="pres_med.php"><img src="media/pres.png"  alt="pres" style="width: 19rem; height: 19rem; "></a><br>
            <p class="text-warning second-link">Eliberare de prescripții medicale</p> <br>
          </div>
        </div>
      </div>
    </section>


    <section id="section-3" class="section-carousel">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="media/Carousel1.jpg" class="d-block w-100 image-dim" alt="logo-farm">
            <div class="image-overlay"></div>
            <div class="carousel-caption">
              <h5>Farmacie specializată în prepararea tratamentelor specializate</h5>
              <p>Dacă la <b>Sis Pharm</b> nu găsești, înseamnă că nu <b>există</b>!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="media/Carousel2.jpg" class="d-block w-100 image-dim" alt="prep">
            <div class="image-overlay"></div>
            <div class="carousel-caption">
              <h5>Punem accent pe pacient şi nevoile lui!</h5>
              <p>Informarea justă şi sinceră a pacienţilor, alături de oferirea libertăţii de a alege, ne-a transformat într-un brand farmaceutic etalon din oraşul Botoșani. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="media/Carousel3.jpg" class="d-block w-100 image-dim" alt="pres">
            <div class="image-overlay"></div>
            <div class="carousel-caption">
              <h5>Cea mai bună metodă de a păstra tradiţia!</h5>
              <p>Continuarea activităţii de receptură începută de emeriţii farmacişti înaintaşi, îmbinând-o cu noutăţile apărute în domeniu</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  
    </section>

    <section id="section-4">
      <h3 class="text-center"><b>Pașii unui tratament personalizat</b></h3>
      <div class="container text-center">
            <div class="main center">
              <div class="box ">
                <a href="#" data-text="Consult medical"><i class="fa-solid fa-calendar fa-lg"></i></a>
                <a href="#" data-text="Diagnostic"><i class="fa-solid fa-lightbulb fa-lg"></i></a>
               
                <a href="#" data-text="Rețetă magistrală"><i class="fa-solid fa-scissors fa-lg"></i></a>
                <a href="#" data-text="Preparare tratament"><i class="fa-solid fa-moon fa-lg"></i></a>
                <a href="#" data-text="Administrare tratament"><i class="fa-solid fa-hospital fa-lg"></i></a>
                <a href="#" data-text="Reevaluare"><i class="fa-solid fa-stethoscope fa-lg"></i></a>
                <a href="#" data-text="Protocol încheiat"><i class="fa-solid fa-heart fa-lg"></i></a>
              </div>
            </div>
          </div>

         
            <div id="skills-section">
              <div class="container-steps">
                <p>Echipamente de ultimă generație </p>
                <div class="progress">
                  <div class="progress-bar" data-progress ="100">
                    <span>
                      100%
                    </span>
                  </div>
                </div>

                <p>Tehnici moderne de lucru</p>
                <div class="progress">
                  <div class="progress-bar" data-progress ="100">
                    <span>
                      100%
                    </span>
                  </div>
                </div>

                <p>Farmaciști acreditați</p>
                <div class="progress">
                  <div class="progress-bar" data-progress ="100">
                    <span>
                      100%
                    </span>
                  </div>
                </div>

                <p>Tratamente personalizate</p>
                <div class="progress">
                  <div class="progress-bar" data-progress ="100">
                    <span>
                      100%
                    </span>
                  </div>
                </div>
              </div>   
            </div>
          
       
      </div>  
    </section>

    <button id="topBtn"><i class="fa-solid fa-angles-up"></i></button>
  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--pt progress bar -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.min.js"></script>

</body >

<footer class="bg-black text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
          <p>
            <i class="fa-solid fa-location-dot"></i> Cuza Vodă nr. 15, <br>Botosani
          </p>
          <p>
            <i class="fa-solid fa-phone"></i> +40 743 904 391
          </p>
          <p>
            <i class="fa-solid fa-envelope"></i> info@sispharm.ro
          </p>
        </div>
        <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Program</h5>
          <p>
            <i class="fa-solid fa-clock"></i>  Luni-Vineri: 8-21
          </p>
          <p>
            &emsp;Sâmbătă: 8-19:30
          </p>
          <p>
            &emsp;Duminică: 9-17:30
          </p>
        </div>
        <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Urmărește-ne</h5>
          <ul class="list-unsyled list-inline">
            <li class="list-inline-item">
              <a href="contact.php" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="contact.php" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="contact.php" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-twitter"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Abonează-te</h5>
          
          <form action="subscribe.php" method="POST">
            <div class="input-group">
            
              <input type="email" class="form-control subscribeInput" name="email" placeholder="suport@exemplu.com"  aria-label="" aria-describedby="basic-addon1" required>
              <div class="input-group-append">
                <!-- <button class="btn btn-outline-warning" type="button" name= "subscribe" style="height: 100%;">Subscribe</button> -->
                <input class="btn btn-outline-warning" type="submit" name= "submit" style="height: 100%;" value="Subscribe">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</footer>
</html>
        