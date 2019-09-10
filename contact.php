<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'trade_magnate';

foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
    
}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
  
   die("not connected" . mysqli_error());
}

?>
<?php
   

   if(isset($_POST['submit'])) {
       
            
            $name    = $_POST['name'];
            $email    = $_POST['email'];
            $sms        = $_POST['sms'];
            

            $query = "INSERT INTO contact(name, email, sms ) ";
                 
            $query .= "VALUES('{$name}','{$email}','{$sms}' ) "; 
                 
            $submit = mysqli_query($connection, $query);  
              
            //confirmQuery($create_user_query); 
       
       
                // echo "User Created: " . " " . "<a href='index.php'>click to login</a> "; 
       
      
   
   }
    

?>



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
                          <li class="nav-item">
                              <a href="index.html" class="nav-link bg-danger text-light">Home</a>
                            </li>
                        <li class="nav-item">
                          <a href="about.php" class="nav-link bg-danger text-light">About Us</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a href="services.html" class="nav-link dropdown-toggle bg-danger text-light" data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu  bg-danger text-light">
                                
                              <a href="NDA.php" class="dropdown-item">Construction & Maintenance of Hire Communication Mast</a>
                              <a href="security.php" class="dropdown-item">Security</a>
                              <a href="network.php" class="dropdown-item">Networking Solutions</a>
                              <a href="RM.php" class="dropdown-item">Repair & Maintenance Solutions</a>
                              <a href="HS.php" class="dropdown-item">Hardware and Software Solutions</a>
                              <a href="backup.php" class="dropdown-item">Onsite/Offsite Backup</a>
                              <a href="general.php" class="dropdown-item">ICT/Training  Consultancy Services.</a>
                             </div>
                          </li>
                        <li class="nav-item">
                          <a href="career.php" class="nav-link bg-danger text-light">Career</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a href="index.html" class="nav-link dropdown-toggle bg-danger text-light" data-toggle="dropdown">Contact Us</a>
                            <div class="dropdown-menu  bg-danger text-light">
                              <a href="#contanct" class="dropdown-item">Get in Touch</a>
                              <a href="#email" class="dropdown-item">Send Email</a>
              
                             </div>
                          </li>
                      </ul>
                  </div>
                  </div>
                </nav>
                

                <div class="container">
                    <section id="about" class="bg-light py-5">
                     
                        <div class="row">
                          <div class="col  ">
                            <h1 class="display-4 text-dark text-center font-weight-bold">Get in Touch</h1>
                            <br>
                          </div>
                        </div>
                      </section>            
                  </div>
                  <!--Address-->
                  <section id="address" class="py-5">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                            <img src="img/address.png" width="150" height="150" alt="">
                
                          <div class="card text-center">
                            <div class="card-header bg-danger text-white">
                             
                            </div>
                            <div class="card-body">
                              <p class="card-title font-weight-bold">Zein House 2nd Floor Jomo Kenyatta Avenue P.O.BOX 42256-80100,Mombasa-Kenya<p>
                              
                              
                              <a href="#" class="btn btn-danger btn-block mt-2"></a>
                            </div>
                          </div>
                        </div>
                        <!--call-->
                        <div class="col-md-4">
                            <img src="img/call.png" width="150" height="150" alt="">
                          <div class="card text-center">
                            <div class="card-header bg-danger text-white">
                             
                            </div>
                            <div class="card-body" id="contanct">
                              <p class="card-title font-weight-bold">Office Tel:+254 41 2022457 <br>Office mobile+254 706 683663</p>
                              
                              <br>
                              <a href="#" class="btn btn-danger btn-block mt-2"></a>
                            </div>
                          </div>
                        </div>
                        <!--Email-->
                        <div class="col-md-4">
                            <img src="img/email.png" width="150" height="150" alt="">
                          <div class="card text-center">
                            <div class="card-header bg-danger text-white">
                              
                            </div>
                            <div class="card-body">
                                <p class="card-title font-weight-bold">sales@trade-magnate.com<br>installations@trade-magnate.com</p>
                                <br>
                              <a href="#" class="btn btn-danger btn-block mt-2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>    
                  
                  <div class="container">
                      <section id="" class="">
                        
                          <div class="row">
                            <div class="col text-center py-5">
                              <br>
                              <img src="img/place.png" width="1100" height="500" alt="">
                            </div>
                          </div>
                        </section>            
                    </div>
                      
                    
                    
                    <div class="container">
                        <section id="about" class="bg-light py-5">
                         
                            <div class="row">
                              <div class="col  ">
                                <h1 class="display-4 text-dark text-center font-weight-bold">Email us today</h1>
                                <br>
                                <p class="display-5 text-dark text-center ">Feel free to drop us an email, we will be glad to respond to you.</p>
                              </div>
                            </div>
                          </section>            
                      </div>

      <!-- contant modal -->
      <div class="container">
    <footer id="email" class="bg-light">
        
          <div class="row">
            <div class="col text-center py-4">
              <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#contactModal">Click to send us an Email</button>
            </div>
          </div>
        </div>
      </footer>
      <br><br><br>
      
    
                     <!-- CONTACT MODAL -->
                     <div class="modal fade text-dark" id="contactModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">.....everything ICT</h5>
                            <button class="close" data-dismiss="modal">
                              <span>&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="contact.php" method="post">
                              <div class="form-group">
                                  <label for="name">Name</label>
                              <input type="text" class="form-control form-control-lg" name="name" required>
                              <div class="invalid-feedback">
                                Please provide your name.
                              </div>
                              </div>
                                   
                              <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control form-control-lg" name="email" required>
                              </div>
                                   
                              
                              <div class="form-group">
                              
                              <label for="message">Message</label>
                              <textarea class="form-control" name="sms" required></textarea>
                              </div> 
                           
                              <div class="form-group">
                              <input class="btn btn-danger btn-block" type="submit" name="submit" value="SUBMIT">
                              </div>
                              
                              </form>
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

            (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
        
        </script>
    
    </body>
    </html>