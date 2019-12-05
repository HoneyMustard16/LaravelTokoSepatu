<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ihsan Dwicahyo - Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>

  <!-- Header -->
  <body>
  <div class="header">
    <h2 class="logo">Dwicahyo's</h2>
    <ul class="menu">
      <a href="#product">Product</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </ul>
  </div>
  @yield('content')
  <!-- Contact -->
  <section id="contact">
    <div class="contact-info">
        <div class="card">
          <i class="card-icon far fa-envelope"></i>
          <p>Idwicahyo16@gmail.com</p>
        </div>
  
        <div class="card">
          <i class="card-icon fas fa-phone"></i>
          <p>+62 (0852)-8004-1952</p>
        </div>
  
        <div class="card">
          <i class="card-icon fas fa-map-marker-alt"></i>
          <p>Depok, Indonesia</p>
        </div>
      </div>
    </section>

      <!-- Footer -->
      <footer class="bg-black">
        <section id="footer"></section>
        <div class="social-buttons">
            <a href="https://github.com/HoneyMustard16/"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/goodguy_dc"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/goodguy_dc"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="container"> 
              Copyright &copy; Your Website 2019
          </div>
      </footer>
  </body>
</html>