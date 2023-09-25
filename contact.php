<?php
include('header.php');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>last journey</title>
    <link rel="stylesheet" href="CSS/style.css?v=<?=$version?>"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css?v=2' rel='stylesheet'>
</head>
<body>
    <!-- ======================================== 
        contact us section start
 ========================================  -->
 <section class=" section section-contact">
  <div class="container">
 <h2 class="common-heading">Contact Us</h2>
 </div>
 <div class="section-contact-main contact-container">
  
 <?php
// contact form
$con=mysqli_connect('localhost','root','','final_year_project');
if(isset($_POST["submitcontactform"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email1=$_POST["email"];
    $mess=$_POST["message"];
   $contactform="INSERT INTO `contactform`(`name`, `phone`, `email`, `message`) VALUES (' $name',' $phone',' $email1',' $mess')";
    $query=mysqli_query($con,$contactform);
    if($query==true){
        echo"<p class='contactthankyou'>Thank you for taking the time to contact us.</p>";
    
    }
}
else{
?>
 <form  method="POST">
 <div class="grid grid-two-column">
  <div>
    <input type="text"  placeholder="Name" name="name">
</div>
   <div>
        <input type="phone" placeholder="Phone" name="phone">
        </div>
        </div>
        <div>
        <input type="Email"  placeholder="Email" name="email">
        </div>
        <div>
        <textarea  name="message" rows="5" cols="77" placeholder="Message"></textarea>
        </div>

  <input type="submit" name="submitcontactform"  value="Send message" class="btn"></input>
</form>
 <?php }?>
</div>
</section>
<?php
include('footer.php');
?>

</body>
</html>