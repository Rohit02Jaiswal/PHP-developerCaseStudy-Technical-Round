<?php
   session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beauty Saloon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>Beauty Saloon</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Contact Page -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 info">
                <h2>Contact Info</h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h5><i class="fa-solid fa-phone fa-shake"></i>  Talk to Us</h5>
                        <p><strong>Toll Free:</strong> 9939530258</p>
                        <p><strong>Fax:</strong> 1224 xxxx 225</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <h5><i class="fa-regular fa-envelope fa-shake"></i>  Contact Us</h5>
                        <p>jaiswalrohit55028@gmail.com</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <h5><i class="fa-solid fa-location-dot"></i>  Location</h5>
                        <p>Aliah University, New Town, Kolkata, West Bengal, 700156</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <h5><i class="fa-regular fa-clock fa-spin"></i>  Opening Hours</h5>
                        <p>Mon - Sat 9 am to 8 pm</p>
                        <p>Sun - 10 am to 3 pm</p>
                    </div>
                </div>
            </div>
            <!-- Enquiry Form -->
            <div class="col-lg-6 col-md-6 col-12 enquiry">
                <h2>Enquiry Form</h2>
                <div class="row">
                    <form action="./saloon.php" method="POST">
                        <input type="text" name="Name" placeholder="Full Name">
                        <br>
                        <input type="text" name="number" placeholder="Phone Number">
                        <br>
                        <input type="email" name="Email" placeholder="Email">
                        <br>
                        <input type="text" name="subject" placeholder="Subject">
                        <br>
                        <textarea name="message" placeholder="Message"></textarea>
                        <br>
                        <input type="submit" value="Submit" name="submit" id="btn">
                        <div>
                          <?php
                          // session_start();
                          if(isset($_SESSION['message'])){
                          echo $_SESSION['message'];
                          unset($_SESSION['message']);
                          }
                          ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container-fluid foot">
    <div class="container">
        <div class="row footer">
            <div class="col-lg-12 col-md-12 col-12">
                <h5>Get In Touch</h5>
                <a href="#"><i class="fa-brands fa-whatsapp" style="color: #245a07;"></i></a>
                <a href="#"><i class="fa-brands fa-youtube" style="color: #e40707;"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github" style="color: #070808;"></i></a>
                <a href="#"><i class="fa-brands fa-facebook" style="color: #0d738c;"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" style="color: #a20707;"></i></a>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <p><i class="fa-regular fa-copyright"></i> 2023, Designed by <span>Rohit Jaiswal</span></p>
            </div>
        </div>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>