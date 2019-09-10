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

<?php session_start(); ?>
<?php ob_start(); ?>

<?php 

if(isset($_SESSION['role'])) {

  if($_SESSION['role'] !== 'admin') {

    header("Location: ./user");
  }
}

?>


<?php

if(isset($_POST['login'])){
    
   
    
 $email  =   $_POST['email'];
 $password  =   $_POST['password'];
    
    
 $email  =   mysqli_real_escape_string($connection, $email);
 $password  =   mysqli_real_escape_string($connection, $password);
    
    
    $query = "SELECT * FROM users WHERE email = '{$email}' ";
    $select_user_query = mysqli_query($connection, $query);
    
    
    if(!$select_user_query){
        
        die("QUERY FAILED" .mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($select_user_query)){
        
         $db_user_id = $row['user_id'];
         $db_email = $row['email'];
         $db_password = $row['password'];
     
    }
  
    if($email === $db_email && $password === $db_password){
        
        $_SESSION['email'] = $db_email;
        $_SESSION['password'] = $db_password;
    echo $_SESSION['role'] = $db_role;
        
       header("Location: ./admin");
        
    } else {
        
        header("Location: adminn.php"); 
        
    }
        
 
}

?>