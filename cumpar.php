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

    <section id="section-1">
        <p class="advertising">Important! Preparatele personalizate folosite în tratarea diferitelor patologii se pot elibera doar pe baza rețetei recomandate de către medic.</p>
        <p class="shop"> Pentru a comanda pe baza prescripțiilor medicale, fie preparate realizate în farmacia noastră, fie produse farmaceutice, vă rugăm să completați formularul de mai jos, apoi să încărcați o poză clară a rețetei. </p>
        <p class="shop contact-info">Pentru orice alte informații și nelămuriri, puteți accesa secțiunea<i> <a class="link-success " href="contact.php">Contactează-ne</a></i>, unde personalul medical vă stă la dispoziție.</p>
    </section>


    <section id="section-2" >
      <div class="form-in">
       <div class="form-map">
         <iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2683.042649834311!2d26.661679586799195!3d47.741827194040454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4734e97c6fe6bd49%3A0xc1fa0ab2c4ebfc2e!2sStrada%20Cuza%20Vod%C4%83%2015%2C%20Boto%C8%99ani%20717113!5e0!3m2!1sro!2sro!4v1646865362323!5m2!1sro!2sro" frameborder="0"
         style="border:0" allowfullscreen width="100%"></iframe>
       </div>
       <div class="contact-form">
           <center><h1 class=" mb-3 font-weight-bold text-warning">Pacient</h1></center>
           <form action="cumparform.php" method="POST" enctype = "multipart/form-data">
             <label>Nume și Prenume:</label>
             <input type="text" name = "name_patient" class="contact-form-text" required>
             <label>Email:</label>
             <input type="email" name = "email" class="contact-form-text" required>
             <label >Introduceți vârsta:</label>
             <input type="number" name = "age" min="0" class="contact-form-text" required>
             <label>Telefon:</label>
             <input type="text" name="phone" class="contact-form-text" required>
             <label>Adresa:</label>
             <input type="text" name = "address" class="contact-form-text" required>
             <label>Observații:</label>
             <textarea id ="text" cols="40" rows="4" class="form-control contact-form-textarea" name = "obs"></textarea><br>

             <center><h1 class=" mb-3 font-weight-bold text-warning">Medic</h1></center>
             <label>Nume și Prenume:</label>
              <input type="text" name = "name_medic" class="contact-form-text" required>
              <label>Rețetă:</label><br>
              
              <div class="form-group">
                <input type="file" name = "prescription" class="form-control-file" required>
              </div>
              <br>
              <label>Fișier suplimentar:</label><br>
              <div class="form-group">
                <input type="file" name = "additional_file" class="form-control-file" required>
              </div>
              <br>
              <center><button type="submit" name="upload" class="btn btn-outline-success contact-form-btn">Trimite</button></center>
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
        
