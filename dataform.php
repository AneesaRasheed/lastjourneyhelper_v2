<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css?v=<?=$version?>">
     <script defer  src="index.js?v=<?=$version?>"></script> 
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php

$con=mysqli_connect('localhost','root','','final_year_project');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($email,$v_code){
  
  require ('PHPMailer/PHPMailer.php');
  require ('PHPMailer/Exception.php');
  require ('PHPMailer/SMTP.php');

  $mail = new PHPMailer(true);

  try{
   
    $mail->isSMTP(); 
    $mail->Host= 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;  
    $mail->Username   = 'aneesarasheedch@gmail.com';                   
    $mail->Password   = 'wzdfduizklpynwfx';   
     $mail->SMTPSecure = 'tsl';
    $mail->Port       =587;  
    $mail->setFrom('aneesarasheedch@gmail.com','lastjourney v2');
    $mail->addAddress($email);

    $mail->isHTML(true);  
    $mail->Subject = 'LASTJOURNEYHELPER V2';
    $mail->Body    = "Welcome to LASTJOURNEYHELPER V2!<br>
    click here to visit our website http://localhost/fypfront/index.php"; 
   
    $mail->send();
    return true;
    }
    catch (Exception $e) {
      return false;
  }
}

if(isset($_POST['create'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $postolcode = $_POST['postolcode'];
  $phone = $_POST['phone'];
  $v_code = bin2hex(random_bytes(16));


  // Validation
  $errors = [];

  if (empty($firstname)) {
      $errors[] = "First name is required.";
  }

  if (empty($lastname)) {
      $errors[] = "Last name is required.";
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Valid email address is required.";
  }

  if (empty($password) || strlen($password) < 6) {
      $errors[] = "Password is required and should be at least 6 characters long.";
  }

  // Add more validation rules as needed

  if (empty($errors)) {
      $query = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`,`v_code`,`city`,`address`,`postolcode`,`phone`) 
                VALUES ('$firstname','$lastname','$email','$password','$v_code',' $city','$address', '$postolcode' , '$phone')";
      $run = mysqli_query($con, $query);

      if ($run == true && sendmail($_POST['email'], $v_code)) {
          header('location:index.php');
          exit;
      } else {
          echo "Error during registration.";
      }
  } else {
      // Display validation errors to the user
      foreach ($errors as $error) {
          // echo "<p>$error</p>";
          echo "<script>
          alert('$error');
           </script>";
      }
  }
}



if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validation
  $errors = [];

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Valid email address is required.";
  }

  if (empty($password)) {
      $errors[] = "Password is required.";
  }

 

  if (empty($errors)) {
      // No validation errors, proceed with login
      $sql = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
      $result = mysqli_query($con, $sql);

      if ($result) {
          $rec = mysqli_num_rows($result);
          if ($rec == 1) {
              $row = mysqli_fetch_assoc($result);
              $_SESSION['logged_in'] = true;
              $_SESSION['first_name'] = $row['firstname'];
              $_SESSION['last_name'] = $row['lastname'];
              $_SESSION['email_na'] = $row['email'];
              $_SESSION['city'] = $row['city'];
              $_SESSION['address'] = $row['address'];
              $_SESSION['postolcode'] = $row['postolcode'];
              $_SESSION['phone'] = $row['phone'];
              $_SESSION['user_id'] = $row['user_id'];

              header('location:index.php');
              exit;
          } else {
              echo "<script>alert('Invalid email or password. Please try again.');</script>";
          }
      } else {
          echo "Error while querying the database.";
      }
  } else {
      // Display validation errors to the user
      foreach ($errors as $error) {
          echo "<script>alert('$error');</script>";
      }
  }
}






// if(isset($_POST['login']))   
// {
//    $email=$_POST['email'];
//     $password=$_POST['password'];
//    $sql="SELECT * FROM `user` WHERE email='$email' and password='$password'";
//     $result=mysqli_query($con,$sql);
//     if($result==true){
//     $rec=mysqli_num_rows($result);
//     if($rec==1){
//       $row=mysqli_fetch_assoc($result);
//        $_SESSION['logged_in']=true;
//     $_SESSION['first_name']=$row['firstname'];
//     $_SESSION['last_name']=$row['lastname'];
//     $_SESSION['email_na']=$row['email'];
//     $_SESSION['city']=$row['city'];
//     $_SESSION['address']=$row['address'];
//     $_SESSION['postolcode']= $row['postolcode'];
//     $_SESSION['phone']= $row['phone'];
//     $_SESSION['user_id']=$row['user_id'];
 
//   header('location:index.php');
//     exit;
//  }
//   else{
    
//      header('location: create.php');
//      exit;
    
//   }
// }
// else
//   { 
//      echo "cant login";
//      header("location: index.php".mysqli_error($con));
//      exit;
//  } 
// }
?>




  

  




 
 

  
 



       

       

       
           
       



 
