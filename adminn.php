<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fa/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <body data-spy="scroll" data-target="#main-nav" id="home">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <img src="img/mlogo.jpg" width="415" height="120" alt="">
                        
                    <div class="container">
                           
                    <a href="#index.html" class="navbar-brand"></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav ml-right">
                        <li class="nav-item dropdown active">
                          <a href="index.html" class="nav-link dropdown-toggle bg-danger text-light" data-toggle="dropdown">Home</a>
                          <div class="dropdown-menu  bg-danger text-light">
                            <a href="#about" class="dropdown-item">Who We Are</a>
                            <a href="#solution" class="dropdown-item">Our Solutions</a>
                            <a href="#social" class="dropdown-item">Our Pages</a>
                            <a href="admin.php" class="dropdown-item">Administration Area</a>
                           </div>
                        </li>
                        <li class="nav-item">
                          <a href="about.php" class="nav-link bg-danger text-light">About Us</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a href="services.html" class="nav-link dropdown-toggle bg-danger text-light" data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu  bg-danger text-light">
                              <a href="NDA.php" class="dropdown-item">Construction & Maintenance of Hire Communication Mast</a>
                              <a href="security.php" class="dropdown-item">Security</a>
                              <a href="RM.php" class="dropdown-item">Repair & Maintenance Solutions</a>
                              <a href="HS.php" class="dropdown-item">Hardware and Software Solutions</a>
                              <a href="backup.php" class="dropdown-item">Onsite/Offsite Backup</a>
                              <a href="general.php" class="dropdown-item">ICT/Training  Consultancy Services.</a>
                             </div>
                          </li>
                        <li class="nav-item">
                          <a href="career.php" class="nav-link bg-danger text-light">Career</a>
                        </li>
                        <li class="nav-item">
                          <a href="contact.php" class="nav-link bg-danger text-light">Contact Us</a>
                        </li>
                      </ul>
                  </div>
                  </div>
                </nav>
                <div class="container">
                    <section id="about" class="bg-light py-5">
                     
                        <div class="row">
                          <div class="col  ">
                            <h1 class="display-4 text-danger text-center font-weight-bold">YOU ARE NOT AN ADMINISTRATOR!!!</h1>
                            <br>
                          </div>
                        </div>
                      </section>            
                  </div>

  <!-- contant modal -->
  <div class="container">
<footer id="email" class="bg-light">
    
      <div class="row">
        <div class="col text-center py-4">
          <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#loginModal">Click to login</button>
        </div>
      </div>
    </div>
  </footer>
  <br><br><br>
  

  <!-- LOGIN MODAL -->
  <div class="modal fade text-dark" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">LOG IN</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="login.php" method="post">
            <div class="form-group">
              <label for="username">email</label>
              <input name="email"  type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input name="password" type="password" class="form-control">
            </div>
            <div class="modal-footer">
          <button name="login" type="submit"  class="btn btn-danger btn-block">login</button>
        </div>
            
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>



   
 

<!-- FOOTER  -->
<div class="container">
<footer  class="main-footer pt-3 text-light mt-3 bg-danger">
  
          <div class="row pt-2">
              <div class="col text-center">
                  <p>TRADE MAGNATE LIMITED</p>
                  <p ><span>
                          <a href="https://www.instagram.com"><i id="social" class="fab fa-instagram fa-2x" ></i></a>
                          <a href="https://www.facebook.com"><i id="social" class="fab fa-facebook fa-2x px-2"></i></a>
                          <a href="https://www.twitter.com"><i id="social" class="fab fa-twitter fa-2x px-2"></i></a>
                                  </span></p>
                  <p>Copyright &copy; <span id="year"></span></p>
                  <p>All Rights Reserved</p>
 
  </div>
     </div>
        </div>
    
  <!--</footer>-->
              

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    
        // Configure Slider
        $('.carousel').carousel({
          interval: 6000,
          pause: 'hover'
        });
    
        // Lightbox Init
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
    
    </script>

</body>
</html>