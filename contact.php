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
                    <a class="nav-link active"  href="#">Despre noi</a>
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
    
    <section id="section1">
      <div class="form-in">
        <div class="contact-form">
            <center><h1 class=" mb-3 font-weight-bold text-warning">Contact</h1></center>
            <form action="contactform.php" method="POST">
              <label>Nume și Prenume:</label>
              <input type="text" name = "name" class="contact-form-text" required >
              <label>Email:</label>
              <input type="email" name= "email" class="contact-form-text" required>
              <label>Subiect:</label>
              <input type="text" name = "subj" class="contact-form-text" required >
              <label>Mesaj:</label>
              <textarea class="form-control" name = "message" class="contact-form-textarea" required></textarea><br>
               
              <center><button type="submit" name="submit" class="btn btn-outline-success contact-form-btn">Trimite</button></center>
            </form>
        </div>
       </div>
    </section>

  
    <button id="topBtn"><i class="fa-solid fa-angles-up"></i></button>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
      
    </div>
  </div>
</footer>
</html>
        
