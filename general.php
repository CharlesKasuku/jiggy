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
       
            
            $name = $_POST['name'];
            $email = $_POST['email']; 
            $phone = $_POST['phone'];
            $category= $_POST['category'];
            $description = $_POST['description'];
            

            $name  =   mysqli_real_escape_string($connection, $name);
            $email =   mysqli_real_escape_string($connection, $email);
            $phone  =   mysqli_real_escape_string($connection, $phone);
            $category  =   mysqli_real_escape_string($connection, $category);
            $description  =   mysqli_real_escape_string($connection, $description);


  $query = "INSERT INTO quotations(name, email, phone, category, description) ";
       
  $query .= "VALUES('{$name}','{$email}', {$phone},'{$category}','{$description}') "; 
       
  $Inquiry = mysqli_query($connection, $query);  
    
  
function confirmQuery($Inquiry ){

global $connection;

if($Inquiry ){

die("FAILED". mysqli_error($connection));
}

} 

echo "<script>
 
 function respons() {

   alert('YOUR QUOTE HAS BEEN RECEIVED');
 }

</script>"; 

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
                        <li class="nav-item">
                                <a href="contact.php" class="nav-link bg-danger text-light">Contact Us</a>
                              </li>
                      </ul>
                  </div>
                  </div>
                </nav><br><br>

                <div class="container">
    

            
                        <section id="about" class="bg-light py-5">
                               
                            <div class="row">
                              <div class="col  ">
                                <h1 class="display-4 text-dark text-center font-weight-bold">ICT/Training consultancy services</h1>
                                <br>
    
                              </div>
                            </div>
                      
                          </section>
                        </div> 
                          
                          <div class="container">

                          <div class="row align-items-center">
                            <div class="col-md-6 d-none d-lg-block">
                        <section >
                        <div class="dark-overlay" id="over">
                        <div class="container" style="height:100vh">
                        <div class="col">
                        <p>
                          TRADE MAGNATE LIMITED(TML),is a firm which provides Training and ICT Consultancy 
                          services 
                          to clients in governments,private sector and non-governmental organization.
                          <br><br>
                          The major goal of <b class="text-danger">TML</b> is to  assist companies,
                           the government, and non-governmental organizations improve their efficiency and effectiveness 
                          through improved use of ICT resources, diverse ICT solutions for enhanced productivity and performance.
                          <br><br>
                          We provide tailored training for individuals, groups and corporate teams to enhance their knowledge 
                          and benefit from practical application of Modern technology, and ever evolving technology.
                         
                          <br><br>

                          </p>
                         
                        </div>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6 d-none d-lg-block">
                        <section >
                        <div class="dark-overlay" id="over">
                        <div class="container" style="height:100vh">
                        <div class="col">
                          <img src="img/ict training.jpg" height="550" width="600" alt="">
                        </div>
                        </div>
                        </div>
                      </div>
                        </section>
                      </div>

                      <div class="container">
                          <section id="" class="">
                            
                              <div class="row">
                                <div class="col text-center py-5">
                                  <br>
                                  <img src="img/training.jpg" width="800" height="400" alt="">
                                </div>
                              </div>
                            </section>            
                        </div>

                            <!-- contant modal -->
      <div class="container">
          <footer id="email" class="bg-light">
              
                <div class="row">
                  <div class="col text-center">
                    <button class="btn btn-danger" data-toggle="modal" data-target="#contactModal">Get a Quote</button>
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
                  <form action="respons.php" method="post" enctype="multipart/form-data">    
   
   
   
                    <div class="form-group">
                       <label for="phonenumber">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    
                    
                    
              
                    <div class="form-group">
                       <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                   
                  
                  
                    <div class="form-group">
                       <label for="password">Phone number</label>
                        <input type="number" class="form-control" name="phone" required>
                    </div>

                    <div class="form-group">
                     
                      <select name="category" id="" required>
                       <option value="">Select Category</option>
                         <option value="Construction & Maintenance of Hire Communication Mast">Construction & Maintenance of Hire Communication Mast</option>
                         <option value="Security">Security</option>
                         <option value="network">Networking Solutions</option>
                         <option value="Repair & Maintenance Solutions">Repair & Maintenance Solutions</option>
                         <option value="Hardware and Software Solutions">Hardware and Software Solutions</option>
                         <option value="Onsite/Offsite Backup">Onsite/Offsite Backup</option>
                         <option value="Onsite/Offsite Backup">ICT/Training  Consultancy Services</option>
                         
                       
                      </select>
                    
                     </div>
              
                    <div class="form-group">
                       <label for="cornfirmpassword">Description</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>

                  <button onclick="respons()" input class="btn btn-danger" name="submit">Inquire</button>
                  <!--<input class="btn btn-danger" type="submit" name="submit" value="Inquire">-->
              </div>
              
                    
                  </form>
                </div>
              </div>
            </div>
          </div>


                <!-- FOOTER  -->

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